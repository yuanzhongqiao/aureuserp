<?php

namespace Webkul\Purchase\Filament\Clusters\Configurations\Resources\ProductCategoryResource\Pages;

use Webkul\Purchase\Filament\Clusters\Configurations\Resources\ProductCategoryResource;
use Webkul\Product\Filament\Resources\CategoryResource\Pages\ManageProducts as BaseManageProducts;

class ManageProducts extends BaseManageProducts
{
    protected static string $resource = ProductCategoryResource::class;
}
