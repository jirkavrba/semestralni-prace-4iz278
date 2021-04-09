<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Requests\Flashcards\CreateFlashcardRequest;
use App\Models\FlashcardCollection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FlashcardController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }

    public function create(FlashcardCollection $collection): Response
    {
        $this->authorize("update", $collection);

        return response()->view("flashcards.create", ["collection" => $collection]);
    }

    public function store(FlashcardCollection $collection, CreateFlashcardRequest $request): RedirectResponse
    {
        $this->authorize("update", $collection);

        $flashcard = $collection->flashcards()->create([
            "title" => $request->title,
            "description" => $request->description,
        ]);

        $flashcard->save();

        return redirect()->route("collections.flashcards.show", [$collection, $flashcard]);
    }
}
