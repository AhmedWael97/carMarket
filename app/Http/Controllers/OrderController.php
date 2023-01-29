<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\car;
use App\Models\orderDetail;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware("permission:Orders View",['only'=>['index']]);
        $this->middleware("permission:Orders Create",['only'=>['create','store']]);
        $this->middleware("permission:Orders Edit",['only'=>['edit','update']]);
        $this->middleware("permission:Orders Delete",['only'=>['destroy']]);
    }

    public function index() {
        return view('backend.order.index')->with('orders', order::get());
    }

    public function create() {
        return view('backend.order.create')->with('cars', car::get());
    }

    public function store(Request $request) {
        $request->validate([
            'client_name' => 'required',
            'client_mobile' => 'required',
        ]);

        if(isset($request->cars) && count($requet->cars) >= 1) {
            $newOrder = new order($request->all());
            $newOrder->save();
            foreach($request->cars as $key=>$car_id) {
                $car = car::find($car_id);
                if($car) {
                    $newOrderDetail = new orderDetail();
                    $newOrderDetail->order_id = $newOrder->id;
                    $newOrderDetail->car_id = $car->id;
                    if( isset($request->qty) && count($request->qty) >= $key+1 ) {
                        $newOrder->newOrderDetail = $request->qty[$key];
                    }
                    $newOrderDetail->price = $car->price;
                    $newOrderDetail->total_line = $car->price * $newOrderDetail->qty;
                    if(isset($request->detail_discount) && count($request->detail_discount) >= $key+1) {
                        if(isset($request->detail_discount_precent) && count($request->detail_discount_precent) >= $key+1) {
                            if($request->detail_discount_precent[$key] == 1) {
                                // perecent
                                $newOrderDetail->discount_percent = 1;
                                $newOrderDetail->discount = $newOrderDetail->price * ($request->detail_discount / 100);
                            } else {
                                // amount
                                $newOrderDetail->discount_percent = 0;
                                $newOrderDetail->discount = $request->detail_discount;

                            }
                        }
                    }

                    $newOrderDetail->total_line = $newOrderDetail->total_line - $newOrderDetail->discount;
                    $newOrderDetail->save();
                }
            }

            return back()->with('success',translate('تم الحفظ بنجاح'));
        } else {
            return back()->with('warning',translate('اختر بعض السيارات'));
        }
    }

    public function edit($id) {
        return view('backend.order.edit')->with([
            'order' => order::findOrFail($id),
            'cars' => car::get(),
        ]);
    }

    public function update(Request $request) {
        abort(404);
    }

    public function destroy($id) {
        $order = order::findOrFail($id);
        return back()->with('success',translate("تم الحذف بنجاح"));
    }

}
