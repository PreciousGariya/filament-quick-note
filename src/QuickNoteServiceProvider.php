<?php

namespace Gokulsingh\QuickNote;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuickNoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('quick-note')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations(['2025_03_15_194632_create_notes_table','2025_03_15_194631_create_notes_category_table']);
    }
   
}
