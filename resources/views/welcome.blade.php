<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Find tech jobs and companies in the Bay Area.">
        <meta name="keywords" content="Talent acquisition, job hunting, startups, San Francisco Bay Area, Silicon Valley">
        <meta name="author" content="Connor Leech">


        <title>STOODUX</title>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="{{ mix('/frontapp/css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
        <style>
      .gradient {
        background: linear-gradient(90deg, #c5312d 0%, #006983 100%);
}
      
      .gradient1 {
        background: #ECF6F8 ;
      }
    </style>
    </head>
    <body>

        <div id="app" class="leading-normal tracking-normal text-white gradient1">
            <nav-bar-component></nav-bar-component>

            <router-view></router-view>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=AbAduUWN2Ex6BkjyekZMl-xeViXp85v9KlotMcjRvkiJ2QUz3c1KJnOTbj6H6-ye6dRgY83V8FZx__s6"></script>
        <script src="{{ mix('/frontapp/js/app.js') }}" type="text/javascript" charset="utf-8"></script>
    </body>

</html>
