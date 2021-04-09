<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\FlashcardCollection;
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
}
