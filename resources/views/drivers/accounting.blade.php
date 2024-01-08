
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Driver accounting</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>trips</th>
                                <th>fees</th>
                                <th>Total Money</th>
                                <th>Company Profit</th>

                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php($total_trips = App\Models\Trip::where('car_id', $driver->car_id)->count())
                                    @php($total_driver_profits = App\Models\Trip::where('car_id', $driver->car_id)->sum('price'))
                                    @php($total_distance = App\Models\Trip::where('car_id', $driver->car_id)->sum('distance'))
                                <td>{{$total_trips}}</td>
                                <td>{{$total_distance}} EGP</td>
                                <td>{{$total_driver_profits}} EGP</td>
                                <td>{{($total_driver_profits*10/100) + $total_distance}} EGP</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
