<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="@if(Request::segment(1) == 'announcements') active @endif" href="{{url('/announcements')}}"><i class="si si-bell"></i><span class="sidebar-mini-hide">Announcements</span></a>
        </li>
        <li>
            <a class="@if(Request::segment(1) == 'dashboard') active @endif" href="{{url('/dashboard')}}"><i class="si si-pie-chart"></i><span class="sidebar-mini-hide">Dashboard</span></a>
        </li>
        @hasrole('corporate')
        <li>
            <a class="@if(Request::segment(1) == 'ideas') active @endif" href="{{url('/ideas')}}"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Ideas</span></a>
        </li>
        @endhasrole
        @hasrole('startup')
        <li>
            <a class="@if(Request::segment(1) == 'challenges') active @endif" href="{{url('/challenges')}}"><i class="si si-compass"></i><span class="sidebar-mini-hide">Challenges</span></a>
        </li>
        @endhasrole
        @hasrole('corporate')
        <li>
            <a class="@if(Request::segment(1) == 'startups') active @endif" href="{{url('/startups')}}"><i class="si si-rocket"></i><span class="sidebar-mini-hide">Startups</span></a>
        </li>
        @endhasrole
        @hasrole('startup')
        <li>
            <a class="@if(Request::segment(1) == 'corporates') active @endif" href="{{url('/corporates')}}"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Corporates</span></a>
        </li>
        @endhasrole
        @hasrole('admin')
        <li>
            <a class="@if(Request::segment(1) == 'verifications') active @endif" href="{{url('/verifications')}}"><i class="si si-check"></i><span class="sidebar-mini-hide">Verifications</span></a>
        </li>
        @endhasrole
        @hasrole('admin')
        <li>
            <a class="@if(Request::segment(1) == 'tags') active @endif" href="{{url('/tags')}}"><i class="si si-tag"></i><span class="sidebar-mini-hide">Tags</span></a>
        </li>
        @endhasrole
        @hasrole('admin')

        @else
        <li class="@if(Request::segment(1) == 'my-account') open @endif">
            <a class="nav-submenu @if(Request::segment(1) == 'my-account') active @endif" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">My Account</span></a>
            <ul>
                @hasrole('startup')
                <li>
                    <a class="@if(Request::segment(2) == 'ideas') active @endif" href="{{url('/my-account/ideas')}}">Ideas</a>
                </li>
                @endhasrole
                @hasrole('corporate')
                <li>
                    <a class="@if(Request::segment(2) == 'challenges') active @endif" href="{{url('/my-account/challenges')}}">Challenges</a>
                </li>
                @endhasrole
            </ul>
        </li>
        @endhasrole
        <li>
            <a class="@if(Request::segment(1) == 'support') active @endif" href="{{url('/support')}}"><i class="si si-earphones"></i><span class="sidebar-mini-hide">Support</span></a>
        </li>
    </ul>
</div>