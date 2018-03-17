<!DOCTYPE html>
<html>
@include('layouts.part.head')
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  @include('layouts.part.header')
  @yield('content')
  @include('layouts.part.footer')
</div>
@include('layouts.part.script')
</body>
</html>