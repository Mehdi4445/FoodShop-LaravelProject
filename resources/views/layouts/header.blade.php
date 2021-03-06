<header>
    

  <div class="navbar navbar-dark bg-dark box-shadow">
      <div class="container d-flex justify-content-between">
          <a href="{{ route('accueil')}}" class="navbar-brand d-flex align-items-center">
              <strong>My FoodShop</strong>
          </a>
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('cart_index') }}"><i class="fa fa-shopping-cart"></i> Panier</a>
              </li>
              <li class="nav-item">
              @if (Route::has('login'))
               
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white">Log in</a>

                    @endauth          
            @endif
              </li>
          </ul>
      </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-red">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
              @foreach($categories as $category)
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('voir_produits_par_cat',['id'=>$category->id]) }}">{{$category->nom}}</a>
              </li>
              @endforeach
          </ul>
      </div>
  </nav>
</header>  