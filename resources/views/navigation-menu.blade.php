

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
  <!--Nav-->
  <nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
          
          CyberMath
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
          <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                          {{ __('Home') }}
                      </x-jet-nav-link>
          
          </li>
          <li class="mr-3">
         
          <x-jet-nav-link href="{{ route('termodinamica') }}" :active="request()->routeIs('termodinamica')">
                          {{ __('Termodinamica') }}
                      </x-jet-nav-link>
           
        </li>
          <li class="mr-3"> 
          <x-jet-nav-link href="{{ route('sonido') }}" :active="request()->routeIs('sonido')">
                          {{ __('Sonido') }}
                      </x-jet-nav-link>
         
          </li>
          <li class="mr-3">
          <x-jet-nav-link href="{{ route('fuerza') }}" :active="request()->routeIs('fuerza')">
                          {{ __('Fuerza') }}
                      </x-jet-nav-link>
         
          </li>
          <li class="mr-3">
          <x-jet-nav-link href="{{ route('energia') }}" :active="request()->routeIs('energia')">
                          {{ __('Energía') }}
                      </x-jet-nav-link>
         
          </li>
          <li class="mr-3">
          <x-jet-nav-link href="{{ route('pendulo') }}" :active="request()->routeIs('pendulo')">
                          {{ __('Movimiento Pendular') }}
                      </x-jet-nav-link>
         
          </li>
          <li class="mr-3">
          <x-jet-nav-link href="{{ route('parabolico') }}" :active="request()->routeIs('parabolico')">
                          {{ __('Movimiento Parabólico') }}
                      </x-jet-nav-link>
          <!-- <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Movimiento Parabólico</a>
           -->
        </li>
        </ul>
        
      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>
  <!--Hero-->
 
     
      
   

  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    .gradient {
      background: linear-gradient(90deg, #F71E00 0%, #F7FF00 100%);
    }
  </style>
   <script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function () {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 9) {
        header.classList.add("bg-white");
        navaction.classList.remove("bg-white");
        navaction.classList.add("gradient");
        navaction.classList.remove("text-gray-800");
        navaction.classList.add("text-white");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
      } else {
        header.classList.remove("bg-white");
        navaction.classList.remove("gradient");
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script>
  <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;
    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }
    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>
 
</body>