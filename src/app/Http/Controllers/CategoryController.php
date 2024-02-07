<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request){

        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('admin', compact('contacts', 'category'));
    }

    public function contact()
    {
        return $this->hasManyTo(Contact::class);
    }
}
