<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Leadership Event HTML5 Bootstrap v5 Template</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">

        <link href="/frontend/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/frontend/css/templatemo-leadership-event.css" rel="stylesheet">
        
</head>
    
<body>

  <main>
      @include('layout.inc.users.navbar')
      @yield('breadcrumbs')
      @yield('content')
      @include('pages.index') 
      @include('layout.inc.users.footer')
  </main>
@stack('scripts')
  <script>
      $(document).ready(function() {
          toastr.options.timeOut = 10000;
          @if (Session::has('error'))
              toastr.error('{{ Session::get('error') }}');
          @elseif(Session::has('success'))
              toastr.success('{{ Session::get('success') }}');
          @endif
      });

  </script>

<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.sticky.js"></script>
<script src="/frontend/js/click-scroll.js"></script>
<script src="/frontend/js/custom.js"></script>
  
</body>
</html>
