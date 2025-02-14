<?php

namespace Webkul\Account\Filament\Clusters\Configuration\Resources\AccountTagResource\Pages;

use Illuminate\Support\Facades\Auth;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Webkul\Invoice\Filament\Clusters\Configuration\Resources\AccountTagResource;

class ListAccountTags extends ListRecords
{
    protected static string $resource = AccountTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-o-plus-circle')
                ->mutateFormDataUsing(function (array $data): array {
                    $data['creator_id'] = Auth::user()->id;

                    return $data;
                })
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title(__('accounts::filament/clusters/configurations/resources/account-tag/pages/list-account-tag.header-actions.notification.title'))
                        ->body(__('accounts::filament/clusters/configurations/resources/account-tag/pages/list-account-tag.header-actions.notification.body'))
                ),
        ];
    }
}
