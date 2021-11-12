<?php

namespace App\Http\Controllers;


use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Author;
use Illuminate\Http\Response;


use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Resources\Json\AnonymousResourceCollection;
     */
    public function index()
    {
        return response()->json(new AuthorCollection(Author::all()),Response::HTTP_OK);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return AuthorResource
     */
    public function store(Request $request)
    {
        $author=Author::create($request->only([
            "name"
        ]));

        return new AuthorResource($author);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return AuthorResource
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
