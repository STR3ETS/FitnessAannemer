<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingPageResource\Pages;
use App\Models\LandingPage;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LandingPageResource extends Resource
{
    protected static ?string $model = LandingPage::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationLabel = "Landingspagina's";

    protected static ?string $modelLabel = 'Landingspagina';

    protected static ?string $pluralModelLabel = "Landingspagina's";

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(1)->components([
            Section::make('Algemeen')
                ->schema([
                    TextInput::make('slug')
                        ->label('URL Slug')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->prefix('/lp/')
                        ->placeholder('zomeractie-2024')
                        ->helperText('De URL wordt: /lp/jouw-slug')
                        ->disabled(fn (string $operation): bool => $operation === 'edit')
                        ->dehydrated(),
                    Toggle::make('is_published')
                        ->label('Gepubliceerd')
                        ->helperText('Alleen gepubliceerde pagina\'s zijn zichtbaar op de website'),
                ])
                ->columns(1),

            Section::make('Hero')
                ->description('De bovenste sectie van de pagina met donkere achtergrond')
                ->schema([
                    TextInput::make('hero_label')
                        ->label('Label')
                        ->placeholder('Zomeractie 2024')
                        ->helperText('Klein label boven de titel (optioneel)'),
                    TextInput::make('hero_title')
                        ->label('Titel')
                        ->required()
                        ->placeholder('Jouw gym <span class="text-primary">realiseren</span>')
                        ->helperText('Gebruik <span class="text-primary">tekst</span> voor blauwe accenten'),
                    Textarea::make('hero_description')
                        ->label('Beschrijving')
                        ->required()
                        ->rows(3)
                        ->placeholder('Korte beschrijving van het aanbod...'),
                    TextInput::make('hero_cta_text')
                        ->label('Primaire knop tekst')
                        ->required()
                        ->placeholder('Gratis adviesgesprek'),
                    TextInput::make('hero_cta_url')
                        ->label('Primaire knop link')
                        ->required()
                        ->placeholder('/gratis-adviesgesprek'),
                    TextInput::make('hero_cta2_text')
                        ->label('Secundaire knop tekst')
                        ->placeholder('Bekijk onze projecten'),
                    TextInput::make('hero_cta2_url')
                        ->label('Secundaire knop link')
                        ->placeholder('/projecten'),
                ])
                ->columns(1),

            Section::make('Secties')
                ->description('Voeg secties toe met + of verwijder met het prullenbak icoon. Achtergrondkleur wisselt automatisch wit/donker af.')
                ->schema([
                    Repeater::make('sections')
                        ->label('')
                        ->schema([
                            TextInput::make('label')
                                ->label('Label')
                                ->placeholder('Onze aanpak')
                                ->helperText('Klein label boven de titel (optioneel)'),
                            TextInput::make('title')
                                ->label('Titel')
                                ->required()
                                ->placeholder('Waarom kiezen voor <span class="text-primary">ons</span>')
                                ->helperText('Gebruik <span class="text-primary">tekst</span> voor blauwe accenten'),
                            Textarea::make('text1')
                                ->label('Paragraaf 1')
                                ->required()
                                ->rows(3),
                            Textarea::make('text2')
                                ->label('Paragraaf 2')
                                ->rows(3),
                            FileUpload::make('image')
                                ->label('Afbeelding')
                                ->image()
                                ->disk('public')
                                ->directory('landing-pages'),
                            TextInput::make('cta_text')
                                ->label('CTA knop tekst')
                                ->placeholder('Meer informatie'),
                            TextInput::make('cta_url')
                                ->label('CTA knop link')
                                ->placeholder('/contact'),
                        ])
                        ->defaultItems(1)
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string => $state['title'] ? strip_tags($state['title']) : 'Nieuwe sectie')
                        ->addActionLabel('Sectie toevoegen')
                        ->columns(1),
                ])
                ->columns(1),

            Section::make('SEO')
                ->description('Zoekmachine optimalisatie')
                ->schema([
                    TextInput::make('meta_title')
                        ->label('Meta Titel')
                        ->maxLength(70)
                        ->placeholder('Zomeractie | Fitness Aannemer')
                        ->helperText('Laat leeg om de hero titel te gebruiken. Aanbevolen: 50-60 tekens'),
                    Textarea::make('meta_description')
                        ->label('Meta Beschrijving')
                        ->rows(3)
                        ->maxLength(160)
                        ->helperText('Aanbevolen: 120-160 tekens'),
                ])
                ->columns(1),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
                    ->label('URL')
                    ->prefix('/lp/')
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('hero_title')
                    ->label('Titel')
                    ->formatStateUsing(fn (string $state): string => strip_tags($state))
                    ->limit(50)
                    ->searchable(),
                IconColumn::make('is_published')
                    ->label('Status')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Aangemaakt')
                    ->dateTime('d-m-Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLandingPages::route('/'),
            'create' => Pages\CreateLandingPage::route('/create'),
            'edit' => Pages\EditLandingPage::route('/{record}/edit'),
        ];
    }
}
