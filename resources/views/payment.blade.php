@extends('layout.master')
@section('title', 'Login')
<link rel="stylesheet" href="/css/register.css">

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif

    @if (session('failed'))
        {{ session('failed') }}
    @endif

    <div>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Payment</h3>
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="balance">Input</label>
                                                <input type="text" id="balance" class="form-control" name="balance" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex flex-column">
                                        <div class="mt-4 pt-2 m-auto mb-2">
                                            <button class="btn btn-primary btn-lg" type="submit"> Submit </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
