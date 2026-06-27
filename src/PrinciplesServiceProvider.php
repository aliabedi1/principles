<?php

namespace AliAbedi\Principles;

use Spatie\LaravelPackageTools\PackageServiceProvider;

class PrinciplesServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        logger('Principles package loaded');
    }

    public function configurePackage(Package $package): void
    {
        $package->name('principles');
    }
}