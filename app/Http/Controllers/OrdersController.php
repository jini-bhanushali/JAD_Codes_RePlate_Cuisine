<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\MyOrderRequest;
use App\Notifications\NewOrderPlaced;
use Carbon\Carbon;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $current_date = Carbon::now();
        $date = $current_date->toDateString();
        // dd($date);
        $donations = Donation::where('status','pending')->whereDate('expiry', '>=', $date)->get();
        // dd($donations);

        return view('orders.order',compact([
            'donations'
        ]));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MyOrderRequest $request)
    {
        // dd($request->all());
        $donation_id = $request->donation_id;
        $order_qty = (int)$request->quantity;
        $donation_qty = Donation::where('id', $donation_id)->get('quantity');
        $qty = $donation_qty[0];
        print($qty);
        $qty = $qty->quantity;
        $diff_qty = $qty-$order_qty;
        echo "Difference:".$diff_qty;
        $order = Order::create([
            'donation_id'=>$request->donation_id,
            'orgname'=>$request->orgname,
            'orgemail'=>$request->orgemail,
            'orgcontact'=>$request->orgemail,
            'user_id'=>auth()->id()
        ]);
        $status = '';
        $status = $diff_qty<=0?'taken':'pending';
        Donation::where('id',$donation_id)->update(['status'=>$status]);
        Donation::where('id',$donation_id)->update(['quantity'=>$diff_qty]);
        
        return redirect(route('order.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($donation_id)
    {
        $donation_details = Donation::where('id', $donation_id)->get();
        $details= $donation_details[0];
        // dd($details);

        return view('orders.show',compact([
            'details'
        ]));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
