<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $book = Book::list();
        return ['success' => true, 'data'=>$book];

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Book::store($request);
        return ["success" => true, "Message" =>"Book created successfully"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book = Book::find($id);
        return ['success' => true, 'data'=>$book];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book = Book::find($id);
        $book->store($request->all());
        return ['success' => true, 'data'=>true,'message' =>'updated successfully'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book = Book::find($id);
        $book->delete();
        return ['success' => true, 'data'=>true,'message' =>'deleted successfully'];
    }
}
