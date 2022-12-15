<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function addcategory()
    {
        return view('category');
    }

    public function addcategoryprocess(Request $request)
    {
       $txt1 = $request->input('txt1');
       DB::table('category')->insert(
        ['name'=> $txt1]
       );
       echo "Category Added Successfully";
    }
       public function showdata()
       {
        $mydata = DB::table('category')->get();
        return view('categorytable',compact('mydata'));
       }

       public function deletedata($id)
       {
       $deleted = DB::table('category')->where('id','=',$id)->delete();
       return redirect('/showcategory');
       }

       public function editdata($id)
       {
         $fetchdata = DB::table('category')->where('id','=',$id)->first();
         return view('categoryedit',compact('fetchdata'));
       }

       public function updatedata(Request $request)
       {
         $txt0 = $request->input('txt0');
         $txt1 = $request->input('txt1');
         DB::table('category')
         ->where('id', $txt0)
         ->update(['name' => $txt1]);
         echo "Record Updated";
       }
    }

