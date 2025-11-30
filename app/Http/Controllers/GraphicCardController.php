<?php

namespace App\Http\Controllers;

use App\Models\GraphicCard;
use Illuminate\Http\Request;

class GraphicCardController extends Controller
{
    // Frontend list
    public function frontend()
    {
        $products = GraphicCard::all();
        return view('graphic-cards', compact('products'));
    }

    // Admin index
    public function index()
    {
        $cards = GraphicCard::orderBy('created_at','desc')->get();
        return view('admin.graphic-cards.index', compact('cards'));
    }

    public function create()
    {
        return view('admin.graphic-cards.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'img'   => 'required|url',
        ]);

        GraphicCard::create($req->only(['name','price','img']));

        return redirect()->route('graphic-cards.index')->with('success','Graphic card added.');
    }

    public function edit(GraphicCard $graphic_card)
    {
        return view('admin.graphic-cards.edit', compact('graphic_card'));
    }

    public function update(Request $req, GraphicCard $graphic_card)
    {
        $req->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'img'   => 'required|url',
        ]);

        $graphic_card->update($req->only(['name','price','img']));

        return redirect()->route('graphic-cards.index')->with('success','Updated!');
    }

    public function destroy(GraphicCard $graphic_card)
    {
        $graphic_card->delete();
        return redirect()->route('graphic-cards.index')->with('success','Deleted.');
    }
}
