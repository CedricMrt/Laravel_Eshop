<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Categories - Laravel Eshop')]
class Categories extends Component
{
    public function render()
    {
        return view('livewire.categories');
    }
}
