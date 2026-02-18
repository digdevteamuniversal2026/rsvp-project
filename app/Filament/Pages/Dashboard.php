<?php

namespace App\Filament\Pages;

use App\Models\Rsvp;
use Filament\Pages\Page;
use Filament\Widgets\StatsOverviewWidget;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';
    protected static ?string $navigationGroup = 'RSVP Management';
    protected static ?string $title = 'Dashboard';

    // Roles allowed to view the dashboard
    public static function canView(\App\Models\User $user): bool
    {
        return $user->hasAnyRole(['admin', 'editor', 'viewer']);
    }

    public function getViewData(): array
    {
        return [
            'totalRsvps' => Rsvp::count(),
            'confirmedRsvps' => Rsvp::where('status', 'confirmed')->count(),
            'pendingRsvps' => Rsvp::where('status', 'pending')->count(),
        ];
    }
}
