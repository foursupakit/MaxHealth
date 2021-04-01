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

    public function returnProduct(Request $request)
    {
        return view('sale-order.sale-order-return-product-list');
    }

    public function returnProductCreate(Request $request)
    {
        return view('sale-order.sale-order-return-product-create');
    }

    public function returnProductEdit(Request $request)
    {
        return view('sale-order.sale-order-return-product-edit');
    }

    public function returnProductDetail(Request $request, $id)
    {
        return view('sale-order.sale-order-return-product-detail')
            ->with('id', $id);
    }
}
