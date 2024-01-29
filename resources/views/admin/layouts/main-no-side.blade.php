@include('admin.layouts.header')
{{-- @include('admin.layouts.sidebar') --}}
@include('admin.layouts.starter')

<div class="content">
    <div class="container-fluid">
        @yield('content')
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@include('admin.layouts.footer')
