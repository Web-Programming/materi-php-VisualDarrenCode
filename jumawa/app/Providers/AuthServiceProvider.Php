<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // untuk mengelola product hanya di lakukan oleh admin
        gate::define('manage-products', function ($user) {
            return $user->role === 'admin';
        });

        //untuk update product dapat di lakukan oleh admin dan sales
        gate::define('update-product', function (User $user) {
            return $user->role === 'admin' || $user->role === 'sales';
        });
        // untuk menghapus product hanya di lakukan oleh admin
        gate::define('delete-product', function (User $user) {
            return $user->role === 'admin';
        });
        // untuk membuat product dapat di lakukan oleh user yang sudah login
        gate::define('create-product', function (User $user) {
            return $user !== null;
        });
    }
}