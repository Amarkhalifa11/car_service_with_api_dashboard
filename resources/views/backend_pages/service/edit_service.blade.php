@extends('backend.index')
@section('content')
<h1 class="text-center" style="margin-left: 100px; margin-bottom: 40px; color: black">
    <b>Edit service</b>
        <hr>
    </h1>


    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.all_service.update_service', ['id'=>$service->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">name</label>
                                        <input type="text" name="name" class="form-control" id="validationServer01"
                                            placeholder="name" value="{{$service->name}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">price</label>
                                        <input type="text" name="price" class="form-control" id="validationServer02"
                                            placeholder="price" value="{{$service->price}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">price</label>
                                        <input type="file" name="image" class="form-control" id="validationServer02"
                                             value="{{$service->image}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary"  type="submit">edit service</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
@endsection
