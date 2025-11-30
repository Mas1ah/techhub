<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    // FRONTEND
    public function frontend()
    {
        $products = Printer::all();
        return view('printers', compact('products'));
    }

    // ADMIN LIST
    public function index()
    {
        $printers = Printer::orderBy('created_at', 'desc')->get();
        return view('admin.printers.index', compact('printers'));
    }

    // CREATE FORM
    public function create()
    {
        return view('admin.printers.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'img'   => 'required|url',
        ]);

        Printer::create($request->only(['name','price','img']));

        return redirect()->route('printers.index')->with('success','Printer added successfully.');
    }

    // EDIT FORM
    public function edit(Printer $printer)
    {
        return view('admin.printers.edit', compact('printer'));
    }

    // UPDATE
    public function update(Request $request, Printer $printer)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'img'   => 'required|url',
        ]);

        $printer->update($request->only(['name','price','img']));

        return redirect()->route('printers.index')->with('success','Printer updated successfully.');
    }

    // DELETE
    public function destroy(Printer $printer)
    {
        $printer->delete();
        return redirect()->route('printers.index')->with('success','Printer deleted successfully.');
    }
}
