@extends('layout')

@section('title', __('Home'))

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <h1 class="display-4 text-primary">Desarrollo de Software</h1>
                <p class="lead text-secondary">A continuación se observa una página web que corresponde al proyecto para la materia de Temas Selectos de Ingeniería en Computación II.
                    Dentro de esta aplicación se observan algunos de los proyectos realizados por nuestra autoría.</p>
                <a class="btn btn-primary btn-block active" 
                href="{{route('contact')}}">Contáctanoa</a>
                <a class="btn btn-block btn-outline-primary" 
                href="{{route('proyectos.index')}}">Nuestro portafolio</a>
            </div>

            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home-2.svg" alt="Desarrollo de software">
            </div>
        </div>
    </div>
    
    
@endsection

