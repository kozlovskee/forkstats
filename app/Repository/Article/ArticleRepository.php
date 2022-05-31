<?php

namespace App\Repository\Article;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleRepository
{
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function getAllArticles()
    {
        return $this->article->all();
    }
}
