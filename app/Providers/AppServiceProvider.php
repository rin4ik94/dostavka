<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \Illuminate\Support\Facades\URL::forceScheme('https');
        Schema::defaultStringLength(191);
        if (!Collection::hasMacro('paginate')) {
            Collection::macro(
                'paginate',
                function ($perPage = 15, $page = null, $options = []) {
                    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                    return (new LengthAwarePaginator(
                        $this->forPage($page, $perPage),
                        $this->count(),
                        $perPage,
                        $page,
                        $options
                    ))
                        ->withPath(Paginator::resolveCurrentPath());
                }
            );
        }
        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
            return preg_match("/^[9]{1}[0-9]{8}$/", $value) && strlen($value) == 9;
        });
    
        Validator::replacer('phone', function($message, $attribute, $rule, $parameters) {
                return str_replace(':attribute',$attribute, ':attribute is invalid phone number');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
