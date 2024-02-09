<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
    

<body class="antialiased">

    @include('layouts.navbar')




    <div class="container mt-3">
        <h1 class="text-center">liste des utlisateur</h1>
        <table class="table container">
            <thead class="bg-dark text-light">
            <tr>
                {{-- <th>id</th> --}}
                <th>name</th>
                <th>email</th>
                <th>role_id</th>
                <td>change role</td>
            </tr>
            </thead>
            
            <tbody>
            @foreach ($users as $user)
            <tr>
                {{-- <td>{{$user->id}}</td> --}}
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{ $user->role->name_role}}</td>
                <td>
                    <form action="{{route('updateRole',$user->id)}}" method="POST" class="w-50 d-flex">
                        @csrf
                        @method('PUT')
                        <select name="role_id" id="role_id" class="form-select w-75">
                            <option value="2">bibliothecaire</option>
                            <option value="1">etudiant</option>
                        </select>
                        <button class="btn btn-primary ms-2"><i class="fa-solid fa-check"></i></button>
                    </form>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    

    
   
    








































<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
    