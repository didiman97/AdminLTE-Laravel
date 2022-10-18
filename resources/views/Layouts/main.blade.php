
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 {{ isset($title) ?  ' | '.$title : '' }} </title>

  <!-- ./Css Include -->
  @include('Layouts.inc.ext-css')
  @stack('css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
  <!-- Navbar Include -->
    @include('Layouts.inc.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
    @include('Layouts.inc.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @yield('content-header')
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      @yield('content')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('Layouts.inc.footer')


</div>
<!-- ./wrapper -->

<!-- ./Java script -->
@include('Layouts.inc.ext-js')
@stack('js')
</body>
</html>
 