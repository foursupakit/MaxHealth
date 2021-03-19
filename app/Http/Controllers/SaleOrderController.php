<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleOrderController extends Controller
{
    public function index(Request $request)
    {
        return view('sale-order.sale-order-list');
    }

    public function edit(Request $request)
    {
        return view('sale-order.sale-order-edit');
    }

    public function detail(Request $request, $id)
    {
        return view('sale-order.sale-order-detail')
            ->with('id', $id);
    }
}
