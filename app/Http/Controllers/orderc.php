<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\billing;
use App\pizza;
use DB;
class orderc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizza = pizza::all();
        return ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order=order::all();
        return view('layouts.orderlist')->with('order',$order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
    $this->validate($request, [
        'name' => 'required',
        'address' => 'required',
        'number' => 'required',
        ]);
    $pizza=pizza::all();
      if (count($pizza)>0) {
          $massege = new order();
          
$massege->name = $request->name;
$massege->address = $request->address;
$massege->phone = $request->number;
$total=0;

      }
      

      foreach ($pizza->all() as $user) {
           if (isset($_POST[$user->id]))
           $total += $user->price;

      }
$massege->total = $total;
$massege->save();
    $last_row = DB::table('orders')->orderBy('id', 'DESC')->first();
    foreach ($pizza->all() as $user) {
    if (isset($_POST[$user->id])) {
       $bill =new billing();
       $bill->name=$user->name;
       $bill->price=$user->price;
       $bill->desc=$user->desc;
       $bill->order_id=$last_row->id; 
       $bill->save();    
    }
 }
return redirect('/')->with('success','success order');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=order::find($id);
        return view('layouts.ordershow',compact('order'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
