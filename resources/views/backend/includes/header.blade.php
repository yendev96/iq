<div class="menu-icon-container hidden-md-up">
        <div class="animate-menu-button left-menu-toggle">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu">
        <div class="quick-action" style="float: left;">
            <a href="{{url('backend/question/add')}}" class="btn btn-danger margin-inline"><i class="fa fa-plus"></i> Add Question</a>
            <a href="{{url('backend/category/add')}}" class="btn btn-danger margin-inline"><i class="fa fa-plus"></i> Add Category</a>
            <a href="{{url('backend/post/add')}}" class="btn btn-danger margin-inline"><i class="fa fa-plus"></i> Add Post</a>
            <a href="{{url('backend/article/add')}}" class="btn btn-danger margin-inline"><i class="fa fa-plus"></i> Add Article</a>
        </div>
        <div class="menu-user-block">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle my-dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="avatar" href="javascript:void(0);">
                        <img src="{{asset('/public/backend')}}/assets/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right my-dropdown-avatar" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="{{url('backend/user/profile', Auth::guard('web')->user()->id)}}"><i class="dropdown-icon icmn-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('backend/logout')}}"><i class="dropdown-icon icmn-exit"></i> Logout</a>
                </ul>
            </div>
        </div>
        
    </div>