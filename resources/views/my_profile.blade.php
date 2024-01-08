@extends('layouts.app')
@section('content')
    <div class="container myProfile">
        <div class="row" style="background-color: white">
            <div class="col-4" style="margin-top: 30px ; margin-bottom:30px">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">Item 1</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                            <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                        </nav>
                    </nav>
                </nav>
            </div>

            <div class="col-8" style="margin-top: 30px ; margin-bottom:30px">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                     class="scrollspy-example-2" tabindex="0">
                    <div id="item-1">
                        <h4>My profile</h4>
                    </div>
                    <form method="post" action="{{route( 'myProfile-edit')}}">
                        @csrf
                        <div id="item-1-1">
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name}}">
                                </div>
                            </div>
                        </div>
                        <div id="item-1-2">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email" value="{{ $user->email}}">
                                </div>
                            </div>
                        </div>
                        <div id="item-1-3">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" >
                                </div>
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
@endsection
