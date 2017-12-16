<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showGame(){
        $name = '勇者鬥惡龍';
        $num = 8;
        $url = '<b>http://</b>google.com.tw';
        $first = "888";
        return view('pages.baha',compact('name','num','url',"first"));;

        //1.return 就結束程式
        return view("pages.baha")->with([
           "first" => "p",
           "last" => "any"
        ]);

        //2.
        $data = [];
        $data["first"] = 'Pp';
        $data{"last"} = "anyy";
        return view("pages.baha", $data);

        //3.
        $first = "888";
        $last = "AAA";
        return view('pages.baha',compact('first','last'));
    }
}
