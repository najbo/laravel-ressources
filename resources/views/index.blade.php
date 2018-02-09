@extends('layout.master')

@section('header')
    <h1 class="blog-title">Menu principal</h1>
    <p class="lead blog-description">Evénements en cours</p>
@endsection

@section('content')
	
	
        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Introduction</h2>
            <p class="blog-post-meta">31 octobre par <a href="#">Jan</a></p>

            <p>
              Bienvenue sur l'Intranet de Estoppey-Addor SA
            </p>

          </div><!-- /.blog-post -->



{{--           <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> --}}

        </div><!-- /.blog-main -->

@endsection