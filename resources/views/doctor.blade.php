@extends('layouts.app')

@section('content')
        <!-- intro start -->
        <section id="intro" class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>{{ $doctor->name }}</h1>
                        <h1>{{ $doctor->speciality }}</h1>
                        <p class="lead">{{ $doctor->description }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- intro close -->
@endsection
