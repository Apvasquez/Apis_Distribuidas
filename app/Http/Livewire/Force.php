<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Force extends Component
{
    public int $masa=1,$aceleracion=1, $distancia=1,$tiempo=1 ,$grado =0;


    public function render()
    {
        $respuesta = HTTP::get('http://52.15.59.104/api/potencia?m='.$this->masa.'&a='.$this->aceleracion.'&d='.$this->distancia.'&t='.$this->tiempo);
        $res = $respuesta -> json();
      //  $res2 =dd($res);


        $respuestas= HTTP::get('http://52.15.59.104/api/fuerza?m='.$this->masa.'&a='.$this->aceleracion);
        $res2 = $respuestas -> json();


        return view('livewire.force', compact('res','res2'));

        // foreach ($res as $r){
        //     $this->resp  =  $r['x1'];
        // }
    }

}
