<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_1 extends Controller
{
    public  function get_trangchu(){
    	return view('pages.trangchu');
    }
    public  function get_tintuc(){
    	return view('pages.tintuc');
    }
    public  function get_chitiettintuc(){
    	return view('pages.chitiettin');
    }
    public  function get_gioithieu(){
    	return view('pages.gioithieu');
    }
    public  function get_diendanxaydung(){
    	return view('pages.diendanxaydung');
    }
    public  function get_dangtin(){
    	return view('pages.dangtin');
    }
    public  function get_diendankientruc(){
    	return view('pages.diendankientruc');
    }
    public  function get_diendannoithat(){
    	return view('pages.diendannoithat');
    }
    public  function get_diendanphongthuy(){
    	return view('pages.diendanphongthuy');
    }
}
