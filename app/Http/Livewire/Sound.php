<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Sound extends Component
{
    public $fre =1 , $lon =1 , $grado =0;
    public function render()
    {
        $respuesta = HTTP::get('https://api-calculos.herokuapp.com/api/sonido?tipo=longitud_onda&medio=oxigeno&frecuencia='.$this->fre);
        $res = array(json_decode($respuesta,true));
        $respuestas = HTTP::get('https://api-calculos.herokuapp.com/api/sonido?tipo=frecuencia&medio=oxigeno&longitud_onda='.$this->lon);
        $res2 = array(json_decode($respuestas,true));
        return view('livewire.sound', compact('res','res2'));
       

        // foreach ($res as $r){
        //     $this->resp  =  $r['x1'];
        // }
    }

}
