<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Projecten';

    protected static ?string $modelLabel = 'Project';

    protected static ?string $pluralModelLabel = 'Projecten';

    protected static ?int $navigationSort = 0;

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(1)->components([
            Section::make('Algemeen')
                ->schema([
                    TextInput::make('title')
                        ->label('Titel')
                        ->required()
                        ->placeholder('De Krachtfabriek Huissen'),
                    TextInput::make('slug')
                        ->label('URL Slug')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->prefix('/projecten/')
                        ->placeholder('de-krachtfabriek-huissen')
                        ->disabled(fn (string $operation): bool => $operation === 'edit')
                        ->dehydrated(),
                    TextInput::make('type')
                        ->label('Type')
                        ->placeholder('PT Studio'),
                    TextInput::make('size')
                        ->label('Oppervlakte')
                        ->placeholder('200 m²'),
                    TextInput::make('location')
                        ->label('Locatie')
                        ->placeholder('Nijmegen'),
                    Toggle::make('is_published')
                        ->label('Gepubliceerd')
                        ->default(true),
                    TextInput::make('sort_order')
                        ->label('Sorteervolgorde')
                        ->numeric()
                        ->default(0),
                ])
                ->columns(2),

            Section::make('SEO en Card')
                ->schema([
                    Textarea::make('meta_desc')
                        ->label('Meta beschrijving')
                        ->rows(2),
                    Textarea::make('card_desc')
                        ->label('Card beschrijving')
                        ->rows(2)
                        ->helperText('Korte tekst op de overzichtspagina'),
                    TextInput::make('card_image')
                        ->label('Card afbeelding (pad)')
                        ->placeholder('assets/projecten/slug/card.jpg'),
                ])
                ->columns(1),

            Section::make('Hero')
                ->schema([
                    TextInput::make('hero_title')
                        ->label('Hero titel (HTML)')
                        ->placeholder('Naam <span class="text-primary">Stad</span>')
                        ->helperText('Gebruik <span class="text-primary">tekst</span> voor blauwe accenten'),
                    Textarea::make('hero_desc')
                        ->label('Hero beschrijving')
                        ->rows(3),
                ])
                ->columns(1),

            Section::make('Content secties')
                ->description('Sectie 1 = wit (intro), Sectie 2 = donker (met stats en merken), Sectie 3 = wit. Extra secties wisselen af.')
                ->schema([
                    Repeater::make('sections')
                        ->label('')
                        ->schema([
                            TextInput::make('label')
                                ->label('Label')
                                ->placeholder('De opdracht'),
                            TextInput::make('title')
                                ->label('Titel (HTML)')
                                ->placeholder('Compact en <span class="text-primary">doelgericht</span>'),
                            Textarea::make('p1')
                                ->label('Paragraaf 1')
                                ->rows(3),
                            Textarea::make('p2')
                                ->label('Paragraaf 2')
                                ->rows(3),
                            TextInput::make('media')
                                ->label('Media (pad naar afbeelding of video)')
                                ->placeholder('assets/projecten/slug/foto.jpg'),
                        ])
                        ->defaultItems(3)
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string => !empty($state['label']) ? $state['label'] . ': ' . strip_tags($state['title'] ?? '') : 'Nieuwe sectie')
                        ->addActionLabel('Sectie toevoegen')
                        ->columns(1),
                ])
                ->columns(1),

            Section::make('Merken en highlights')
                ->schema([
                    TagsInput::make('merken')
                        ->label('Merken')
                        ->placeholder('Voeg merk toe'),
                    TagsInput::make('highlights')
                        ->label('Highlights')
                        ->placeholder('Voeg highlight toe'),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Titel')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color('gray')
                    ->sortable(),
                TextColumn::make('location')
                    ->label('Locatie')
                    ->placeholder('-'),
                TextColumn::make('size')
                    ->label('m²')
                    ->placeholder('-'),
                IconColumn::make('is_published')
                    ->label('Live')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('sort_order')
                    ->label('#')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
