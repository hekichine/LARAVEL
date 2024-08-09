<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    #[On('user-created')]
    public function updateList($user = null)
    {
//        dd($user);
    }
    public function placeholder()
    {
        return view('placeholder');
    }
    public function render()
    {
        sleep(4);
        return view('livewire.user-list',[
            'users'=>User::latest()->paginate(5)
        ]);
    }
}
