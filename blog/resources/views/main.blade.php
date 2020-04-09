@include('partials._head')
<body>
@include('partials._nav')
<div class="container">
    @include('partials._session')
    @yield('content')
</div>
@include('partials._footer')