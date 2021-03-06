


 <div class="py-0 mb-6 -mt-16">
    <br><br><br><br>
    <div class="mx-auto mt-24 max-w-7xl sm:px-6 lg:px-8">
        <h1 class="pb-2 text-6xl font-mono tracking-wide font-bold text-center text-green-100 dark:text-green-200 uppercase"> Movimiento pendular simple</h1>
        <div grid grid-cols-1>
            <div class="container mx-auto text-center text-white" x-data="{open : false , val : 1 ,act : false,act2 :false,act3:false,act4:false}">
                <button wire:click="$set('grado', '1')" x-on:click="open = !open , act = !act , act3 = !act3 , act4 = !act4 " x-show="!act2"
                    class=" bg-transparent border-2 w-5/6 px-2 py-4 mx-auto text-2xl tracking-wider font-bold text-center uppercase rounded  dark:text-white h-28 "

                   >

                   Calculo de densidad
                </button>
                <button wire:click="$set('grado', '2')" x-on:click="open = !open , val = 2 , act2 =!act2 , act3 = !act3,act4 = !act4 " x-show="!act"
                    class="w-5/6 bg-transparent border-2 px-2 py-4 mx-auto text-2xl font-bold text-center uppercase  rounded  dark:text-white h-28 "
                    >
                    Volumen

                </button>


                <div>
                    {{--  {{ $message .'fin' }}
                    <button wire:click="$set('message', 'Hello')">+</button>  --}}
                </div>
                @if ($grado == 1)
                    <div class="h-auto mx-2 my-2 text-center text-black border rounded shadow-md" x-show="open"
                        x-on:click.away="open = false">
                        <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="presion">
                        <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="densidad">
                            <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="masa">
                        <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="temperatura">
                        <p>{{ $grado }}</p>
                        <h1 class="text-white font-mono font-semibold uppercase text-2xl">Respuesta</h1>
                        {{--  {{$res}}  --}}
                        @foreach ($res as $r)
                            <div class="text-xl font-bold">
                                <input class="block bg-transparent w-48 h-16 m-2 mx-auto rounded h-28-md" disabled type="text" name=""
                                    id="" value="{{ $r['resultado']}}">
                           <h1 class="text-white ">

                            </div>
                            @endforeach

                    </div>
                @endif
                @if ($grado == 2)
                    <div class="h-auto mx-2 my-2 text-center bg-gray-900 dark:bg-gray-700 text-black border rounded shadow-md" x-show="open"
                        x-on:click.away="open = false">
                        <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="volumen1">
                        <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="presion1">
                            <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="temperatura1">
                        <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="presion2">
                            <input type="number" class="p-2 m-2 border-2 text-white bg-transparent text-center rounded shadow-md h-28-md" name="" id=""
                            wire:model="temperatura2">
                        {{--  <p>{{ $grado }}</p>  --}}
                        {{--  <h1 class="text-white font-mono font-semibold uppercase text-2xl">Respuesta</h1>  --}}
                        @foreach ($res2 as $r)
                            <div class="text-xl font-bold">
                                <input class="block bg-transparent border-2 text-white w-48 h-16 m-2 mx-auto rounded h-28-md" disabled type="text" name=""
                                    id="" value="{{ $r['resultado']}}">

                            </div>
                        @endforeach
                    </div>
                @endif

                </template>
            </div>






