<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }
}
