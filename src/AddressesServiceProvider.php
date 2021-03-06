<?php

declare(strict_types=1);

namespace Tipoff\Addresses;

use Tipoff\Addresses\Models\Customer;
use Tipoff\Addresses\Models\Timezone;
use Tipoff\Addresses\Policies\CustomerPolicy;
use Tipoff\Addresses\Policies\TimezonePolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class AddressesServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Customer::class => CustomerPolicy::class,
                Timezone::class => TimezonePolicy::class,
            ])
            ->hasNovaResources([
                \Tipoff\Addresses\Nova\Customer::class,
            ])
            ->name('addresses')
            ->hasConfigFile();
    }
}
