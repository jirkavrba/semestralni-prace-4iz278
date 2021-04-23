<?php


namespace App\View\Composer;


use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FavoritesViewComposer
{
    protected ?Collection $collections = null;

    protected ?Collection $flashcards = null;

    public function compose(View $view) {
        /** @var User $user */
        $user = Auth::user();

        if ($user === null) {
            return $view;
        }

        $this->collections ??= $user->favoriteCollections->pluck("flashcard_collection_id");
        $this->flashcards ??= $user->favoriteFlashcards->pluck("flashcard_id");

        return $view->with([
            "favoriteCollections" => $this->collections,
            "favoriteFlashcards" => $this->flashcards,
        ]);
    }
}
