<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $bills = DB::table('bills')      
        ->leftJoin('shoppings', 'shoppings.bill_id', '=', 'bills.id')        
        ->leftJoin('users', 'shoppings.user_id', '=', 'users.id')        
        ->select('bills.post_date_end as date',
        'users.name as name',
        'bills.total_amount as amount',
        'bills.total_tax as tax',
        'bills.id as id',
        'shoppings.user_id as user_id',
        'bills.total_bill as total',
        'shoppings.status as status')
        ->where('shoppings.status','completed')
        ->groupBy('bills.id')
        ->get();
        
        return view('home', compact('bills'));
    }
    public function index_customer()
    {
        $products=Product::all();
        return view('customer',compact('products'));
    }
}
