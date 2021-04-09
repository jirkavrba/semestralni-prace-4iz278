<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlashcardQuestion\CreateFlashcardQuestionRequest;
use App\Models\Flashcard;
use App\Models\FlashcardCollection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FlashcardQuestionController extends Controller
{
    public function create(FlashcardCollection $collection, Flashcard $flashcard): Response
    {
        $this->authorize("update", $collection);

        return response()->view("questions.create", [
            "collection" => $collection,
            "flashcard" => $flashcard
        ]);
    }

    public function store(FlashcardCollection $collection, Flashcard $flashcard, CreateFlashcardQuestionRequest $request): RedirectResponse
    {
        $this->authorize("update", $collection);

        $question = $flashcard->questions()->create([
            "question" => $request->input("question"),
            "answer" => $request->input("answer"),
        ]);

        $question->save();

        if ($request->has("another")) {
            return redirect()->route("collections.flashcards.questions.create", [$collection, $flashcard]);
        }

        return redirect()->route("collections.flashcards.show", [$collection, $flashcard]);
    }
}
