<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
    

<body class="antialiased">

@include('layouts.navbar')




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">mes reservations</h1>
            <table class="table">
                <thead>
                    <tr class="bg-dark text-light">
                        {{-- <th>id</th> --}}
                        <th>titre</th>
                        <th>date final</th>
                        <td>Les jours restants</td>
                        <td>retourner</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                    <tr>
                        {{-- <td>{{ $reservation->id }}</td> --}}
                        
                        <td>{{ $reservation->book->title }}</td> 
                        <td>{{$reservation ->date_fin}}</td>

                        
                       <td>{{ \Carbon\Carbon::now()->diffInDays($reservation->date_fin) }}</td> 
                       
                        <td>
                            <form action="{{route('retourner',$reservation->id)}}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ms-1">retourner <i class="fa-solid fa-arrow-rotate-left"></i></button>
                              </form>
                        </td>

                        <!-- Ajoutez d'autres colonnes au besoin -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




{{-- @foreach ($reservations as $reservation)


<tr>
    <td>{{ $reservation->id }}</td>
    <td>{{ $reservation->book->title }}</td> 
    <td>{{$reservation ->date_fin}}</td>
</tr>
@endforeach --}}
































<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>