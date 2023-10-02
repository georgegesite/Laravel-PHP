<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //
    public function index()
    {
        return view('todolist.index');
    }

    public function create()
    {
        return view('todolist.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $newTodo = Todolist::create($data); //save using model -> send to dababase

        return redirect(route('todolist.index'));
    }
}
