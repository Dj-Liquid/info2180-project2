<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Notes;
use App\Models\Users;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function adduser(Request $request)
    {
        return view('main.user');
    }

    public function users(Request $request, Users $users)
    {
        $users = Users::all();
        return view('main.users', compact('users'));
    }

    public function contact(Request $request, Users $users)
    {
        $users = Users::all();
        return view('main.contact', compact('users'));
    }
    public function contactview(Request $request)
    {
        $contact = Contacts::find($request->id);
        $notes = Notes::all()->where('contact_id', $request->id);
        $assigned = Users::find($contact->assigned_to);
        $users = Users::all();
        return view('main.contactview', compact('contact','assigned', 'notes', 'users'));
    }

    public function home(Request $request)
    {
        $contacts = Contacts::all();
        return view('main.home', compact('contacts'));
    }
    public function storecontact(Request $request, Contacts $contacts)
    {


        $contacts = new Contacts();
        $contacts->firstname = $request->firstname;
        $contacts->lastname = $request->lastname;
        $contacts->title = $request->title;
        $contacts->type = $request->type;
        $contacts->email = $request->email;
        $contacts->telephone = $request->telephone;
        $contacts->company = $request->company;
        $contacts->assigned_to = $request->assigned_to;
        $contacts->created_by = Auth::id();
        $contacts->save();

        return Redirect::back()->withSuccess('User created');
    }
    public function storeuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^[^\d\n]*\d[^\d\n]*$/',
            'last_name' => 'required',
            'first_name' => 'required',
        ]);

        $users = new Users();
        $users->firstname = $request->first_name;
        $users->lastname = $request->last_name;
        $users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->role = $request->role;
        $users->save();

        return Redirect::back()->withSuccess('User created');
    }
    public function addnote(Request $request)
    {
        $request->validate([
            'contact_id' => 'required',
            'comment' => 'required',
        ]);

        $note = new Notes();
        $note->contact_id = $request->contact_id;
        $note->comment = $request->comment;
        $note->created_by = Auth::id();
        $note->save();

        return Redirect::back()->withSuccess('User created');
    }
}
