<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

use Illuminate\Http\Response;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return \response()->json([
            'data' => $books,
            'status' => Response::HTTP_OK
        ]);
    }

    public function store(Request $request)
    {

        $inputs = [];
        $inputs['title'] = \request('title');
        $inputs['content'] = \request('content');
        $book = Book::create($inputs);
        return \response()->json([
            'data' => $book,
            'status' => Response::HTTP_OK
        ]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return \response()->json([
            'data' => $book,
            'status' => Response::HTTP_OK
        ]);
    }

    public function update($id, Request $request)
    {

        $inputs = [];
        $inputs['title'] = \request('title');
        $inputs['content'] = \request('content');
        $book = Book::whereId($id)->update($inputs);
        return \response()->json([
            'data' => $book,
            'status' => Response::HTTP_OK
        ]);
    }

    public function delete($id)
    {
        $book = Book::find($id)->delete();
        return \response()->json([
            'data' => 'Data deleted',
            'status' => Response::HTTP_OK
        ]);
    }

}
