<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // create @admin, @endadmin directives
        Blade::directive('admin', function() {
            return "<?php if(auth()->guard()->check() && auth()->user()->is_admin == 1): ?>";
        });
        Blade::directive('endadmin', function() {
            return "<?php endif; ?>";
        });
    }
}
