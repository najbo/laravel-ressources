@extends('layouts.app')

@section('header')
    <h1 class="blog-title">Gestion des ressources</h1>
    <p class="lead blog-description">Ressources matériel ou immatérielles</p>
@endsection

@section('content')
	
	
        <div class="col-sm-8" blog-main>

          <!-- Version liste -->
          <table class="table">

            @foreach ($ressources as $ressource)
              <tr><td>{{ $ressource->designation }}</td></tr>
            @endforeach

          </table>

          <!-- Version paragraphes -->

          @foreach ($ressources as $ressource)

            <div class="blog-post">

              <h2 class="blog-post-title">{{ $ressource->designation }}</h2>
              <p class="blog-post-meta">31 octobre par <a href="#">Jan</a></p>

              <p>
                Texte ici
              </p>

            </div><!-- /.blog-post -->
          
          @endforeach

{{--           <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> --}}

        </div><!-- /.blog-main -->

@endsection