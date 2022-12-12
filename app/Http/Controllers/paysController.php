<?php

namespace App\Http\Controllers;
use App\Models\pay;
use Illuminate\Http\Request;

class paysController extends Controller
{
    
    public function index()
    {
        return view('payment');
    }

    
    public function create()
    {
        
    }

    public function store(Request $request)
    {   
        $status=0;
        $date=date('Y-m-d');
        $store_id=0;
        $signature_key=0;
        $tran_id=random_int(1000,9999);
        $success_url=0;
        $fail_url=0;
        $cancel_url=0;
        $pay=new pay;
        $pay->amount =$request->input('amount');
        $pay->currency =$request->input('currency');
        $pay->desc =$request->input('desc');
        $pay->cus_name =$request->input('cus_name');
        $pay->cus_email =$request->input('cus_email');
        $pay->cus_add1 =$request->input('cus_add1');
        $pay->cus_add2 =$request->input('cus_add2');
        $pay->cus_city =$request->input('cus_city');
        $pay->cus_state =$request->input('cus_state');
        $pay->cus_country =$request->input('cus_country');
        $pay->cus_phone =$request->input('cus_phone');
        $pay->store_id =$store_id;
        $pay->tran_id =$tran_id;
        $pay->signature_key =$signature_key;
        $pay->success_url =$success_url;
        $pay->fail_url =$fail_url;
        $pay->cancel_url =$cancel_url;
        $pay->date =$date;
        $pay->status=$request->input('status');

        $pay->save();
       return redirect('raad');
        
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
