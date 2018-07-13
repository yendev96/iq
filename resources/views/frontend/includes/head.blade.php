<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title and Description -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">

<!-- Open Graph data -->
<meta property="og:locale" content="en_US" />
<meta property="og:title" content=">@yield('title')"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="@yield('url')"/>
<meta property="og:image" content="https://maxconverter.net/img/favicons/favicon-260p.png"/>
<meta property="og:image:width" content="260"/>
<meta property="og:image:height" content="260"/>
<meta property="og:site_name" content="Test IQ Online"/>
<meta property="og:description" content="@yield('description')"/>

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="@yield('description')">
<meta name="twitter:image" content="https://maxconverter.net/img/favicons/favicon-260p.png">
<meta name="twitter:image:src" content="https://maxconverter.net/img/favicons/favicon-260p.png">
<meta name="twitter:url" content="@yield('url')">

<!-- Css -->
<link rel="stylesheet" href="{{asset('/public/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/public/frontend/css/style.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

