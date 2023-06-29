@if(session()->has('msg_fail'))
    <div class="alert alert-danger alert-dismissible fade show mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button> <strong>oophs !</strong>  {{session()->get('msg_fail')}}</div>
@endif

@if(session()->has('msg_pass'))
    <div class="alert alert-success alert-dismissible fade show mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button> <strong>Great !</strong>  {{session()->get('msg_pass')}}</div>
@endif
