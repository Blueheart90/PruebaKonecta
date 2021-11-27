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

        // Validamos el request del formulario
        $validatedData = $this->validate();
        
        // Se obtiene el valor del array validado y se asigna el numero a una variable local
        $numero = $validatedData['numero'];

        // Se accede la posiocion del array para obtener asi el dia de la semana
        $this->resultado = $this->dias[$numero];

        // Cambiamos el valor del trigger que hara que se muestre el resultado
        $this->showResult = true;
    }
    public function render()
    {
        return view('livewire.consulta-form');
    }
}
