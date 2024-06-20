<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $searchType = $request->input('type');
        $searchQuery = $request->input('query');

        $contacts = Contact::when($searchType === 'name', fn($q) => $q->where('name', 'like', '%'.$searchQuery.'%'))
            ->when($searchType === 'number', fn($q) => $q->where('number', $searchQuery))
            ->limit(30)
            ->get();
        return view('search', compact('contacts'));
    }
}
