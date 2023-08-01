@extends('layout.master')
@section('title', 'Home')

@section('content')
    @include('layout.header')

    <div class="d-flex">
        <form action="/home" method="POST" class="ms-4">
            @csrf
            <button type="submit" class="btn btn-outline-success"> All </button>
        </form>
        <form action="/home/female" method="POST" class="mx-4">
            @csrf
            <button type="submit" class="btn btn-outline-success"> Female </button>
        </form>
        <form action="/home/male" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-success"> Male </button>
        </form>
    </div>

    <div class="row">
        @foreach ($users as $user)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $user->image }}" class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">HOBBY:</p>
                        <form action="/thumb" method="POST">
                            @csrf
                            <input type="text" name="user_2" id="user_2" value="{{ $user->id }}" hidden>
                            <button type="submit" class="btn btn-outline-success">Thumb</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
