<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;
use App\Models\Product;
use App\Models\Shopping;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function make_bills()
    {
        
        $bi=Shopping::where('status','pending')->distinct()->get(['user_id']);   
        //echo $bi;exit();
        foreach ($bi as $b) {
            
            $users = DB::table('products')      
            ->leftJoin('shoppings', 'shoppings.product_id', '=', 'products.id')
            ->leftJoin('users', 'shoppings.user_id', '=', 'users.id')
            ->select(DB::raw('SUM(shoppings.price) as total'),
            DB::raw('SUM(shoppings.tax) as total_tax'),            
            DB::raw('SUM(shoppings.total_price) as total_bill')            
            )->where('shoppings.user_id', '=',  $b->user_id)
            ->where('shoppings.status', '=', 'pending')        
            ->get()->toArray();
            
            $bills=New Bill();
            $bills->total_amount=$users[0]->total;
            $bills->total_tax=$users[0]->total_tax;
            $bills->total_bill=$users[0]->total_bill;            
            $bills->post_date_end=carbon::now();
            $bills->save();
            $billsId=$bills->id;
            
                        
            DB::table('shoppings')
            ->where('user_id','=',$b->user_id)
            ->where('shoppings.status','=', 'pending')
            ->update(['bill_id' => $billsId]);

            DB::table('shoppings')->where('user_id', $b->user_id)->update(['status' => 'completed']);

        }
       
        return redirect()->back()->with('success', 'Profile updated.');
    }
    public function details($id)
    {
        $bills_details = DB::table('shoppings')            
        ->leftJoin('products', 'shoppings.product_id', '=', 'products.id')                      
        ->select('products.name as name','shoppings.price as price',
        'shoppings.tax as tax','shoppings.total_price as total')
        ->where('shoppings.bill_id',$id)        
        ->where('shoppings.status','=','completed')
        ->orderBy('shoppings.created_at') 
        ->get();
        
        $bills_name=DB::table('shoppings') 
        ->leftJoin('users', 'shoppings.user_id', '=', 'users.id')                      
        ->leftJoin('bills', 'shoppings.bill_id', '=', 'shoppings.id')                      
        ->select('users.name as name')
        ->where('shoppings.bill_id',$id) 
        ->groupBy('users.name')       
        ->pluck('name')->toArray();
      
       return view('products.show', compact('bills_details','bills_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillRequest  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
