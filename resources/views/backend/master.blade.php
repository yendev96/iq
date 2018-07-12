<!DOCTYPE html>
<html>
<head>
    @include('backend.includes.head')
</head>
<body>

    <nav class="left-menu" left-menu>
        @include('backend.includes.aside')
    </nav>
    <nav class="top-menu">
        @include('backend.includes.header')
    </nav>

    <section class="page-content">
        <div class="page-content-inner">

            <!-- Dashboard -->
            <div class="dashboard-container">
                <div class="row">
                 @yield('content')
             </div>
         </div>
         <!-- End Dashboard -->
     </div>
 </section>



 @yield('script')
</body>
</html>