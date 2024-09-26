<?php

namespace App\Http\Controllers;



use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {

        $items = Item::all();

        // dd($items);
        return view('home', ['items' => $items]);
    }

    public function newpost(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/images/', $file, $imageName);
            $imagePath = 'images/' .$imageName;


            $item = new Item();
            $item->item_name = $request->item_name;
            $item->location = $request->location;
            $item->image = $imagePath;
            $item->save();
            return redirect()->route('home')->with('success', 'Item berhasil ditambahkan.');
        } else {
            return back()->with('error', 'Tidak ada file yang di-upload.');
        }
    }

}
