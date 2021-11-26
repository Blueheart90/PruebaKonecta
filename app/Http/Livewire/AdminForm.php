<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

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
        'fields.password' => 'required|confirmed',
    ];

    

    public function create() {
        $validatedData = $this->validate();
        Log::debug($validatedData);
        User::create($validatedData['fields']);
        $this->reset('fields');
        session()->flash('success', 'Se creó un nuevo usuario');

    }

    public function render()
    {
        return view('livewire.admin-form');
    }
}
