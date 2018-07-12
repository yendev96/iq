<div class="logo-container">
    @if(session('success'))
    <div class="alert alert-success message">
        {{session('success')}}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger message">
        {{session('danger')}}
    </div>
    @endif
    
    <a href="{{url('/')}}" class="logo">
        <img src="{{asset('/public/backend')}}/assets/common/img/logo.png" alt="Clean UI Admin Template" />
        <!-- <img class="logo-inverse" src="{{asset('/public/backend')}}/assets/common/img/logo-inverse.png" alt="Clean UI Admin Template" /> -->
    </a>
</div>
<div class="left-menu-inner scroll-pane">
    <div class="header-aside">
        <span class="avatar avatar-aside">
            <a href="{{url('backend/user/profile', Auth::guard('web')->user()->id)}}" title=""><img src="{{asset('/public/backend')}}/assets/common/img/temp/avatars/1.jpg"></a>
        </span>
        <span class="id-aside-user">Hello : <a href="{{url('backend/user/profile', Auth::guard('web')->user()->id)}}" title="">{{Auth::guard('web')->user()->username}}</a></span>
    </div>
    <ul class="left-menu-list left-menu-list-root list-unstyled my-left-menu-list-root" style="margin:0">
        <li class="left-menu-list-active">
            <a class="left-menu-link" href="{{url('/backend')}}">
                <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                <span class="menu-top-hidden">Dashboard</span> Alpha
            </a>
        </li>
        <li>
            <a class="left-menu-link" href="{{url('backend/category')}}">
                <i class="left-menu-link-icon fa fa-folder"></i>Question Category
            </a>
        </li>
        <li>
            <a class="left-menu-link" href="{{url('backend/question')}}">
                <i class="left-menu-link-icon ionicons fa fa-question-circle"></i>Questions Manager
            </a>
        </li>
        
        <li>
            <a class="left-menu-link" href="{{url('backend/user')}}">
               <i class="left-menu-link-icon fa fa-users"></i>Users Manager
           </a>
       </li>
     <li>
        <a class="left-menu-link" href="{{url('backend/post')}}">
            <i class="left-menu-link-icon fa fa-file-text"></i>Post Manager
        </a>
    </li>
    <li>
        <a class="left-menu-link" href="{{url('backend/article')}}">
            <i class="left-menu-link-icon fa fa-folder"></i>Article Manager
        </a>
    </li>
    <!-- <li class="left-menu-list-submenu">
        <a class="left-menu-link" href="javascript: void(0);">
            <i class="left-menu-link-icon fa fa-file-text"></i>
            Post Manager
        </a>
        <ul class="left-menu-list list-unstyled sub-menu-aside">
            <li>
                <a class="left-menu-link" href="{{url('backend/post')}}">
                    - Post
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="{{url('backend/post')}}">
                    - Category Manager
                </a>
            </li>
        </ul>
    </li> -->
    <li>
        <a class="left-menu-link" href="{{url('backend/player')}}">
            <i class="left-menu-link-icon fa fa-play"></i>Player Manager
        </a>
    </li>
    <li>
        <a class="left-menu-link" href="{{url('backend/social')}}">
            <i class="left-menu-link-icon fa fa-globe"></i>Social Manager
        </a>
    </li>
    <li>
        <a class="left-menu-link" href="{{url('backend/setting')}}">
            <i class="left-menu-link-icon fa fa-cog"></i>Setting
        </a>
    </li>




</ul>
</div>