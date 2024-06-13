<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class SellerControllers extends Controller
{
    // public function index()
    // {
    //     return view('sellerList.index');
    // }  
    
    public function index()
    {
        $sellers = Seller::all();
        return view('sellerList.index', compact('sellers'));
    }  

    public function showSeller($id)
    {
        $seller = Seller::find($id);
        if (!$seller) {
            return redirect()->route('sellerList.index')->with('error', 'Seller not found.');
        }
            return view('sellerList.detailmitra', compact('seller'));
     }
}
