<?php

namespace App\Http\Controllers\Catalog\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Http\Requests\catalog\author\StoreRequest;
use App\Http\Requests\catalog\author\UpdateRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::paginate(10);        
        return view('components.catalog.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.catalog.author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Author::firstOrCreate($data);
        return redirect()->route('catalog.author.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        dd($author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('components.catalog.author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Author $author)
    {
        $data = $request->validated();
        $author->update($data);
        return redirect()->route('catalog.author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('catalog.author.index');
    }
}
