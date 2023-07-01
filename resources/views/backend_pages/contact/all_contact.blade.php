@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b  >All Contact</b> <hr>
</h1>

<div class="col-lg-12">
    <div class="card card-default">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">email</th>
                        <th scope="col">ask</th>
                        <th scope="col">createt at</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                     @foreach ($contacts as $contact)
                        
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->ask}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td><a href="{{ route('dashboard.contact.destroy', ['id'=>$contact->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>

                    @endforeach 

                </tbody>
            </table>
        </div>
    </div>

@endsection