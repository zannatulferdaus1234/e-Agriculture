<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class Questions extends Component
{

    public $count = 0;



    public function increment()

    {

        $this->count++;

    }
    public function render()
    {
        return view('livewire.questions',[
            'category' => Category::all(),
        ]);
    }

    public function updatedSelectedCategory($category_id)
    {
        $this->sub_category = SubCategory::where('category_id',$category_id)->get();
    }
}
