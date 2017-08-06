<?php
return [
    /*
     * Laravel Service Providers.
     */
    \Illuminate\Auth\AuthServiceProvider::class,
    \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
    \Illuminate\Broadcasting\BroadcastServiceProvider::class,
    \Illuminate\Bus\BusServiceProvider::class,
    \Illuminate\Cache\CacheServiceProvider::class,
    \Illuminate\Cookie\CookieServiceProvider::class,
    \Illuminate\Database\DatabaseServiceProvider::class,
    \Illuminate\Encryption\EncryptionServiceProvider::class,
    \Illuminate\Filesystem\FilesystemServiceProvider::class,
    \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
    \Illuminate\Hashing\HashServiceProvider::class,
    \Illuminate\Mail\MailServiceProvider::class,
    \Illuminate\Notifications\NotificationServiceProvider::class,
    \Illuminate\Pagination\PaginationServiceProvider::class,
    \Illuminate\Pipeline\PipelineServiceProvider::class,
    \Illuminate\Queue\QueueServiceProvider::class,
    \Illuminate\Redis\RedisServiceProvider::class,
    \Illuminate\Session\SessionServiceProvider::class,
    \Illuminate\Support\ServiceProvider::class,
    \Illuminate\Translation\TranslationServiceProvider::class,
    \Illuminate\Validation\ValidationServiceProvider::class,
    \Illuminate\View\ViewServiceProvider::class,


    /*
     * Third party package Service Providers.
     */
    \Collective\Html\HtmlServiceProvider::class,


    /*
     * Access Manager Modules Service Providers.
     */
    \AccessManager\Accounts\Providers\AccountsServiceProvider::class,
    \AccessManager\Services\Providers\ServicesServiceProvider::class,
    \AccessManager\Setup\Providers\SetupServiceProvider::class,
    \AccessManager\Auth\Providers\AuthServiceProvider::class,
    \AccessManager\Base\Providers\AppServiceProvider::class,
    \AccessManager\AccountDetails\Providers\AccountDetailsServiceProvider::class,
    \AccessManager\Routers\Providers\RoutersServiceProvider::class,
    \AccessManager\Zones\Providers\ZoneServiceProvider::class,
    \AccessManager\Prepaid\Providers\PrepaidServiceProvider::class,
];