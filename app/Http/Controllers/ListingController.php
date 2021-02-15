<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listings' => Auth::user()->company->listings
        ]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'description' => 'required',
            'apply_link' => 'required|url',
        ]);

        $request['slug'] = Str::slug($request->title);

        Auth::user()->company
            ->listings()
            ->create($request->all());

        return redirect()->route('listings.index');
    }
}
