@extends('layouts.app')
@section('content')
{!! Toastr::message() !!}

        <div class="account-pages pt-5">
            <div class="container">
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8 col-lg-6 col-xl-5 pt-5"><br/><br/>
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="my-3">
                                            <a href="#">
                                                <span><img src="{{ URL::to('newassets/images/logo-Gtech.png') }}" alt="" height="28"></span>
                                            </a>
                                        </div>
                                        <h5 class="text-muted text-uppercase py-3 font-16">Login your account</h5>
                                    </div>
                                    <form action="{{ route('login') }}" method="POST" class="mt-2">
                                    @csrf
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter your username" name="username">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Log In <i class="mdi mdi-arrow-right"></i></button>
                                        </div>
                                        {{-- <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a> --}}
                                    </form>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
@endsection
