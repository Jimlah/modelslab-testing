<?php

namespace App\Providers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @throws \ReflectionException
     */
    public function boot(): void
    {
        Auth::viaRequest('api-key', static function (Request $request) {
            $key = $request->bearerToken();

            return ApiKey::query()->where('key', $key)->first()->user;
        });

    }
}
