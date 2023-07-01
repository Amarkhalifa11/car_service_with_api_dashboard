@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b  >All Cars</b> <hr>
</h1>

<div class="col-lg-12">
    <div class="card card-default">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">model</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                     @foreach ($cars as $car)
                        
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$car->name}}</td>
                        <td>{{$car->option}}</td>
                        <td><a href="{{ route('dashboard.edit_car', ['id'=>$car->id]) }}" class="btn btn-success">edit</a></td>
                        <td><a href="{{ route('dashboard.car.destroy', ['id'=>$car->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>

                    @endforeach 

                </tbody>
            </table>
        </div>
    </div>

@endsection