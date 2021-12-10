<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Encript extends Component
{
    public int $base1 =1 , $base0 =1 , $base2 =1 ,$base3 =1 ,$base4 =0 ,$grado =0 , $message;
        public function render()
    {
        $respuesta = HTTP::get('https://mysterious-river-04485.herokuapp.com/api/densidad/'.$this->base0.'/'.$this->base1.'/'.$this->base2.'/'.$this->base3);
        $res = $respuesta->json();
        return view('livewire.encript',compact('res') );
        // foreach ($res as $r){
        //     $this->resp  =  $r['x1'];
        // }
    }
}
