@extends('systemUser.home.main')
@section('user_contents')
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-left-box"><a href="{{route('complete_registration_page')}}" class="btn btn-primary btn-block">Compose</a>
                                <div class="mail-list mt-4">
                                    <a href=" " class="list-group-item border-0 text-primary p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>My Suggestions</b> <span class="badge badge-primary badge-sm float-right m-t-5">198</span> </a>
                                    <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Other Suggestions</a>
                                    <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-star-o font-18 align-middle mr-2"></i>Info<span class="badge badge-danger badge-sm float-right m-t-5">47</span> </a>
                                    <a href="#" class="list-group-item border-0 p-r-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft
                                    </a>
{{--                                    <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash</a>--}}
                                </div>
                                <div class="list-group mail-list">

                                </div>
                            </div>
                            <div class="email-right-box">
                                <div class="email-list m-t-15">
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk2">
                                                    <label class="toggle" for="chk2"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk3">
                                                    <label class="toggle" for="chk3"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk4">
                                                    <label class="toggle" for="chk4"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk5">
                                                    <label class="toggle" for="chk5"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk6">
                                                    <label class="toggle" for="chk6"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk7">
                                                    <label class="toggle" for="chk7"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk8">
                                                    <label class="toggle" for="chk8"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk9">
                                                    <label class="toggle" for="chk9"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk10">
                                                    <label class="toggle" for="chk10"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk11">
                                                    <label class="toggle" for="chk11"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk12">
                                                    <label class="toggle" for="chk12"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk13">
                                                    <label class="toggle" for="chk13"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk14">
                                                    <label class="toggle" for="chk14"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk15">
                                                    <label class="toggle" for="chk15"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk16">
                                                    <label class="toggle" for="chk16"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk17">
                                                    <label class="toggle" for="chk17"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk18">
                                                    <label class="toggle" for="chk18"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk19">
                                                    <label class="toggle" for="chk19"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk20">
                                                    <label class="toggle" for="chk20"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk21">
                                                    <label class="toggle" for="chk21"></label>
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- panel -->
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-left">1 - 20 of 568</div>
                                    </div>
                                    <div class="col-5">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-gradient" type="button"><i class="fa fa-angle-left"></i>
                                            </button>
                                            <button class="btn btn-dark" type="button"><i class="fa fa-angle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->

@endsection
