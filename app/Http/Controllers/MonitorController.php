<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index()
    {
        $monitors = Monitor::all();
        return view('admin.monitors.index', compact('monitors'));
    }

    public function create()
    {
        return view('admin.monitors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|integer',
            'img'=>'required|url'
        ]);

        Monitor::create($request->all());
        return redirect()->route('monitors.index')->with('success','Monitor added!');
    }

    public function edit(Monitor $monitor)
    {
        return view('admin.monitors.edit', compact('monitor'));
    }

    public function update(Request $request, Monitor $monitor)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|integer',
            'img'=>'required|url'
        ]);

        $monitor->update($request->all());
        return redirect()->route('monitors.index')->with('success','Monitor updated!');
    }

    public function destroy(Monitor $monitor)
    {
        $monitor->delete();
        return redirect()->route('monitors.index')->with('success','Monitor deleted!');
    }

    public function frontend()
{
$products = Monitor::all();
return view('monitors', compact('products'));
}
}
