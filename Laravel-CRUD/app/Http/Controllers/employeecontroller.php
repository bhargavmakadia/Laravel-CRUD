<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class employeecontroller extends Controller
{
    public function addemployee()
    {
        return view('employee');
    }

    public function addemployeeprocess(Request $request)
    {
       $txt1 = $request->input('txt1');
       $txt2 = $request->input('txt2');
       $txt3 = $request->input('txt3');
       $txt4 = $request->input('txt4');
       $txt5 = $request->input('txt5');
       $txt6 = $request->input('txt6');
       DB::table('employee')->insert(
        ['name'=> $txt1, 'gender'=> $txt2, 'email'=> $txt3, 'password'=> $txt4, 'address'=> $txt5, 'mobile'=> $txt6]
       );
       echo "Employee Added Successfully";
    }
       public function showdata()
       {
        $mydata = DB::table('employee')->get();

        return view('employeetable',compact('mydata'));
       }

       public function deletedata($id)
       {
       $deleted = DB::table('employee')->where('id','=',$id)->delete();
       return redirect('/showemployee');
       }

       public function editdata($id)
       {
         $fetchdata = DB::table('employee')->where('id','=',$id)->first();
         return view('employeeedit',compact('fetchdata'));
       }

       public function updatedata(Request $request)
       {
         $txt0 = $request->input('txt0');
         $txt1 = $request->input('txt1');
         $txt2 = $request->input('txt2');
         $txt3 = $request->input('txt3');
         $txt4 = $request->input('txt4');
         $txt5 = $request->input('txt5');
         $txt6 = $request->input('txt6');
         DB::table('employee')
         ->where('id', $txt0)
         ->update(['name' => $txt1, 'gender' => $txt2, 'email' => $txt3, 'password' => $txt4, 'address' => $txt5, 'mobile' => $txt6]);
         echo "Record Updated";
       }

    }

