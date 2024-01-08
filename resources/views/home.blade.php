@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col">
                {{--            <div class="card">--}}
                {{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}


                {{--                <div class="card-body">--}}
                {{--                    @if (session('status'))--}}
                {{--                        <div class="alert alert-success" role="alert">--}}
                {{--                            {{ session('status') }}--}}
                {{--                        </div>--}}
                {{--                    @endif--}}

                {{--                    {{ __('You are logged in!') }}--}}
                {{--                </div>--}}
                <p class=" .hello">Welcome <i class="fa-regular fa-face-smile-wink"
                                              style="color:black"></i> {{ Auth::user()->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a  class="a-style" href="{{route('car-new')}}">
                <div class="card card-1 card-home text-center align-items-center" style="width: 30rem;">

                  <img
                            src="https://i.gaw.to/content/photos/39/99/399960_2020_Mitsubishi_Mirage.jpg?1024x640"
                            class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text">Add Car</h1>
                    </div>
                </div>
                </a>
            </div>
            <div class="col  d-flex justify-content-center">
                <a class="a-style" href="{{route('drivers-index')}}">
                <div class="card card-1 card-home text-center" style="width: 30rem;">

                    <img
                            src="https://www.thehrdirector.com/wp-content/uploads/2020/07/8e2gal_gie8-scaled.jpg"
                            class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text">Drivers info</h1>
                    </div>
                </div>
                </a>
            </div>

            <div class="col d-flex justify-content-center">
                <a class="a-style" href="{{route('trip-new')}}">
                    <div class="card card-1 card-home text-center" style="width: 30rem;">

                        <img src="https://www.fleetalliance.co.uk/wp-content/uploads/2021/03/best-cars-to-beat-bik.webp"
                             class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">Add Trips</h1>

                        </div>
                    </div>
                </a>
            </div>


        </div>

@endsection
