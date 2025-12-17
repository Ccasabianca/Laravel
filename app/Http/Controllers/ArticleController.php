<?php

namespace App\Http\Controllers;

use App\Models\Article;


class ArticleController extends Controller
{
    public function show(int $id)
    {
        $article = Article::find($id);

        if (!$article) {
            abort(404);
        }
        return view('pages/article-details', ["article" => $article]);
    }

    public function create()
    {
        Article::create([
            "title" => "L'IA soigne mieux",
            "description" => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."
        ]);

        Article::create([
            "title" => "Villes vertes",
            "description" => "Les métropoles deviennent plus écologiques et durables."
        ]);
        Article::create([
            "title" => "Télétravail",
            "description" => "Plus de liberté, mais aussi plus de solitude."
        ]);

        return redirect()->route('home');
    }

    public function update($id)
    {
        $article = Article::find($id);

        if ($article) {
            $article->update([
                "title" => "Titre modifié",
                "description" => "Description modifiée"
            ]);
        }

        return redirect()->route('home');
    }

    public function delete($id)
    {

        $article = Article::find($id);

        if (!$article) {
            abort(404);
        }
        $article->delete();
        return redirect()->route('home');
    }
}
