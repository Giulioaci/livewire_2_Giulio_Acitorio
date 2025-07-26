<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ArticleCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $user_id;
    public $img;

    protected $rules = [
        'title' => 'required',
        'body' => 'required'
        
    ];

    protected $messages = [
        '*.required' => 'il campo : attribute è richiesto',
        
        ];

        public function articleStore()
    {
        $this->user_id = Auth::user()->id;

        if($this->img){
            $this->validate(['img'=>'image']);
        }else{
            $this->validate();
        }

        Article::create([
            'title'=> $this->title,
            'body'=> $this->body,
            'user_id'=> $this->user_id,
            'img' => $this->img ? $this->img->store('images', 'public') : null,
        ]);
        return redirect()->route('homepage')->with('successMessage','Articolo Creato!');
    }
    
    
    public function render()
    {
        return view('livewire.article-create');
    }
}
