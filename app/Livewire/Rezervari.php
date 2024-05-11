<?php

namespace App\Livewire;

use Livewire\Component;

class Rezervari extends Component
{
    public $count = 0;
    public function update()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.rezervari');
    }
}
