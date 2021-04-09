<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\FlashcardCollection;
use Illuminate\Http\Response;

class FlashcardCollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }

    public function index(): Response
    {
        $owned = $this->user()->collections;
        $public = FlashcardCollection::public($this->user()->id)->get();

        return response()->view("collections.index", [
            "owned" => $owned,
            "public" => $public
        ]);
    }

    public function create(): Response
    {
        return response()->view("collections.create");
    }
}
