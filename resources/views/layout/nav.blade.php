<?php
use App\Navigation;

// Construction du menu principal (haut)

// Eléments du menu :
$menuItem = array(
  "Accueil" => "/",
  "Ressources" => "/ressources",
  "Réparations" => "/reparations",
  "Documents ISO" => "/iso",
  "Absences" => "/absences",
  "About" => "/about",
  "Login" => "/login",
  "Register" => "/register"
);


?>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">

          @foreach ($menuItem as $nomMenu => $urlMenu) 

              {{-- <a class="nav-link active" href="/">Accueil</a> --}}
              <a class="nav-link{{ Navigation::ActiveMenu($urlMenu) }}" href="{{ $urlMenu }}">{{ $nomMenu }}</a>
              <?php
             
            ?>
            @endforeach

        </nav>
      </div>
    </div>