<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NouyakuController extends Controller
{
    public function keisan()
    {
    return view('nouyaku.keisan');
    } 
    public function kotae(Request $request)
    {
     // 値の用意
        $nouyaku = $request->kisyaku2 * $request->kisyaku3 * 10;
        $nouyaku2 = $request->kisyaku / $request->kisyaku;

        return view('nouyaku.keisan', compact('nouyaku', 'nouyaku2'));

    }

}
