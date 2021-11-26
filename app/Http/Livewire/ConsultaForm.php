<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ConsultaForm extends Component
{
    public $numero;
    public $showResult = false;
    public $dias = [
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miercoles',
        4 => 'Jueves',
        5 => 'Viernes',
        6 => 'Sabado',
        7 => 'Domingo',
    ];

    public $resultado = '';

    protected $rules = [
        'numero' => 'required|integer|between:1,7',

    ];

    public function showDay(){

        $validatedData = $this->validate();
        $numero = $validatedData['numero'];
        $this->resultado = $this->dias[$numero];

        $this->showResult = true;
    }
    public function render()
    {
        return view('livewire.consulta-form');
    }
}
