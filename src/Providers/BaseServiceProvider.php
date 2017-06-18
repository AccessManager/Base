<?php

namespace AM3\Base\Providers;


use Illuminate\Auth\AuthServiceProvider;
use Illuminate\Auth\Passwords\PasswordResetServiceProvider;
use Illuminate\Broadcasting\BroadcastServiceProvider;
use Illuminate\Bus\BusServiceProvider;
use Illuminate\Cache\CacheServiceProvider;
use Illuminate\Cookie\CookieServiceProvider;
use Illuminate\Database\DatabaseServiceProvider;
use Illuminate\Encryption\EncryptionServiceProvider;
use Illuminate\Filesystem\FilesystemServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Foundation\Providers\ConsoleSupportServiceProvider;
use Illuminate\Foundation\Providers\FoundationServiceProvider;
use Illuminate\Hashing\HashServiceProvider;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Notifications\NotificationServiceProvider;
use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\Pipeline\PipelineServiceProvider;
use Illuminate\Queue\QueueServiceProvider;
use Illuminate\Redis\RedisServiceProvider;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\TranslationServiceProvider;
use Illuminate\Validation\ValidationServiceProvider;
use Illuminate\View\ViewServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    protected $laravelServiceProviders = [
        AuthServiceProvider::class,
        BroadcastServiceProvider::class,
        BusServiceProvider::class,
        CacheServiceProvider::class,
        ConsoleSupportServiceProvider::class,
        CookieServiceProvider::class,
        DatabaseServiceProvider::class,
        EncryptionServiceProvider::class,
        FilesystemServiceProvider::class,
        FoundationServiceProvider::class,
        HashServiceProvider::class,
        MailServiceProvider::class,
        NotificationServiceProvider::class,
        PaginationServiceProvider::class,
        PipelineServiceProvider::class,
        QueueServiceProvider::class,
        RedisServiceProvider::class,
        PasswordResetServiceProvider::class,
        SessionServiceProvider::class,
        TranslationServiceProvider::class,
        ValidationServiceProvider::class,
        ViewServiceProvider::class,
    ];

    protected $applicationServiceProviders = [
        AppServiceProvider::class,
        AuthServiceProvider::class,
        BroadcastServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
    ];

    protected $classAliases = [
        'App' => \Illuminate\Support\Facades\App::class,
        'Artisan' => \Illuminate\Support\Facades\Artisan::class,
        'Auth' => \Illuminate\Support\Facades\Auth::class,
        'Blade' => \Illuminate\Support\Facades\Blade::class,
        'Broadcast' => \Illuminate\Support\Facades\Broadcast::class,
        'Bus' => \Illuminate\Support\Facades\Bus::class,
        'Cache' => \Illuminate\Support\Facades\Cache::class,
        'Config' => \Illuminate\Support\Facades\Config::class,
        'Cookie' => \Illuminate\Support\Facades\Cookie::class,
        'Crypt' => \Illuminate\Support\Facades\Crypt::class,
        'DB' => \Illuminate\Support\Facades\DB::class,
        'Eloquent' => \Illuminate\Database\Eloquent\Model::class,
        'Event' => \Illuminate\Support\Facades\Event::class,
        'File' => \Illuminate\Support\Facades\File::class,
        'Gate' => \Illuminate\Support\Facades\Gate::class,
        'Hash' => \Illuminate\Support\Facades\Hash::class,
        'Lang' => \Illuminate\Support\Facades\Lang::class,
        'Log' => \Illuminate\Support\Facades\Log::class,
        'Mail' => \Illuminate\Support\Facades\Mail::class,
        'Notification' => \Illuminate\Support\Facades\Notification::class,
        'Password' => \Illuminate\Support\Facades\Password::class,
        'Queue' => \Illuminate\Support\Facades\Queue::class,
        'Redirect' => \Illuminate\Support\Facades\Redirect::class,
        'Redis' => \Illuminate\Support\Facades\Redis::class,
        'Request' => \Illuminate\Support\Facades\Request::class,
        'Response' => \Illuminate\Support\Facades\Response::class,
        'Route' => \Illuminate\Support\Facades\Route::class,
        'Schema' => \Illuminate\Support\Facades\Schema::class,
        'Session' => \Illuminate\Support\Facades\Session::class,
        'Storage' => \Illuminate\Support\Facades\Storage::class,
        'URL' => \Illuminate\Support\Facades\URL::class,
        'Validator' => \Illuminate\Support\Facades\Validator::class,
        'View' => \Illuminate\Support\Facades\View::class,
    ];

    public function boot()
    {
        /*
         * Register Laravel Framework Service Providers...
         */
        foreach ($this->laravelServiceProviders as $serviceProvider )
        {
            $this->app->register( $serviceProvider );
        }

        /*
         * Register Application Service Providers...
         */
        foreach ($this->applicationServiceProviders as $serviceProvider )
        {
            $this->app->register( $serviceProvider );
        }

        /*
         * Register Alises for Facade classes.
         */

        $loader = AliasLoader::getInstance();
        foreach ($this->classAliases as $alias => $class )
        {
            $loader->alias( $alias, $class );
        }

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/../Views', 'Base');
    }

}