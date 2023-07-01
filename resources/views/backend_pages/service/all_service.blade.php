@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b  >All Service</b> <hr>
</h1>

<div class="col-lg-12">
    <div class="card card-default">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">price</th>
                        <th scope="col">sescription</th>
                        <th scope="col">user_id</th>
                        <th scope="col">createt at</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($services as $service)
                        
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$service->name}}</td>
                        <td><img src="{{ asset('frontend/images/' . $service->image) }}" width="50" height="50" alt=""></td>
                        <td>{{$service->price}}</td>
                        <td>{{$service->description}}</td>
                        <td>{{$service->user_id}}</td>
                        <td>{{$service->created_at}}</td>
                        <td><a href="{{ route('dashboard.all_service.edit_service', ['id'=>$service->id]) }}" class="btn btn-success">edit</a></td>
                        <td><a href="{{ route('dashboard.all_service.destroy', ['id'=>$service->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>

                    @endforeach 

                </tbody>
            </table>
        </div>
    </div>

@endsection