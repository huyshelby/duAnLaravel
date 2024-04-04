<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DiscountedTotalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('success')) {
            $discount = session('discount');
            $tongtien = session('tongtien'); // Giả sử bạn đã lưu tổng tiền vào session với khóa 'tongtien'
    
            $discountedTotal = $tongtien - ($tongtien * $discount / 100);
            session()->put('discountedTotal', $discountedTotal);
        }
        return $next($request);
    }
}
