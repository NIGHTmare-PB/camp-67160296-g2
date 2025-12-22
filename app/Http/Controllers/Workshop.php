<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Workshop extends Controller
{
    public function index(){
        return $this->MYfunCTION();
    }
    function myfunction(){
        return view('html101');
    }
    public function store(Request $request){
        $data['myfname']= $request->input('fname');
        $data['mylname']= $request->input('lname');
        $data['mybirth']= $request->input('birth');
        $data['myage']= $request->input('age');
        $data['mysex']= $request->input('gender');
        $data['myaddress']= $request->input('address');
        $data['myphoto'] = $request->file('photo') ? $request->file('photo')->getClientOriginalName() : 'ไม่มีรูปภาพ';
        $data['mycolor']= $request->input('favColor');
        $data['mymusic']= $request->input('music');

        return view('myview.interface', $data);
    }
}
