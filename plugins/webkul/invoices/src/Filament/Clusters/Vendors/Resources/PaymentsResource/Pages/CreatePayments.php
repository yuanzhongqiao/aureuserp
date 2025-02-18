<?php

namespace Webkul\Invoice\Filament\Clusters\Vendors\Resources\PaymentsResource\Pages;

use Webkul\Invoice\Filament\Clusters\Vendors\Resources\PaymentsResource;
use Webkul\Account\Filament\Clusters\Customer\Resources\PaymentsResource\Pages\CreatePayments as BaseCreatePayments;

class CreatePayments extends BaseCreatePayments
{
    protected static string $resource = PaymentsResource::class;
}
