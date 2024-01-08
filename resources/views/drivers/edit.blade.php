@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Driver</div>

                    <div class="card-body">


                        <form method="POST" action="{{ route('drivers-update')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$driver->id}}"> {{-- important to read id --}}
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="name" value="{{ $driver->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">no of trips</label>

                                <div class="col-md-6">
                                    <input  type="number" class="form-control" name="no_of_trips" value="{{ $driver->no_of_trips }}">
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
    </div>


    @endsection
