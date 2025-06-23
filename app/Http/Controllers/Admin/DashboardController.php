<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $totalUsers = User::count();
        $totalAccessories = Product::where('product_type', 'accessory')->count();

        return view('admin.dashboard.index', compact(
            'totalProducts',
            'totalOrders',
            'totalUsers',
            'totalAccessories'
        ));
    }
}