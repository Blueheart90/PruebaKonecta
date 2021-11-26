<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class EditUser extends Component
{
    protected $listeners = ['editUser' => 'editUser'];

    public $showModalEditUser = false;
    public $id_user;
    public $fields = [
        'name' => '',
        'email' => '',
        'role_id' => 0,
    ];

    protected $rules = [
        'fields.name' => 'required',
        'fields.email' => 'required|email:filter',
        'fields.role_id' => 'required',
    ];

    
    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->id_user = $fields->id;

    }

    public function updateUser(User $user){
        $validatedData = $this->validate();
        $user->update($validatedData['fields']);
        session()->flash('success', 'Editada exitosamente');

    }
    public function editUser(User $user){
        // Log::debug($user);
        $this->showModalEditUser = true;
        $this->setFields($user);
    }
    public function render()
    {
        return view('livewire.edit-user');
    }
}
