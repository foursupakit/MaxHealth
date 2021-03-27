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

    public function edit(Request $request, $id)
    {
        return view('purchase-order.purchase-order-edit')
            ->with('id', $id);
    }

    public function detail(Request $request, $id)
    {
        return view('purchase-order.purchase-order-detail')
            ->with('id', $id);
    }

    public function returnProduct(Request $request)
    {
        return view('purchase-order.purchase-order-return-product-list');
    }

    public function returnProductCreate(Request $request)
    {
        return view('purchase-order.purchase-order-return-product-create');
    }

    public function returnProductEdit(Request $request)
    {
        return view('purchase-order.purchase-order-return-product-edit');
    }
}
