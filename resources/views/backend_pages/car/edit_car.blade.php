@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b>Edit Car</b>
        <hr>
    </h1>


    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.update_car', ['id'=>$cars->id]) }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">name</label>
                                        <input type="text" name="name" class="form-control" id="validationServer01"
                                            placeholder="name" value="{{$cars->name}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">model</label>
                                        <input type="text" name="option" class="form-control" id="validationServer02"
                                            placeholder="model" value="{{$cars->option}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary"  type="submit">edit car</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
@endsection
