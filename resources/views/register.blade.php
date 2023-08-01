@extends('layout.master')
@section('title', 'Register')
<link rel="stylesheet" href="/css/register.css">

@section('content')
    @if (session('failed'))
        {{ session('failed') }}
    @endif

    <div>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <h3 class="mb-2 pb-2 pb-md-0">Registration Form</h3>
                                <form action="/register" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="fullname">Full Name</label>
                                                <input type="text" id="fullname" class="form-control" name="name" />
                                            </div>
                                        </div>
                                        @error('name')
                                            {{ $message }}
                                        @enderror

                                        <div class="col-md-6 mb-2 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="dob" class="form-label">Birth's date</label>
                                                <input type="date" class="form-control" id="dob" name="dob" />
                                            </div>
                                        </div>
                                        @error('birthday')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="instagram">Instagram Account</label>
                                                <input type="text" id="instagram" class="form-control" name="instagram" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label class="form-label">Gender</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="femaleGender" value="female" />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="maleGender" value="male" />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="password">Select Your Hobbies (Min. 3)</label>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="traveling">
                                                    <label class="custom-control-label" for="traveling">Traveling</label>

                                                    <input type="checkbox" class="custom-control-input" id="sport">
                                                    <label class="custom-control-label" for="sport">Sport</label>

                                                    <input type="checkbox" class="custom-control-input" id="drawing">
                                                    <label class="custom-control-label" for="drawing">Drawing</label>

                                                    <input type="checkbox" class="custom-control-input" id="dancing">
                                                    <label class="custom-control-label" for="dancing">Dancing</label>

                                                    <input type="checkbox" class="custom-control-input" id="singing">
                                                    <label class="custom-control-label" for="singing">Singing</label>

                                                    <input type="checkbox" class="custom-control-input" id="reading">
                                                    <label class="custom-control-label" for="reading">Reading</label>

                                                    <input type="checkbox" class="custom-control-input" id="writing">
                                                    <label class="custom-control-label" for="writing">Writting</label>
                                                </div>
                                                <!-- Default inline 1-->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-2 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email" />
                                            </div>
                                        </div>
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                        <div class="col-md-6 mb-2 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="phone">Phone Number</label>
                                                <div class="d-flex justify-center">
                                                    <input type="tel" id="phone" class="form-control"
                                                        name="phone" />
                                                </div>
                                            </div>
                                        </div>
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" class="form-control"
                                                    name="password" />
                                            </div>
                                        </div>
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="form-outline">
                                                <label class="form-label" for="image">Upload Your Image</label>
                                                <input class="form-control" id="image" type="file" name="image" />
                                            </div>
                                        </div>
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <input class="form-control" id="generated_id" type="text" name="generated_id"
                                        value="SKY" hidden />

                                    <div class="d-flex flex-column">
                                        <div class="mt-4 pt-2 m-auto">
                                            <button class="btn btn-primary btn-lg" type="submit"> Submit </button>
                                        </div>

                                        <div class="d-flex m-auto">
                                            <p>Already have an account? </p>
                                            <a href="/login">Login Here</a>
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

    <script>
        $(function() {
            $('#datepicker').datepicker();
        });

        $('#multiple-select-optgroup-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
    </script>

@endsection
