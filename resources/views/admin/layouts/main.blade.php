<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        @include('admin.layouts.partials.css')
    </head>
    <body class="sb-nav-fixed">
    @include('admin.layouts.partials.nav')
        <div id="layoutSidenav">
            @include('admin.layouts.partials.aside')
            <div id="layoutSidenav_content">
                <main class="p-5 mt-3">
              @yield('content')
                </main>
                @include('admin.layouts.partials.footer')
            </div>
        </div>
        @include('admin.layouts.partials.js')
    </body>
</html>
