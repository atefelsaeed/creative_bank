@include('layouts.head')
@include('layouts.header')
@include('layouts.sidebar')
@yield('content')
@include('sweetalert::alert')
@include('layouts.footer')