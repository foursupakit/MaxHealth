<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index(Request $request)
    {
        return view('purchase-order.purchase-order-list');
    }

    public function create(Request $request)
    {
        return view('purchase-order.purchase-order-create');
    }

    public function edit(Request $request)
    {
        return view('purchase-order.purchase-order-edit');
    }

    public function detail(Request $request, $id)
    {
        return view('purchase-order.purchase-order-detail')
            ->with('id', $id);
    }
}
