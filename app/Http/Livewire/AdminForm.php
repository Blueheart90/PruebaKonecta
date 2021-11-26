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
        'role_id' => '',
        'password' => '',
    ];

    protected $rules = [
        'fields.name' => 'required',
        'fields.email' => 'required|email:filter|unique:estudiantes,email',
        'fields.grade' => 'required',
    ];

    

    public function create() {
        $validatedData = $this->validate();
        Log::debug($validatedData);
        User::create($validatedData['fields']);
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.admin-form');
    }
}
