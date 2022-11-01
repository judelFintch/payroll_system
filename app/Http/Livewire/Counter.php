<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter=0;
    
    public function increment(){
        $this->counter=max(10,$this->counter+=1);

    }

    public function decrement(){
        $this->counter=min(1,$this->counter-=1);

    }
    public function render()
    {
        return view('livewire.counter');
    }
}