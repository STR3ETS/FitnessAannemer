<?php

namespace App\Filament\Resources\SubmissionResource\Pages;

use App\Filament\Resources\SubmissionResource;
use App\Models\Submission;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSubmission extends ViewRecord
{
    protected static string $resource = SubmissionResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $record = $this->getRecord();
        if (!$record->isRead()) {
            $record->update(['read_at' => now()]);
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('toggleRead')
                ->label(fn () => $this->getRecord()->isRead() ? 'Markeer als ongelezen' : 'Markeer als gelezen')
                ->icon(fn () => $this->getRecord()->isRead() ? 'heroicon-o-envelope' : 'heroicon-o-envelope-open')
                ->action(function () {
                    $record = $this->getRecord();
                    $record->update([
                        'read_at' => $record->isRead() ? null : now(),
                    ]);
                    $this->refreshFormData(['read_at']);
                })
                ->color('gray'),
            DeleteAction::make(),
        ];
    }
}
