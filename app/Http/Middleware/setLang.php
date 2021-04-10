<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Support\Facades\App;

class setLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $set = Setting::find(1);
            $lang = $set->language;
        } catch (\Throwable $th) {
            $lang = 'en';
        }

        if ($request->language) {
            try {
                $set = Setting::find(1);
                $set->update(['language' => $request->language]);
                app()->setLocale($request->language);
                view()->share('lang', $request->language);
            } catch (\Throwable $th) {
                app()->setLocale($lang);
                view()->share('lang', $lang);
            }
        } else {
            app()->setLocale($lang);
            view()->share('lang', $lang);
        }

        return $next($request);
    }
}
