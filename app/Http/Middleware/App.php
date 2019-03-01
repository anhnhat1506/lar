<?php

namespace App\Http\Middleware;

use Closure;

class App
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
        echo "App middleware viet theo before!!!!";
  
        //kiểm tra nếu chưa có session locale en/vn thì set
        if(!session()->has('locale')){
            //getPreferredLanguage tự động lấy ưu tiên ngôn ngữ theo trình duyệt có trong en. vi
            //bí lắm thì lấy en
            $en_or_vn = $request->getPreferredLanguage(); //en
            session()->put('locale', $en_or_vn);
        }

        //đã có ngôn ngữ trong session do người dùng chọn
        //app()->setLocale set ngôn ngữ cho web
        app()->setLocale(session()->get('locale'));
        return $next($request);
    }
}
