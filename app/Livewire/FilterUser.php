<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class FilterUser extends Component
{
    public $user;
    public $name;
    public $email;

    public function mount(){
        $this->user = User::all();
    }
    public function render()
    {
        return view('livewire.filter-user');
    }

    public function searching(){
        $user = User::query();

        if(!empty($this->name)){
            $user = $user->where('name','like','%'.$this->name.'%');
        }

        if(!empty($this->email)){
            $user = $user->where('email','like','%'.$this->email.'%');
        }

        $this->user = $user->get();
    }
}
