<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Requests\FlashcardCollection\CreateFlashcardCollectionRequest;
use App\Models\FlashcardCollection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FlashcardCollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }

    public function index(): Response
    {
        $owned = $this->user()->collections()->with(["user", "flashcards"])->get();
        $public = FlashcardCollection::public($this->user()->id)->with(["user", "flashcards"])->get();

        return response()->view("collections.index", [
            "owned" => $owned,
            "public" => $public
        ]);
    }

    public function show(FlashcardCollection $collection): Response
    {
        $this->authorize("view", $collection);
    }

    public function create(): Response
    {
        return response()->view("collections.create");
    }

    public function store(CreateFlashcardCollectionRequest $request): RedirectResponse
    {
        $collection = $this->user()->collections()->create([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "is_public" => $request->input("is_public")
        ]);

        $collection->save();

        return redirect()->route("collections.show", $collection->id);
    }
}
