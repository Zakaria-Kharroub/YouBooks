<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
    

<body class="antialiased">

@include('layouts.navbar')
        
        
        {{-- <h1 class='text-center'>
            ajouter book
            <button class="btn btn-danger">ajouter book</button>
        </h1> --}}


        <div class="d-flex justify-content-center ">
            <form action="{{route('books.store')}}" method="POST"  style="width: 26rem;" class="bg-light p-5 mt-5 radius-10 shadow-lg p-3 mb-5 bg-white rounded" >
                @csrf
                <!-- title input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form4Example1" class="form-control" placeholder="titre de livre ..." name='title' />
                  
                  <label class="form-label" for="form4Example1">title</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form4Example1" class="form-control" placeholder="titre de livre ..." name='author' />
                    
                    <label class="form-label" for="form4Example1">author</label>
                  </div>
            
              
                <!-- description input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <textarea class="form-control" id="form4Example3" rows="4" placeholder=" description ..." name="description"></textarea>
                  <label class="form-label" for="form4Example3">description</label>
                </div>
              
              
                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-danger btn-block w-100">ajouter</button>
              </form>
    
        </div>

        <table class="table bg-light table-striped table-hover  container">
            <thead class="bg">
              <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">description</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($books as $book)

        
              <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td class="d-flex">
                    <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">edit</a>
                    <form action="{{route('books.destroy',$book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                    </form>
                </td>
              </tr>
              
          @endforeach
        </tbody>
        </table>


















































        <style>
            body{
                background-image: url("{{URL('images/library-bg.jpg')}}");
                background-size: cover;
                background-repeat: no-repeat;

            }
        </style>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>