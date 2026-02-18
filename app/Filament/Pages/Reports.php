<?php

namespace App\Filament\Pages;

use App\Models\Rsvp;
use Filament\Pages\Page;

class Reports extends Page
{
    protected static string $view = 'filament.pages.reports';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'RSVP Management';
    protected static ?string $title = 'Reports';
protected static ?int $navigationSort = 2; // <-- larger number = lower

    // Roles allowed to view reports
    public static function canView(\App\Models\User $user): bool
    {
        return $user->hasAnyRole(['admin', 'viewer']);
    }

    public function getViewData(): array
    {
        return [
            'rsvps' => Rsvp::all(), // You can filter, sort, or export later
        ];
    }
}
