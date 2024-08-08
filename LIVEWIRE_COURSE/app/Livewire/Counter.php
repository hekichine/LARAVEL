<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;
    #[Rule('required|min:2|max:50')]
    public $name = "";
    #[Rule('required|email|unique:users')]
    public $email = "";
    #[Rule('required|min:2')]
    public $password = "";
    public function handleSubmit()
    {
        $validate = $this->validate();
        User::create([
           'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => $validate['password']
        ]);
        $this->reset(['name','email','password']);
        request()->session()->flash('success', 'Add user success.');
    }

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.counter',[
            'users' => $users
        ]);
    }
}
