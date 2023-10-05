<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use App\Models;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //
    public function index()
    {
        $todolists = Todolist::all();
        return view('todolist.index', ['todolists' => $todolists]); // pass data to frontend
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
