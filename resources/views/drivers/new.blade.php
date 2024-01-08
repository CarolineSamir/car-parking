@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Driver</div>

                    <div class="card-body">


                        <form method="POST" action="{{ route('drivers-add')}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">car</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="car" id="car" required>
                                        <option value="">Please Select</option>
                                        @foreach(App\Models\Car::get() as $car)
                                            <option value="{{$car->id}}">{{ $car->car_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        save
                                    </button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
