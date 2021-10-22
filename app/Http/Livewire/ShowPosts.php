<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    // public $name;

    // public function mount($name)
    // {
    //     $this->name = $name;
    // }

    public function render()
    {
        $posts = Post::all();

        return view('livewire.show-posts', compact('posts'));
    }
}
