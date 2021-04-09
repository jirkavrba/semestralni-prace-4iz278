<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;

class FlashcardCollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }
}
