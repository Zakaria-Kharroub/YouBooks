<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
    

<body class="antialiased">

@include('layouts.navbar')
        
        
        {{-- <h1 class='text-center'>
            hello
            <button class="btn btn-danger">hello</button>
        </h1> --}}

        @foreach ($books as $book)
        

        {{-- <div class="card" style="width: 18rem;">
            <img src="{{URL('images/laylow.jpg')}}" alt="">
            <div class="card-body">
              <h3 class="card-title">{{$book->title}}</h3>
              <h5>{{$book->author}}</h5>
              <p class="card-text">{{$book->description}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> --}}



          <div class="container">
            <div class="row">
                <div class="card col-md-9 p-3">
                    <div class="row ">
                        <div class="col-md-4">
                            <img class="w-75" src="{{URL('images/casablanca.jpg')}}">
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">{{$book->title}}</h4>
                                <h5 class="author-name">{{$book->author}}</h5>
                                <p class="card-text text-justify">{{$book->description}}</p>

                                <div class="d-flex">
                                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-danger text-light ">voir <i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('reservations.create', $book->id) }}" class="btn btn-primary text-light ms-1">reserver <i class="fa-solid fa-calendar-check"></i></a>
                                    <form action="{{route('books.destroy',$book->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger ms-1"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    
                                </div>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



  





            
        @endforeach

          
          

        <style>
      
        body {
            background-color: #FFFFFF;
        }
        .card {
            border-radius:7px;
            margin:10px auto;
        }
        .card-title {
            color: #E44424;
        }
        
        .card-text {
            margin-top:10px;
            margin-bottom: 10px;
            background-color:#FFFFFF;
            color:#000000;
        }
        a.btn, a.btn:visited {
            color:#333333;
        }
        hr {
          /* margin-top: 1rem; */
          margin-bottom: 1rem;
          border: 0;
          border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        .author-name{
            font-weight:bold ;
        }
        </style>
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
