<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    @include('client.layouts.partials.css')
</head>

<body>
    @include('client.layouts.partials.header')

    <section class="container">

        @include('client.layouts.partials.nav')

        @yield('content')

    </section>

    @include('client.layouts.partials.footer')

    @include('client.layouts.partials.js')

</body>

</html>