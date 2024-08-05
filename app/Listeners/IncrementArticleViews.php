<?php

namespace App\Listeners;

use App\Events\ArticleViewed;
use App\Models\Article;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncrementArticleViews
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(ArticleViewed $event)
    {
        $event->article->increment('views');
    }
}
