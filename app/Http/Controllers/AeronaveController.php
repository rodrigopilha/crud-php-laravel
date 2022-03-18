<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateAeronave;
use App\Models\Aeronave;
use Illuminate\Http\Request;

class AeronaveController extends Controller
{
    public function index()
    {
        $posts = Aeronave::get();

        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(storeUpdateAeronave $request)
    {
        Aeronave::create($request->all());

        return redirect()->route('index');
    }

    public function show($id)
    {
        if (!$post = Aeronave::find($id)) {
            return redirect()->route('index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {

        if (!$post = Aeronave::find($id))
            return redirect()->route('index');

        $post->delete();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        if (!$post = Aeronave::find($id)) {
            return redirect()->back();
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function update(storeUpdateAeronave $request, $id)
    {
        if (!$post = Aeronave::find($id))
            return redirect()->back();

        $post->update($request->all());

        return redirect()
            ->route('index')
            ->with('message', 'Dados editados com sucesso');
    }
}
