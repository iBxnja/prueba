@extends('plantilla')
@section('contenido')
    <section class="w-full h-full flex flex-col items-center justify-around">
        @if(isset($mensaje))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-sm text-sm text-white">{!! $mensaje !!}</h2>
        </div>
        @endif
        @if(isset($mensajeRojo))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-red-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-sm text-white">{!! $mensajeRojo !!}</h2>
        </div>
        @endif
        @if(isset($error))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-red-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-sm text-white">{!! $error !!}</h2>
        </div>
        @endif
        
        @if(isset($bienvenido))
        <div class="w-11/12 cel:mt-5 cel:mb-2 cel:rounded-2xl h-16 bg-green-500 grid place-items-center mt-4 overflow-hidden">
            <h2 class="cel:text-base text-white">{{ session('bienvenido') }}</h2>
        </div>
        @endif
        @if(session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        @if(session('bienvenido'))
            <div class="alert alert-success">
                {{ session('bienvenido') }}
            </div>
        @endif
        <div class="w-full cel:h-full md:h-full lg:h-screen xl:h-screen 2xl:h-screen flex items-center justify-center cel:flex-col cel:text-center md:flex-col md:text-center">
            <div class="cel:w-11/12 w-6/12 flex cel:items-center items-start justify-center flex-col md:items-center">
                <h2 class="cel:ml-0 md:ml-0 ml-10 cel:text-6xl text-9xl cel:mt-5 text-teal-400 font-bold">Clínica</h2>
                <h2 class="cel:ml-0 md:ml-0 ml-12 cel:text-5xl text-7xl text-sky-500 cel:mt-0 lg:mt-5 xl:mt-5 2xl:mt-5 font-semibold">Odontológica</h2>
                <p class="cel:ml-0 md:ml-0 ml-12 text-xl font-normal mt-5 italic text-sky-500">La odontología es una profesión que requiere de aquellos que tienen el sentido estético de un artista, la destreza manual de un cirujano, el conocimiento científico de un médico y la paciencia de un monje.</p>
                <a href="#arrancar" class="cel:ml-0 md:ml-0 ml-12 mt-5 grid place-items-center w-48 h-14 bg-gradient-to-r from-emerald-500 to-teal-500 border-2 border-teal-700 text-white rounded-full  lg:hover:text-lg  xl:hover:text-lg  2xl:hover:text-lg duration-100 ease-in-out decoration-transparent">Hora de trabajar</a>
            </div>
            <div class="cel:w-full w-5/12 grid place-items-center">
                
            </div>
        </div>
    </section>
    <section id="arrancar" class="w-full h-full flex items-center flex-wrap justify-around text-white pb-10">
        
    </section>
@endsection