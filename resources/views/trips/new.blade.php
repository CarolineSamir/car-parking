@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Trips</div>
                    <div class="card-body">
                        <form method="post" action="{{route('trip-add')}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="from" class="col-md-4 col-form-label text-md-end">From</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="from" value="{{ old('from') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="from" class="col-md-4 col-form-label text-md-end">To</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="to" value="{{ old('to') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="distance"
                                       class="col-md-4 col-form-label text-md-end">Distance</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="distance"
                                           value="{{ old('distance') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">Car</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="car" id="car" required>
                                        <option value="">Please Select</option>
                                        @foreach(App\Models\Car::get() as $car)
                                            <option value="{{$car->id}}">{{ $car->car_number }}</option>
                                        @endforeach
                                    </select>
{{--                                    <input type="text" class="form-control" name="car" value="{{ old('car') }}">--}}
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
