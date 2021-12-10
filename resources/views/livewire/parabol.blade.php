 
 <div class="py-0 mb-6 -mt-350"> 
    <div class="mx-auto mt-24 max-w-7xl sm:px-6 lg:px-8">
        <h1 class="pb-2 text-6xl font-mono tracking-wide font-bold text-center text-green-100 dark:text-green-200 uppercase"> Movimiento parabolico/h1>
        <div grid grid-cols-1>
            <div class="container mx-auto text-center text-white" x-data="{open : false , val : 1 ,act : false,act2 :false,act3:false,act4:false}">
                <button wire:click="$set('grado', '1')" x-on:click="open = !open , act = !act , act3 = !act3 , act4 = !act4 " x-show="!act2"
                    class=" bg-trasnparent w-5/6  border-2px-2 py-4 mx-auto text-2xl tracking-wider font-bold text-center uppercase rounded  dark:text-white h-28 "

                   >

                    Calculo de movimiento parabolico
                </button>
                <button wire:click="$set('grado', '2')" x-on:click="open = !open , val = 2 , act2 =!act2 , act3 = !act3,act4 = !act4 " x-show="!act"
                    class="w-5/6 bg-transparent  border-2 px-2 py-4 mx-auto text-2xl font-bold text-center uppercase  rounded  dark:text-white h-28 "
                    >
                    Calculo de la caida libre
                  
                </button>
                 
                 
                <div>
                    {{--  {{ $message .'fin' }}
                    <button wire:click="$set('message', 'Hello')">+</button>  --}}
                </div>
                @if ($grado == 1)
                <div class="h-auto mx-2 my-2 text-center bg-transparent  dark:text-black border rounded shadow-md" x-show="open"  x-on:click.away="open = false">
                        <input type="number"  class=" bg-transparent  p-2 m-2 text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="velinicial">
                        <input type="number" class=" bg-transparent  p-2 m-2 text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="aceleracion">
                            <input type="number" class=" bg-transparent  p-2 m-2 text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="tiempo">
                        <div class="text-xl font-bold">
                            <input class=" bg-transparent block w-48 h-16 m-2 mx-auto text-blue-100 rounded h-28-md" disabled type="text" name=""
                                id="" value="{{ $res}}">

                        </div>

                    </div>

                @endif
                @if ($grado == 2)
                <div class="h-auto mx-2 my-2 text-center bg-transparent  dark:text-black border rounded shadow-md" x-show="open"    x-on:click.away="open = false">
                        <input type="number"  class=" bg-transparent  p-2 m-2 text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="posicion_inicial">
                            <input type="number"  class=" bg-transparent  p-2 m-2 text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="velocidad_inicial">
                            <input type="number"  class=" bg-transparent  p-2 m-2 text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="tiempo_caidalibre">
                        
                        <div class="text-xl font-bold">
                            <input class=" bg-transparent block w-48 h-16 m-2 mx-auto text-blue-100 rounded h-28-md" disabled type="text" name=""
                                id="" value="{{ $res}}">

                        </div>
                    </div>
                @endif

                </template>
            </div>