<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NouyakuController extends Controller
{
    public function index()
    {
        return view('nouyaku.index');
    }

    public function keisan()
    {
        $kisyaku = 0;
        $kisyaku2 = 0;
        $kisyaku3 = 0;

        return view('nouyaku.keisan', compact('kisyaku', 'kisyaku2', 'kisyaku3'));
    }
    public function kotae(Request $request)
    {
        // 値の用意
        $nouyaku = $request->kisyaku2 * $request->kisyaku3 * 10;
        $nouyaku2 = $nouyaku / $request->kisyaku;

        $kisyaku = $request->kisyaku;
        $kisyaku2 = $request->kisyaku2;
        $kisyaku3 = $request->kisyaku3;

        return view('nouyaku.keisan', compact('nouyaku', 'nouyaku2', 'kisyaku', 'kisyaku2', 'kisyaku3'));
    }
    public function create()
    {
    return view('nouyaku.create');
    }
}
