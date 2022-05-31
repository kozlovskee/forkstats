<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Repository\Article\ArticleRepository;

class HomeController extends Controller
{
    public function __invoke(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->getAllArticles();

        return view('home', compact('articles'));
    }
}
