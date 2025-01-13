<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{

    function index()
    {
        return view('pelanggan.page.home', [
            'title' => 'Home',
        ]);
    }
    function shop()
    {
        return view('pelanggan.page.shop', [
            'title' => 'Shop',
        ]);
    }
    function transaksi()
    {
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
        ]);
    }
    function contact()
    {
        return view('pelanggan.page.contact', [
            'title' => 'Contact us',
        ]);
    }
    function checkout()
    {
        return view('pelanggan.page.checkout', [
            'title' => 'Check Out',
        ]);
    }
}