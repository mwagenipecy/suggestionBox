@extends('auth.layout.guestLayout')
@section('register_login_content')



<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href=" ">
                                <h5><strong>  UDSM ONLINE SUGGESTION BOX</strong> </h5>
                                <image src="{{asset('/myAppStyle/udsmLogo/20210428_081523_177_udsm logo.png')}}" style="height:100px; width:100px; align-content: center; margin-left: 39%;">  </image>
                                </a>

                            <form class="mt-5 mb-5 login-input" action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <i class="icon-envelope"></i>
                                    <input type="email" class="form-control"  name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <i class="icon-lock"></i>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <button class="btn login-form__btn submit w-100">Sign In</button>
                            </form>
                            <p class="mt-5 login-form__footer">Dont have account? <a href="{{route('register')}}" class="text-primary">Sign Up</a> now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



