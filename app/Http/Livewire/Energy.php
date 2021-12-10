<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Energy extends Component
{
    public $masa=0 ,$velocidad=0,$altura=0, $grado=0; 
    
    public function render()
    {
        $respuesta= HTTP::get('https://aqueous-brushlands-93108.herokuapp.com/api/EnergiaPotencial/'.$this->masa.'/'.$this->velocidad.'/'.$this->altura);
        $res = $respuesta->json(); 
       
       
        $respuestas= HTTP::get('https://aqueous-brushlands-93108.herokuapp.com/api/EnergiaCinetica/'.$this->masa.'/'.$this->velocidad);
        $res2 = $respuestas->json();
    
        return view('livewire.energy',compact('res', 'res2'));

}

}
