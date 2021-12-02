<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use App\Models\Shopping;
use App\Http\Requests\StoreShoppingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateShoppingRequest;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreShoppingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        $id=$request->input('product_id');
        $price_prod = Product::where('id',$id)->value('price');
        $tax_product = Product::where('id',$id)->value('tax');        
        $shoppings = New Shopping();
        $shoppings->product_id=$request->input('product_id');
        $shoppings->user_id=Auth::user()->id;
        $shoppings->price=$price_prod;
        $shoppings->tax=$tax_product;
        $calc_tax=($price_prod*$tax_product)/100;
        $shoppings->total_price=$price_prod+$calc_tax;
        $shoppings->post_date=carbon::now();
        $shoppings->save();
        return redirect()->back()->with('success', 'Thanks for your purchase!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function show(Shopping $shopping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopping $shopping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShoppingRequest  $request
     * @param  \App\Models\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShoppingRequest $request, Shopping $shopping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopping $shopping)
    {
        //
    }
}
