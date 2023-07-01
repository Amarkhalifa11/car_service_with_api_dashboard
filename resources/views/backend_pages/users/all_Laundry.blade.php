@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b  >All Laundry</b> 
</h1>

<div class="col-lg-12">
    <div class="card card-default">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">location</th>
                        <th scope="col">category</th>
                        <th scope="col">image_profile</th>
                        <th scope="col">image 1</th>
                        <th scope="col">image 2</th>
                        <th scope="col">image 3</th>
                        <th scope="col">image 4</th>
                        <th scope="col">created_at</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($users as $user)
                        
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->location}}</td>
                        <td>{{$user->category}}</td>
                        <td><img src="{{ asset('frontend/images/' . $user->profile_image) }}" width="80" alt=""></td>
                        <td><img src="{{ asset('frontend/images/' . $user->image1) }}" width="80" alt=""></td>
                        <td><img src="{{ asset('frontend/images/' . $user->image2) }}" width="80" alt=""></td>
                        <td><img src="{{ asset('frontend/images/' . $user->image3) }}" width="80" alt=""></td>
                        <td><img src="{{ asset('frontend/images/' . $user->image4) }}" width="80" alt=""></td>
                        <td>{{$user->created_at}}</td>
                        <td><a href="{{ route('dashboard.user.delete', ['id'=>$user->id]) }}" class="btn btn-danger">delete</a></td>

                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection