<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TodolistController extends Controller
{

    public function index()
    {
        $todolists = Todolist::all();
        //return view('todomain', compact('todolists'));
        return view('home', compact('todolists'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validate string texted by user
        $data = $request->validate([
            'content' => 'required'
        ]);
        // add default data in array
        $datalist = [
        "user_id" => Auth::id(),
        "content" => $data['content'],
        "status" => "TEST",
        "deleted" => "TEST",
        ];
        // create records to db
        Todolist::create($datalist);
        return back();
    }

    public function show(Todolist $todolist)
    {
        //
    }

    public function edit(Todolist $todolist)
    {
        //
    }

    public function update(Request $request, Todolist $todolist)
    {
        //
    }

    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back(); 
    }
}
