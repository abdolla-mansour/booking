<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $latestUsers = User::with('image')->where('email', '!=', 'super_admin@app.com')->latest()->take(8)->get();
        $count = User::all()->count();
        $latestProperties = Property::with('image')->latest()->take(8)->get();

        // dd(Carbon::now()->format('d F'),
        // $latestUsers->first()->created_at);

        return view('index2', ['count' => $count, 'latestUsers' => $latestUsers, 'latestProperties' => $latestProperties]);
    }
}
