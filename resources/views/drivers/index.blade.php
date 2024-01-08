@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Driver</div>

                    <div class="card-body">
                        <a href="{{route('car-new')}}">Add New</a>
                        <br>
                        <a href="{{route('car-index')}}">show cars</a>
                        <br>
                        <a href="{{route('trip-new')}}">add trip</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
{{--                                <th>car number</th>--}}
                                <th>trips</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($drivers as $driver)
                                <tr>
                                    <td>{{$driver->id}}</td>
                                    <td>{{$driver->name}}</td>
{{--                                    <td>{{$driver->car->car_number}}</td>--}}

                                    <td>{{App\Models\Trip::where('car_id', $driver->car_id)->count()}}
                                    <td>
                                        <a href="{{route('drivers-edit', $driver->id)}}">Edit</a>

                                        <form method="post" action="{{route('drivers-delete')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$driver->id}}"/>
                                            <button type="submit" class="btn btn-primary">delete</button>
                                        </form>
                                            <a href="{{route('drivers-accounting', $driver->id)}}">accounting</a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{--                        <form method="POST" action="add">--}}
                        {{--                            @csrf--}}
                        {{--                            <div class="row mb-3">--}}
                        {{--                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>--}}

                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <input  type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}



                        {{--                            <div class="row mb-0">--}}
                        {{--                                <div class="col-md-8 offset-md-4">--}}
                        {{--                                    <button type="submit" class="btn btn-primary">--}}
                        {{--                                        save--}}
                        {{--                                    </button>--}}

                        {{--                                    @if (Route::has('password.request'))--}}
                        {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                        {{--                                            {{ __('Forgot Your Password?') }}--}}
                        {{--                                        </a>--}}
                        {{--                                    @endif--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
