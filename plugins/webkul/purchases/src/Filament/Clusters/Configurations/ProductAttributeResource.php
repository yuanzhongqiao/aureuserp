<?php

namespace Webkul\Purchase\Filament\Clusters\Configurations\Resources;

use Webkul\Purchase\Filament\Clusters\Configurations;
use Webkul\Purchase\Filament\Clusters\Configurations\Resources\ProductAttributeResource\Pages;
use Webkul\Purchase\Settings\ProductSettings;
use Webkul\Product\Filament\Resources\AttributeResource;
use Webkul\Product\Models\Attribute;

class ProductAttributeResource extends AttributeResource
{
    protected static ?string $model = Attribute::class;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    protected static bool $shouldRegisterNavigation = true;

    protected static ?int $navigationSort = 9;

    protected static ?string $cluster = Configurations::class;

    protected static ?string $recordTitleAttribute = 'name';

    public static function isDiscovered(): bool
    {
        if (app()->runningInConsole()) {
            return true;
        }

        return app(ProductSettings::class)->enable_variants;
    }

    public static function getNavigationGroup(): string
    {
        return __('purchases::filament/clusters/configurations/resources/product-attribute.navigation.group');
    }

    public static function getNavigationLabel(): string
    {
        return __('purchases::filament/clusters/configurations/resources/product-attribute.navigation.title');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProductAttributes::route('/'),
            'create' => Pages\CreateProductAttribute::route('/create'),
            'view'   => Pages\ViewProductAttribute::route('/{record}'),
            'edit'   => Pages\EditProductAttribute::route('/{record}/edit'),
        ];
    }
}
