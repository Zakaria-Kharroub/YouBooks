<nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="container-fluid">
            <a href="{{route('books.index')}}" class="navbar-brand"><span class="text-danger">You</span>Book</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               
                <div class="navbar-nav ms-auto">
                    <a href="{{route('books.create')}}" class="nav-item nav-link">ajouter</a>

                    <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                    <a href="{{route('register')}}" class="nav-item nav-link">Register</a>

                </div>
            </div>
        </div>
    </nav>