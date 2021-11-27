<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AdminForm extends Component
{
    public $fields = [
        'name' => '',
        'email' => '',
        'role_id' => 0,
        'password' => '',
        'password_confirmation' => '',
    ];

    protected $rules = [
        'fields.name' => 'required',
        'fields.email' => 'required|email:filter|unique:users,email',
        'fields.role_id' => 'required',
        'fields.password' => 'required|confirmed|min:10',
    ];

    

    public function create() {

        $validatedData = $this->validate();
        $validatedData['fields']['password'] = Hash::make($validatedData['fields']['password']);
 
        User::create($validatedData['fields']);
        $this->reset('fields');
        
        session()->flash('success', 'Se has creado un nuevo usuario');

    }

    public function render()
    {
        return view('livewire.admin-form');
    }
}
