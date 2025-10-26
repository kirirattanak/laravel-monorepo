<?php

namespace MyOrg\Core\Common\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    protected $domainProviders = [
        \MyOrg\Core\Company\Providers\CompanyServiceProvider::class,
        \MyOrg\Core\Employee\Providers\EmployeeServiceProvider::class,
        \MyOrg\Core\User\Providers\UserServiceProvider::class,
    ];

    // Class implementation
    public function register() 
    {
        // Registration logic
        foreach ($this->domainProviders as $provider) {
            $this->app->register($provider);
        }
    }
}