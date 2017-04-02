<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- METADATA --> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ Seo::get('description') }}" />
    <meta name="keywords" content="{{ Seo::get('keywords') }}" />
    @include('laravel-seo::meta-facebook')
    @include('laravel-seo::meta-twitter')
    
    <!-- FAVICON -->    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicon/manifest.json">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    
    <!-- STYLESHEETS --> 
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
       
    <!-- CSRF Token -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(), ]) !!}; </script>   
</head>
    
<body data-spy="scroll" data-target="#sitenav">
    @component('components.analytics') @endcomponent
    @include('laravel-seo::sd-organization')
	@include('laravel-seo::sd-local-business')
	@include('laravel-seo::sd-website')
	@include('laravel-seo::sd-breadcrumblist')
    
    <div id="app">
            <div id="home"></div>
            <!-- Navigation -->
            @component('components.navigation') @endcomponent
            <br><br><br>

            <!-- Introduction Us -->
            @component('components.intro') @endcomponent 
            <div id="about"></div>
            <br><br><br>

            <!-- About Us -->
            @component('components.about') @endcomponent 
            <div id="works"></div>
            <br><br><br>

            <!-- How it Works -->
            @component('components.works') @endcomponent 
            <br><br>

            <!-- Contact Us -->
            @component('components.contact') @endcomponent 
            <br><br><br>

            <!-- Meet the Founders -->
            @component('components.founders') @endcomponent 
            <br><br><br>

            <!-- Footer -->
            @component('components.footer') @endcomponent 
    </div>
    
    <!-- SCRIPTS -->
    <script src="{{ asset('/js/app.js') }}"></script>
 @include('sweet::alert')
</body>
</html>