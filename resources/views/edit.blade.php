<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.navbar')

 

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">update le livre: <span class="text-danger">{{$book->title}}</span></h5>
                
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('books.update', $book->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                    </div>

                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $book->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-danger mt-2 w-100">enregstrer</button>
                </form>
            </div>
        </div>
    </div>
    




































    <style>
        body{
            background-image: url("{{URL('images/library-bg.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;

        }
    </style>
</body>
</html>