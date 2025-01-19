<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer|min:1',
            'name' => 'nullable|string|max:32',
            // 'name_en' => 'nullable|string|max:32',
            // 'name_ru' => 'nullable|string|max:32',
            'slug' => 'nullable|string|max:32',
            'sort_order' => 'nullable|string|max:5',
        ]);
        $f_id = $request->id ?: null;
        $f_name = $request->name ?: null;
        // $f_name_en = $request->name_en ?: null;
        // $f_name_ru = $request->name_ru ?: null;
        $f_slug = $request->slug ?: null;
        $f_sort_order = $request->sort_order ?: null;

        $locations = Location::when($f_id, function ($query, $f_id) {
            return $query->where('id', 'like', '%' . $f_id . '%');
        })
            ->when($f_name, function ($query, $f_name) {
                return $query->where('name', 'like', '%' . $f_name . '%');
            })
            // ->when($f_name_en, function ($query, $f_name_en) {
            //     return $query->where('name_en', 'like', '%' . $f_name_en . '%');
            // })
            // ->when($f_name_ru, function ($query, $f_name_ru) {
            //     return $query->where('name_ru', 'like', '%' . $f_name_ru . '%');
            // })
            ->when($f_slug, function ($query, $f_slug) {
                return $query->where('slug', 'like', '%' . $f_slug . '%');
            })
            ->when($f_sort_order, function ($query, $f_sort_order) {
                return $query->where('sort_order', 'like', '%' . $f_sort_order . '%');
            })
            ->orderBy('id')
            ->orderBy('sort_order')
            ->paginate(20)
            ->withQueryString();

        return view('Admin.locations.index', [
            'f_id' => $f_id,
            'f_name' => $f_name,
            // 'f_name_en' => $f_name_en,
            // 'f_name_ru' => $f_name_ru,
            'f_slug' => $f_slug,
            'f_sort_order' => $f_sort_order,
            'locations' => $locations,
        ]);
    }


}