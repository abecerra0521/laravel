<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = [
            'name' => $request->query('title', 'Laravel')
        ];
        //dd($request->query('title', 'Valor default'));
        //var_dump($request->query('title'));
        //die;
        return view('dashboard', $data);
    }
}
