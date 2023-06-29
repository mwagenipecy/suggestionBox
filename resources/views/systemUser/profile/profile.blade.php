@extends('systemUser.home.main')
@section('user_contents')



        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                <div class="media-body">
                                    <h3 class="mb-0">{{auth()->user()->name}}</h3>
                                    <p class="text-muted mb-0">{{('coict')}}</p>
                                </div>
                            </div>

                            <h4>About Me</h4>
                            <p class="text-muted">Hi, I'm {{auth()->user()->name}}  from collage of {{('coict')}}  in University of dar es salaam </p>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{auth()->user()->email}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <form  class="form-profile" method="post" action="{{route('update_user_profile')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="password" class="form-control m-2" name="previous_password" id="textarea" cols="30" rows="2" placeholder="Previous Password" required>
                                    <input type="password" class="form-control m-2" name="password" id="textarea" cols="30" rows="2" placeholder="New Password" required>
                                    <input type="password" class="form-control m-2" name="rewrite_password" id="textarea" cols="30" rows="2" placeholder="Rewrite Password" required>
                                     </div>
                                <div class="d-flex align-items-center">

                                    <ul class="mb-0 form-profile__icons">
                                        <li class="d-inline-block">
                                            <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-user"></i></button>
                                        </li>

                                    </ul>
                                    <button class="btn btn-primary px-3 ml-4">Update Password</button>
                                </div>
                            </form>


                        </div>


                    </div>
                    <form method="post" action="">
                        @csrf
                        <button class="btn btn-danger px-3 ml-4">Delete Account</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- #/ container -->


@endsection
