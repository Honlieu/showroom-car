<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\CarModel;
use App\Models\CarVariant;
use App\Models\Accessory;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts     = Product::count();
        $totalOrders       = Order::count();
        $totalUsers        = User::count();
        $totalAccessories  = Accessory::count();
        $totalCarModels    = CarModel::count();
        $totalCarVariants  = CarVariant::count();
        $totalBlogs        = Blog::count();

        return view('admin.dashboard.index', compact(
            'totalProducts',
            'totalOrders',
            'totalUsers',
            'totalAccessories',
            'totalCarModels',
            'totalCarVariants',
            'totalBlogs'
        ));
    }
}