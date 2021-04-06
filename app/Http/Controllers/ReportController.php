<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        return view('report.report-main');
    }

    public function main(Request $request)
    {
        return view('report.report-main');
    }

    public function sell(Request $request)
    {
        return view('report.report-sell');
    }

    public function buy(Request $request)
    {
        return view('report.report-buy');
    }

    public function product(Request $request)
    {
        return view('report.report-product');
    }

    public function contact(Request $request)
    {
        return view('report.report-contact');
    }
}
