<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="image/x-icon" rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="description"
          content="{{ config('app.name') }} - Quickly search for contacts by name to find their phone numbers,
                   or search by phone number to find the corresponding name.
                   Simplify your contact management with our user-friendly web application. Try it now!">

    <title>{{ config('app.name') ?? 'Phonebook' }} - Efficient Contact Search by Name or Phone Number</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
<x-header/>

<main class="flex justify-center h-[calc(100vh-240px-108px)]">
    {{ $slot }}
</main>

<x-footer/>
</body>
</html>
