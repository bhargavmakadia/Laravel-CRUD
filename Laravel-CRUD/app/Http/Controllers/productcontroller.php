<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function addproduct()
    {
        return view('product');
    }

    public function addproductprocess(Request $request)
    {
       $txt1 = $request->input('txt1');
       $txt2 = $request->input('txt2');
       $txt3 = $request->input('txt3');
       $txt4 = $request->input('txt4');
       $txt5 = $request->input('txt5');
       DB::table('product')->insert(
        ['name'=> $txt1, 'price'=> $txt2, 'image'=> $txt3, 'details'=> $txt4, 'qty'=> $txt5]
       );
       echo "Product Added Successfully";
    }
       public function showdata()
       {
        $mydata = DB::table('product')->get();
        return view('producttable',compact('mydata'));
       }

       public function deletedata($id)
       {
       $deleted = DB::table('product')->where('id','=',$id)->delete();
       return redirect('/showproduct');
       }

       public function editdata($id)
       {
         $fetchdata = DB::table('product')->where('id','=',$id)->first();
         return view('productedit',compact('fetchdata'));
       }

       public function updatedata(Request $request)
       {
         $txt0 = $request->input('txt0');
         $txt1 = $request->input('txt1');
         $txt2 = $request->input('txt2');
         $txt3 = $request->input('txt3');
         $txt4 = $request->input('txt4');
         $txt5 = $request->input('txt5');
         DB::table('product')
         ->where('id', $txt0)
         ->update(['name' => $txt1, 'price' => $txt2, 'image' => $txt3, 'details' => $txt4, 'qty' => $txt5]);
         echo "Record Updated";
       }
    }


