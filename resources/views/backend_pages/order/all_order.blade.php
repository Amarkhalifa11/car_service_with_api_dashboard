@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b  >All order</b> <hr>
</h1>

<div class="col-lg-12">
    <div class="card card-default">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">car</th>
                        <th scope="col">service_id</th>
                        <th scope="col">user_id</th>
                        <th scope="col">vendor_id</th>
                        <th scope="col">emergency</th>
                        <th scope="col">status</th>
                        <th scope="col">price</th>
                        <th scope="col">time</th>
                        <th scope="col">location</th>
                        <th scope="col">phone</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($orders as $order)
                        
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$order->car}}</td>
                        <td>{{$order->service_id}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->vendor_id}}</td>
                        <td>{{$order->emergency}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->time}}</td>
                        <td>{{$order->location}}</td>
                        <td>{{$order->phone}}</td>
                        <td><a href="{{ route('dashboard.all_order.destroy', ['id'=>$order->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection