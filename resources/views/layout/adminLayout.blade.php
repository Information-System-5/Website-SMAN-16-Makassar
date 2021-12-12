<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Paraga Scout</title>
        @stack('prepend-style')
        @include('includes.admin.style')
    </head>
    <body>
        @include('includes.admin.navbar')
        {{-- @include('includes.admin.sidenav') --}}
        <div id="layoutSidenav">
            @include('includes.admin.sidenav')
            <div id="layoutSidenav_content">
                <main>
                    @yield('main')
                </main>
                @include('includes.admin.footer')
            </div>
        </div>
        @yield('content')
        @include('includes.admin.script')
        @stack('addon-script')
    </body>
</html>