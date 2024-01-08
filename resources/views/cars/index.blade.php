@extends('layouts.app')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cars</div>
                    <div class="card-body">

                        <div class="table_responsive">
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th class="text-center">id</th>
                                    <th>number</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->car_number}}</td>

                                        <form method="post" action="{{route('car-delete')}}">
                                            @csrf
                                            <td><a class="btn btn-primary"
                                                   href="{{route('car-edit', $car->id)}}">Edit</a>
                                                <input type="hidden" name="id" value="{{$car->id}}"> ||

                                                <button class="btn btn-primary" type="submit">Delete</button>
                                            </td>
                                        </form>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <a class="btn btn-info"style="width: 150px" href="{{route('car-new')}}">Add New</a>
                    </div>
                    <div class="col text-center">
                        <a class="btn btn-info" style="width: 150px" href="{{route('drivers-index')}}">show drivers</a>
                    </div>
                    <div class="col text-center">
                        <a class="btn btn-info " style="width: 150px" href="{{route('trip-new')}}">add trip</a></div>

                </div>
        </div>
    </div>

@endsection
