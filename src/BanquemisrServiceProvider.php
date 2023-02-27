<?php

namespace Elsayed85\Banquemisr;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elsayed85\Banquemisr\Commands\BanquemisrCommand;

class BanquemisrServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('banquemisr')
            ->hasConfigFile("BankPayment");
    }
}
