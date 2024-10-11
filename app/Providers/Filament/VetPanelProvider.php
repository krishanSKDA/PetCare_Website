<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;


class VetPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('vet')
            ->path('vet')
            ->login()
            ->profile()
            
            ->userMenuItems([
                MenuItem::make()
                ->label('Admin')
                ->icon('heroicon-o-cog-6-tooth') 
                ->url('/admin')
                ->visible(fn(): bool=>auth() ->user()->is_admin),
                MenuItem::make()
                    ->label('Global Chat')
                    ->icon('heroicon-s-chat-bubble-left-right')
                    ->url('/chatify')
            ])
            ->colors([
                'primary' => '#006600',
            ])
            // ->colors([
            //     'primary' => '#4CAF50', 
            //     'secondary' => '#03A9F4', 
            //     'accent' => '#FF9800', 
            //     'background' => '#F5F5F5', 
            //     'text' => '#333333',
            // ])
            ->favicon(asset('assets/img/favicon.ico'))
            ->discoverResources(in: app_path('Filament/Vet/Resources'), for: 'App\\Filament\\Vet\\Resources')
            ->discoverPages(in: app_path('Filament/Vet/Pages'), for: 'App\\Filament\\Vet\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Vet/Widgets'), for: 'App\\Filament\\Vet\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
             
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
           
    }
}
