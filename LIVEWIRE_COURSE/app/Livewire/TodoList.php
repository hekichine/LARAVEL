<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $name;
    public $search ;

    public $EditTodoID;
    #[Rule('required|min:3|max:50')]
    public $EditTodoName;
    public function create()
    {
        // validate
        // create the todo
        // clear input
        // send flash message

        $validate = $this ->validateOnly('name');

        Todo::create($validate);
        $this -> reset('name');

        session()-> flash('success','Saved.','Created.');
    }
    public function delete($todoID)
    {
        Todo::find($todoID)->delete();
    }
    public function completed($todoID)
    {
        $todo = Todo::find($todoID);
        $todo -> completed = !$todo->completed;
        $todo->save();
    }
    public function edit($todoID)
    {
        $this->EditTodoID = $todoID;
        $this->EditTodoName = Todo::find($todoID)->name;
    }
    public function update()
    {
        $this->validateOnly('EditTodoName');
        Todo::find($this->EditTodoID)->update([
            'name'=>$this->EditTodoName
        ]);
        $this->cancelEdit();
    }
    public function cancelEdit()
    {
        $this->reset('EditTodoID','EditTodoName');
    }
    public function render()
    {

        return view('livewire.todo-list',[
            'todos' => Todo::latest()->where('name','like',"%{$this->search}%")-> paginate(5)
        ]);
    }
}
