<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmissionResource\Pages;
use App\Models\Submission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Filament\Infolists\Components\TextEntry;

class SubmissionResource extends Resource
{
    protected static ?string $model = Submission::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationLabel = 'Aanvragen';

    protected static ?string $modelLabel = 'Aanvraag';

    protected static ?string $pluralModelLabel = 'Aanvragen';

    protected static ?int $navigationSort = -1;

    public static function getNavigationBadge(): ?string
    {
        $count = Submission::whereNull('read_at')->count();
        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('read_status')
                    ->label('')
                    ->icon(fn (Submission $record): string => $record->isRead() ? 'heroicon-o-envelope-open' : 'heroicon-s-envelope')
                    ->color(fn (Submission $record): string => $record->isRead() ? 'gray' : 'primary')
                    ->getStateUsing(fn () => true),
                TextColumn::make('naam')
                    ->label('Naam')
                    ->weight(fn (Submission $record) => $record->isRead() ? null : 'bold')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('bedrijfsnaam')
                    ->label('Bedrijf')
                    ->placeholder('-')
                    ->searchable(),
                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'adviesgesprek' => 'info',
                        'offerte' => 'primary',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('email')
                    ->label('E-mail')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('telefoon')
                    ->label('Telefoon')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Datum')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('type')
                    ->label('Type')
                    ->options([
                        'adviesgesprek' => 'Adviesgesprek',
                        'offerte' => 'Offerte',
                    ]),
                TernaryFilter::make('read_at')
                    ->label('Status')
                    ->nullable()
                    ->trueLabel('Gelezen')
                    ->falseLabel('Ongelezen')
                    ->placeholder('Alles'),
            ])
            ->actions([
                ViewAction::make(),
                Action::make('toggleRead')
                    ->label(fn (Submission $record) => $record->isRead() ? 'Ongelezen' : 'Gelezen')
                    ->icon(fn (Submission $record) => $record->isRead() ? 'heroicon-o-envelope' : 'heroicon-o-envelope-open')
                    ->action(fn (Submission $record) => $record->update([
                        'read_at' => $record->isRead() ? null : now(),
                    ]))
                    ->color('gray'),
                DeleteAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Contactgegevens')
                    ->schema([
                        TextEntry::make('naam')->label('Naam'),
                        TextEntry::make('email')
                            ->label('E-mail')
                            ->url(fn (Submission $record) => 'mailto:' . $record->email),
                        TextEntry::make('telefoon')
                            ->label('Telefoon')
                            ->url(fn (Submission $record) => 'tel:' . $record->telefoon),
                        TextEntry::make('bedrijfsnaam')
                            ->label('Bedrijf')
                            ->placeholder('-'),
                    ])
                    ->columns(2),

                Section::make('Details')
                    ->schema([
                        TextEntry::make('type')
                            ->label('Type')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'adviesgesprek' => 'info',
                                'offerte' => 'primary',
                                default => 'gray',
                            }),
                        TextEntry::make('data.ruimte_type')
                            ->label('Type ruimte')
                            ->placeholder('-')
                            ->visible(fn (Submission $record) => !empty($record->data['ruimte_type'])),
                        TextEntry::make('data.type_ruimte')
                            ->label('Type ruimte')
                            ->placeholder('-')
                            ->visible(fn (Submission $record) => !empty($record->data['type_ruimte'])),
                        TextEntry::make('data.oppervlakte')
                            ->label('Oppervlakte')
                            ->placeholder('-')
                            ->visible(fn (Submission $record) => !empty($record->data['oppervlakte'])),
                        TextEntry::make('data.dienst')
                            ->label('Gewenste dienst')
                            ->visible(fn (Submission $record) => !empty($record->data['dienst'])),
                        TextEntry::make('data.diensten')
                            ->label('Gewenste diensten')
                            ->listWithLineBreaks()
                            ->visible(fn (Submission $record) => !empty($record->data['diensten'])),
                        TextEntry::make('data.budget')
                            ->label('Budget indicatie')
                            ->visible(fn (Submission $record) => !empty($record->data['budget'])),
                        TextEntry::make('data.bericht')
                            ->label('Bericht')
                            ->columnSpanFull()
                            ->visible(fn (Submission $record) => !empty($record->data['bericht'])),
                    ])
                    ->columns(2),

                Section::make('Bestanden')
                    ->schema([
                        TextEntry::make('bestanden')
                            ->label('')
                            ->listWithLineBreaks()
                            ->formatStateUsing(fn (string $state) => basename($state)),
                    ])
                    ->visible(fn (Submission $record) => !empty($record->bestanden)),

                Section::make('UTM Tracking')
                    ->schema([
                        TextEntry::make('data.utm_source')->label('Source')->placeholder('-'),
                        TextEntry::make('data.utm_medium')->label('Medium')->placeholder('-'),
                        TextEntry::make('data.utm_campaign')->label('Campaign')->placeholder('-'),
                        TextEntry::make('data.utm_term')->label('Term')->placeholder('-'),
                        TextEntry::make('data.utm_content')->label('Content')->placeholder('-'),
                    ])
                    ->columns(3)
                    ->visible(fn (Submission $record) => !empty($record->data['utm_source']) || !empty($record->data['utm_medium']) || !empty($record->data['utm_campaign'])),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubmissions::route('/'),
            'view' => Pages\ViewSubmission::route('/{record}'),
        ];
    }
}
