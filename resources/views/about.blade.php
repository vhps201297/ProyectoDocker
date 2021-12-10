@extends('layout')

@section('title', __('About'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" 
                src="/img/about.svg" alt="About">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Acerca de nosotros</h1>
                <p class="text-secondary">Somos estudiantes de último semestre de la facultad de infeniería, en la Universidad Nacional Autónoma de México.</p>
                <a class="btn btn-primary btn-block active"
                href="{{route('contact')}}">Contáctanos</a>
                <a class="btn btn-outline-primary btn-block"
                 href="{{route('proyectos.index')}}">Nuestro portafolio</a>
            </div>
        </div>
    </div>
@endsection