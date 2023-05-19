<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
   
    public function index(): View
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("(created_at)"))
                    ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();

       $product = Product::select(DB::raw("COUNT(*) as count"), DB::raw("(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("(created_at)"))
                    ->pluck('count', 'month_name');   
       $labels1 = $product->keys();
       $data1 = $product->values();
             
        return view('admin.index', compact('labels', 'data','labels1', 'data1'));
    }
}
