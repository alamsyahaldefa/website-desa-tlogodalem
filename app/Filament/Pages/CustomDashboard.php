<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.custom-dashboard';
    protected static null|string $title = 'Dashboard';

    protected static ?string $navigationGroup = null;

    public static function getNavigationLabel(): string
    {
        return 'Dashboard';
    }

    public function getTitle(): string
    {
        return '';
    }

    public static function getSlug(): string
    {
        return '';
    }

}
