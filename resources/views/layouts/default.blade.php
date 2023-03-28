<!doctype html>
<html class="no-js" lang="fr">
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="main-wrapper">
   <header class="header-area">
       @include('includes.header')
   </header>
   
    @yield('content')
 
   <span class="footer-part">
       @include('includes.footer')
   </span>
</div>
</body>
</html>