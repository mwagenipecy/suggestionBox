<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
{{--            <li class="nav-label"> <a href=""> Dashboard </a> </li>--}}

            <li>
                <a class="bg-white dashboard" href="{{route('user-dashboard')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope-letter menu-icon"></i> <span class="nav-text">Suggestions</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('view_my_suggestions')}}">My Suggestions</a></li>
                    <li><a href="{{route('view_other_suggestion')}}">Other Suggestions</a></li>
                    <li><a href="{{route('compose_new_suggestion')}}">Compose new</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
