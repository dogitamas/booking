<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    public function index() {
        return view('properties', ['success' => false, 'properties' => Properties::all()]);
    }
    public function create() {
        return view('properties.create', ['success' => false]);
    }
    public function store(Request $request) {
        $id = $request->input('id');

        $title = $request->input('title');
        $location = $request->input('location');
        $price_per_night = $request->input('price_per_night');
        $discount = $request->input('discount');
        $description = $request->input('description');

        DB::table('properties')
            ->insert([
                'title' => $title,
                'location' => $location,
                'discount' => 0,
                'price_per_night' => $price_per_night,
                'description' => $description
            ]);

        return view('properties', ['success' => true, 'properties' => Properties::all()]);
    }
    public function show($number) {
        $user = Auth::user();
        return view('properties.edit', ['user' => $user, 'success' => false, 'proper' => Properties::findOrFail($number)]);
    }
    public function edit($number) {
        $user = Auth::user();
        return view('properties.edit', ['user' => $user, 'success' => false, 'proper' => Properties::findOrFail($number) ]);
    }
    public function update(Request $request)
    {
        $id = $request->input('id');

        $title = $request->input('title');
        $location = $request->input('location');
        $price_per_night = $request->input('price_per_night');
        $discount = $request->input('discount');
        $description = $request->input('description');

        DB::table('properties')
            ->where('id', '=', $id)
            ->update([
                'title' => $title,
                'location' => $location,
                'price_per_night' => $price_per_night,
                'description' => $description
            ]);

        return view('properties', ['success' => true, 'properties' => Properties::all()]);
    }
    public function destroy($id) {
        $propi=Properties::find($id);
        $propi->delete();
        return view('properties', ['success' => true, 'properties' => Properties::all()]);
    }
}
