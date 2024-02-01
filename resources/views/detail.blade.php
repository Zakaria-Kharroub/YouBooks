<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')

<body>

    @include('layouts.navbar')
    

    <h1></h1>
    <p></p>
    <p></p>



    <div class="container">
        <div class="row">
            <div class="card col-md-12 p-3">
                <div class="row ">
                    <div class="col-md-4">
                        <img class="w-100" src="{{URL('images/casablanca.jpg')}}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-block">
                            <h3 class="card-title">{{ $book->title }}</h3>
                            <h3 class="text-danger">{{ $book->author }}</h3>
                            <p class="card-text text-justify">{{ $book->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </div>
</body>
</html>