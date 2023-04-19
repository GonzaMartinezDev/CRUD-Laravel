<?php

namespace App\View\Components\web\blog\post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class show extends Component
{
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    public function changeTitle() {
        $this->post->title = "Title from class";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.web.blog.post.show');
    }
}
