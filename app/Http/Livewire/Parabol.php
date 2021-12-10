<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Parabol extends Component
{
    public $velinicial=1,  $aceleracion = 1 , $tiempo =1, $grado =0;
    public  $tiempo_caidalibre=1, $velocidad_inicial=1 , $posicion_inicial=1;
    
    public function render()
    {
        $respuesta = HTTP::get('https://api-grupo6.herokuapp.com/movimiento_parabolico?velinicial='.$this->velinicial.'&aceleracion='.$this->aceleracion.'&tiempo='.$this->tiempo);
        $res = $respuesta -> json();    
    
        $respuestas = HTTP::get('https://api-grupo6.herokuapp.com/caida_libre?posicion_inicial='.$this->posicion_inicial.'&velocidad_inicial='.$this->velocidad_inicial.'&tiempo_caidalibre='.$this->tiempo_caidalibre);
        $res2 = $respuestas -> json();

        return view('livewire.pendular', compact('res', 'res2'));
    }
}
