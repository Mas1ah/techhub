<?php

namespace App\Http\Controllers;


use App\Models\Laptop;
use Illuminate\Http\Request;


class LaptopController extends Controller
{
// Admin list
public function index()
{
$laptops = Laptop::orderBy('created_at', 'desc')->get();
return view('admin.laptops.index', compact('laptops'));
}


// Show create form
public function create()
{
return view('admin.laptops.create');
}


// Store
public function store(Request $request)
{
$request->validate([
'name' => 'required|string|max:255',
'price' => 'required|numeric',
'img' => 'required|url',
]);


Laptop::create($request->only(['name','price','img']));


return redirect()->route('laptops.index')->with('success', 'Laptop added successfully.');
}


// Edit form
public function edit(Laptop $laptop)
{
return view('admin.laptops.edit', compact('laptop'));
}


// Update
public function update(Request $request, Laptop $laptop)
{
$request->validate([
'name' => 'required|string|max:255',
'price' => 'required|numeric',
'img' => 'required|url',
]);


$laptop->update($request->only(['name','price','img']));


return redirect()->route('laptops.index')->with('success', 'Laptop updated successfully.');
}


// Delete
public function destroy(Laptop $laptop)
{
$laptop->delete();
return redirect()->route('laptops.index')->with('success', 'Laptop deleted successfully.');
}


// Frontend listing (your `laptops.blade.php` view expects $products)
public function frontend()
{
$products = Laptop::all();
return view('laptops', compact('products'));
}
}