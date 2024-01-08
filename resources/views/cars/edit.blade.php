@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cars</div>

                <div class="card-body">
                    <form method="POST" action="{{route('car-update')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$cars->id}}">
                        <div class="row mb-3">
                            <label for="car_numbers" class="col-md-4 col-form-label text-md-end">Number</label>

                            <div class="col-md-6">
                                <input type="text" name="car_number" class="form-control" value="{{$cars->car_number}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rood" class="col-md-4 col-form-label text-md-end">Rood</label>

                            <div class="col-md-6">
                                <input type="text" name="rood" class="form-control" value="{{$cars->rood}}">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
