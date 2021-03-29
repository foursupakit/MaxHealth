<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact.contact-list');
    }

    public function edit(Request $request)
    {
        return view('contact.contact-edit');
    }

    public function detail(Request $request)
    {
        return view('contact.contact-detail');
    }

    public function agentList(Request $request)
    {
        return view('contact.contact-agent-list');
    }
    public function agentDetail(Request $request)
    {
        return view('contact.contact-agent-detail');
    }

    public function agentEdit(Request $request)
    {
        return view('contact.contact-agent-edit');
    }
}
