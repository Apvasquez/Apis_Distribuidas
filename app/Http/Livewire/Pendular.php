<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Pendular extends Component
{
    public int $longitud = 1 , $angle =1,$grado =0 ;
    
    public function render()
    {
        $respuesta = HTTP::get('https://movpendular.azurewebsites.net/CalcularAltura?longitud='.$this->longitud.'&angle='.$this->angle);
        $res = $respuesta -> json(); 
        $respuestas = HTTP::get('https://movpendular.azurewebsites.net/CalcularFrecuencia?longitud='.$this->longitud);
        $res2 = $respuestas -> json();

        return view('livewire.pendular', compact('res', 'res2'));
    }
}
