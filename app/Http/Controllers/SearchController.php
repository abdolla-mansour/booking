<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'salary_from' => 'nullable|string',
            'salary_to' => 'nullable|string',
            'count_bathroom' => 'nullable|string',
            'count_bedroom' => 'nullable|string',
            'location' => 'nullable|string',
            'property_type' => 'nullable|string',
        ]);

        $props = Property::with('image')->where(function (Builder $query) use ($request) {
            if ($request->salary_from) {
                $query->where('salary', '>', $request->salary_from);
            }
            if ($request->salary_to) {
                $query->where('salary', '<', $request->salary_to);
            }
            if ($request->count_bathroom) {
                $query->where('count_bathrooms', $request->count_bathroom);
            }
            if ($request->count_bedroom) {
                $query->where('count_bedrooms', $request->count_bedroom);
            }
            if ($request->location) {
                $query->where('location', 'LIKE', '%' . $request->location . '%');
            }
            if ($request->property_type) {
                $query->where('property_type', 'LIKE', '%' . $request->property_type . '%');
            }
        })->paginate();

        return view('booking.sales', ['props' => $props]);
    }
    public function search_home(Request $request)
    {
        $request->validate(['search' => 'required|string']);

        $props = Property::where('title', 'LIKE', '%' . $request->search . '%')->paginate();

        return view('booking.sales', ['props' => $props]);
    }
}
