<?php

namespace App\Providers;

use App\Repositories\Transaction\TransactionRepository;
use App\Repositories\Transaction\TransactionRepositoryImplement;
use App\Repositories\Tree\TreeRepository;
use App\Repositories\Tree\TreeRepositoryImplement;
use App\Repositories\UserCarbonOffset\UserCarbonOffsetRepository;
use App\Repositories\UserCarbonOffset\UserCarbonOffsetRepositoryImplement;
use App\Repositories\UserTree\UserTreeRepository;
use App\Repositories\UserTree\UserTreeRepositoryImplement;
use App\Services\Transaction\TransactionService;
use App\Services\Transaction\TransactionServiceImplement;
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
        // service
        $this->app->bind(TransactionService::class, TransactionServiceImplement::class);

        // repository
        $this->app->bind(TransactionRepository::class, TransactionRepositoryImplement::class);
        $this->app->bind(TreeRepository::class, TreeRepositoryImplement::class);
        $this->app->bind(UserCarbonOffsetRepository::class, UserCarbonOffsetRepositoryImplement::class);
        $this->app->bind(UserTreeRepository::class, UserTreeRepositoryImplement::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
