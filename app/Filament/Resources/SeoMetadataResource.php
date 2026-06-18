<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoMetadataResource\Pages;
use App\Models\SeoMetadata;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SeoMetadataResource extends Resource
{
    protected static ?string $model = SeoMetadata::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?string $navigationLabel = 'SEO Beheer';

    protected static ?string $modelLabel = 'SEO Pagina';

    protected static ?string $pluralModelLabel = "SEO Pagina's";

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(1)->components([
            Section::make('Pagina Identificatie')
                ->schema([
                    TextInput::make('url_path')
                        ->label('URL Pad')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->placeholder('/over-ons')
                        ->disabled(fn (string $operation): bool => $operation === 'edit')
                        ->dehydrated()
                        ->helperText(fn (string $operation): string => $operation === 'edit'
                            ? 'Dit veld kan niet worden gewijzigd.'
                            : 'Het pad van de pagina, bijv. /over-ons of /apparatuur/cardio'),
                    TextInput::make('page_title')
                        ->label('Pagina Naam (intern)')
                        ->placeholder('Over Ons')
                        ->helperText('Alleen zichtbaar in dit admin paneel'),
                ])
                ->columns(1),

            Section::make('SEO Meta Tags')
                ->schema([
                    TextInput::make('meta_title')
                        ->label('Meta Titel')
                        ->maxLength(70)
                        ->placeholder('Over ons | Fitness Aannemer')
                        ->helperText('Aanbevolen: 50-60 tekens'),
                    Textarea::make('meta_description')
                        ->label('Meta Beschrijving')
                        ->rows(3)
                        ->maxLength(160)
                        ->placeholder('Maak kennis met Fitness Aannemer...')
                        ->helperText('Aanbevolen: 120-160 tekens'),
                    Select::make('robots')
                        ->label('Robots Directive')
                        ->options([
                            'index, follow' => 'Index, Follow (standaard)',
                            'noindex, follow' => 'Noindex, Follow',
                            'index, nofollow' => 'Index, Nofollow',
                            'noindex, nofollow' => 'Noindex, Nofollow',
                        ])
                        ->default('index, follow'),
                    TextInput::make('canonical_url')
                        ->label('Canonical URL')
                        ->url()
                        ->placeholder('https://fitnessaannemer.nl/over-ons')
                        ->helperText('Laat leeg om automatisch de huidige URL te gebruiken'),
                ])
                ->columns(1),

            Section::make('Open Graph / Social Media')
                ->schema([
                    TextInput::make('og_title')
                        ->label('OG Titel')
                        ->maxLength(70)
                        ->placeholder('Laat leeg om meta titel te gebruiken'),
                    Textarea::make('og_description')
                        ->label('OG Beschrijving')
                        ->rows(3)
                        ->maxLength(200)
                        ->placeholder('Laat leeg om meta beschrijving te gebruiken'),
                    FileUpload::make('og_image')
                        ->label('OG Afbeelding')
                        ->image()
                        ->disk('public')
                        ->directory('seo-images')
                        ->helperText('Aanbevolen: 1200x630 pixels'),
                    Select::make('og_type')
                        ->label('OG Type')
                        ->options([
                            'website' => 'Website',
                            'article' => 'Article',
                        ])
                        ->default('website'),
                ])
                ->columns(1),

            Section::make('Structured Data (JSON-LD)')
                ->schema([
                    Textarea::make('schema_markup')
                        ->label('JSON-LD Schema')
                        ->rows(15)
                        ->columnSpanFull()
                        ->helperText('Plak hier de volledige JSON-LD structured data inclusief <script> tags. Laat leeg om de standaard schema uit de code te gebruiken.'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_title')
                    ->label('Pagina')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url_path')
                    ->label('URL')
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('meta_title')
                    ->label('Meta Titel')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('robots')
                    ->label('Robots')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'index, follow' => 'success',
                        'noindex, follow' => 'warning',
                        default => 'danger',
                    }),
                TextColumn::make('updated_at')
                    ->label('Bijgewerkt')
                    ->dateTime('d-m-Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('robots')
                    ->options([
                        'index, follow' => 'Index, Follow',
                        'noindex, follow' => 'Noindex, Follow',
                        'noindex, nofollow' => 'Noindex, Nofollow',
                    ]),
            ])
            ->defaultSort('url_path')
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeoMetadata::route('/'),
            'edit' => Pages\EditSeoMetadata::route('/{record}/edit'),
        ];
    }
}
