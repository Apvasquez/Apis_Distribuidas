<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Termodinamica extends Component
{
    public $presion =  1, $densidad=1, $masa =1 , $temperatura =1  ,$grado =0 , $message;
    public $volumen1=1,$presion1=1, $temperatura1=1,$presion2=1,$temperatura2=1;


    public function render()
    {
        $respuesta = HTTP::get('https://mysterious-river-04485.herokuapp.com/api/densidad/'.$this->presion.'/'.$this->densidad.'/'.$this->masa.'/'.$this->temperatura);
        $res = $respuesta -> json();
      //  $res2 =dd($res);


        $respuestas= HTTP::get('https://mysterious-river-04485.herokuapp.com/api/volumen/'.$this->volumen1.'/'.$this->presion1.'/'.$this->temperatura1.'/'.$this->presion2.'/'.$this->temperatura2);
        $res2 = $respuestas -> json();


        return view('livewire.termodinamica', compact('res','res2'));
    }
}
