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

        // Valida los campos del formulario de acuerdo a las reglas establecidas
        $validatedData = $this->validate();
        
        // Se hace la actualizacion del resgitro con los nuevos campos
        $user->update($validatedData['fields']);

        // Se envia un mensaje por la session, al actualizar exitosamente el campo
        session()->flash('success', 'Editada exitosamente');

    }

    
    public function editUser(User $user){

        // Muestra el modal que con tiene el formulario
        $this->showModalEditUser = true;

        // Relleba los campos con la informacion actual del user en la BD
        $this->setFields($user);
    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
