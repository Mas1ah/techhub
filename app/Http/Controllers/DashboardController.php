<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'links' => [
                'laptops'  => url('admin/laptops'),
                'gpus'     => url('admin/graphic-cards'),
                'monitors' => url('admin/monitors'),
                'printers' => url('admin/printers'),
            ]
        ]);
    }
}
