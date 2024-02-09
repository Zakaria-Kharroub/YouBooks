<nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <div class="container-fluid">
        <a href="{{route('books.index')}}" class="navbar-brand"><span class="text-danger">You</span>Book</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                @auth

                  @if (session('role_id') == 2)
                      <a href="{{route('books.create')}}" class="nav-item nav-link">ajouter</a>

                      <div class="btn-group">
                        <button type="button" class="btn nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           <b> {{session('name')}}</b>
                        </button>
                        <ul class="dropdown-menu">
                          
                          <li><a class="dropdown-item" href="#">profile</a></li>
                          <li><a class="dropdown-item" href="{{route('myReservation')}}">mes reservations</a></li>
                          <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logOut')}}">logout</a></li>
                        </ul>
                      </div>
                      
                    @else

                     <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{session('name')}}
                        </button>
                        <ul class="dropdown-menu">
                          
                          <li><a class="dropdown-item" href="#">profile</a></li>
                          <li><a class="dropdown-item" href="{{route('myReservation')}}">mes reservations</a></li>
                          <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logOut')}}">logout</a></li>
                        </ul>
                      </div>
                   @endif


                @else
                    <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                    <a href="{{route('register')}}" class="nav-item nav-link">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>