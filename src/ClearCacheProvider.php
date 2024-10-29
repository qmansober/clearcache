<?php

namespace Clearcache\Qmansober;

use Illuminate\Support\ServiceProvider;

class ClearCacheProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/./routes/web.php');
    }
}