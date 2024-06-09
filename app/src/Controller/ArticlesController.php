<?php

declare(strict_types=1);

namespace App\Controller;

class ArticlesController extends AppController
{
    /**
     * 一覧
     *
     * @return void
     */
    public function index()
    {
        $articles = $this->paginate($this->Articles);
        $this->set(compact('articles'));
    }

    /**
     * 詳細
     *
     * @param string|null $slug
     * @return void
     */
    public function view(?string $slug = null)
    {
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->set(compact('article'));
    }
}