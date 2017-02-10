<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Category' => 'App\Policies\CategoryPolicy',
        'App\Product' => 'App\Policies\ProductPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Pending' => 'App\Policies\PendingPolicy',
        'App\Research' => 'App\Policies\ResearchPolicy',
        'App\Picture' => 'App\Policies\PicturePolicy',
        'App\Document' => 'App\Policies\DocumentPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
