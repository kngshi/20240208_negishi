<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['category_id','first_name', 'last_name',  'gender', 'email', 'tel', 'address', 'building', 'detail']);
        
        return view('confirm', ['contact' => $contact]);

    }

    public function store(ContactRequest $request)
   {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);
        return view('thanks');
   }

    public function targetPage()
    {
        return view('index'); // 適切なビュー名に変更
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function view(){

        $selectedColumns = ['first_name','last_name','gender','category_id'];
        $name = Contact::select($selectedColumns)->get();
        return view('admin', ['']);
    }

    public function admin(ContactRequest $request)
    {
        $selectedColumns = ['first_name','last_name','gender','category_id'];
        $admins = Contact::pluck($selectedColumns);

        return view('admin', compact('admins'));

    }

     public function adminPage()
    {
     return view('admin');
    }

}
