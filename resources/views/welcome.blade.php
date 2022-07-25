<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Stoodux</title>
  <meta name="generator" content="PrestaShop">
  <meta name="robots" content="index,follow">
  <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="icon" type="image/vnd.microsoft.icon" href="https://stoodux.com/img/favicon.ico?1598970584">
  <link rel="shortcut icon" type="image/x-icon" href="https://stoodux.com/img/favicon.ico?1598970584">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/global.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/autoload/highdpi.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/autoload/perfect-scrollbar.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/autoload/responsive-tables.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/product_list.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blockcategories/blockcategories.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blockcurrencies/blockcurrencies.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blocklanguages/blocklanguages.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blocknewsletter/blocknewsletter.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blockuserinfo/blockuserinfo.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blockwishlist/blockwishlist.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/productcomments/productcomments.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/appagebuilder/views/css/owl.carousel.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/appagebuilder/views/css/owl.theme.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/appagebuilder/views/css/styles.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/leoslideshow/views/css/typo/typo.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/leoslideshow/views/css/iView/iview.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/leoslideshow/views/css/iView/skin_4_responsive/style.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/contact-form.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/leoblog/assets/leoblog.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/blockcart/blockcart.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/responsive.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('frontapp/css/css/modules/appagebuilder/profiles/profile1448221242.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.css" integrity="sha512-ITS8GbPjCRA7c/PBl6Kqb9XjvQbKMBXpzEmpi7BgRwf6mUCySmHbF9opWfVUQvbdiYouDYxhxttWS+wyq4l+Ug==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="{{ mix('/frontapp/css/app.css') }}">
  <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />-->
 
  <style>
     #domMessage{
            display:none;
            z-index: 1011;
            cursor: wait;
            position:fixed;
            top:0;
            background:white;
            padding:2em;
            text-align:center;
            margin:0 auto;
            width:100%;
            height:auto;
        }
        [v-cloak] > * { display:none }
        [v-cloak]::before {
            content: " ";
            display: block;
            width: 16px;
            height: 16px;
            background-image: url('data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==');
            margin:0 auto;
            text-align:center;
        }
    .gradient {
      background: linear-gradient(90deg, #c5312d 0%, #006983 100%);
    }

    .gradient1 {
      background: #ECF6F8;
    }

    .extsearch-home {
      /*width:100%;
	border:1px solid transparent;
	background-color: transparent;
	-webkit-border-radius:20px !important;
	-moz-border-radius:20px !important;
	border-radius:20px !important;
	margin-top:25px;
	margin-bottom:25px;
	margin-left:0px;
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 0px;
	padding-bottom: 15px;
	box-sizing: border-box;
   	-moz-box-sizing: border-box;
   	-webkit-box-sizing: border-box;*/
    }

    /*
* Width of Filters: Combobox and input
*/
    #wkextsearchform .form-row-home {
      width: 100%;
    }

    @media (max-width: 1200px) {
      #wkextsearchform .form-row-home {
        width: 28.1%;
      }

      #wkextsearchform1 .form-row-home {
        width: 28.1%;
      }

    }

    @media all and (min-width:960px) and (max-width:1024px) {
      #wkextsearchform .form-row-home {
        width: 27.9%;
      }

      #wkextsearchform1 .form-row-home {
        width: 27.9%;
      }
    }

    @media all and (min-width:769px) and (max-width: 959px) {
      #wkextsearchform .form-row-home {
        width: 27.8%;
      }

      #wkextsearchform1 .form-row-home {
        width: 27.8%;
      }

    }

    #wkextsearchform .form-row-home,
    #wkextsearchform .form-row-column {
      background-color: transparent;
    }

    #wkextsearchform .highlight {
      font-family: "Poppins", sans-serif;
      /*border: 1px solid #000;*/
      background-color: ;
      color: #4f5f6f;
    }

    #wkextsearchform1 .form-row-home,
    #wkextsearchform1 .form-row-column {
      background-color: transparent;
    }

    #wkextsearchform1 .highlight {
      font-family: "Poppins", sans-serif;
      border: 1px solid #fff;
      background-color: ;
      color: #4f5f6f;
    }

    /*
* CSS Styles for Buttons
*/
    #wkextsearchform .btn-search {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      color: #FFFFFF;
      font-size: 14px;
      padding: 6px 8px 6px 8px;
      border: 1px solid #e6567a;
      background-color: #e6567a;
      font-family: ExoRegular;
      width: 100%;
      height: 36px;
    }

    #wkextsearchform1 .btn-search {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      color: #FFFFFF;
      font-size: 14px;
      padding: 6px 8px 6px 8px;
      border: 1px solid #e6567a;
      background-color: #e6567a;
      font-family: ExoRegular;
      width: 100%;
      height: 36px;
    }

    #wkextsearchform .btn-search:hover,
    #wkextsearchform .btn-search:focus,
    #wkextsearchform .btn-search:active,
    #wkextsearchform .btn-search.active {
      color: #FFFFFF;
      background: #ff3f64;
    }

    #wkextsearchform1 .reset_button {
      padding: 4px;
      border: 1px solid #eaeaea;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      background-color: #eaeaea;
    }

    #wkextsearchform1 .btn-search:hover,
    #wkextsearchform .btn-search:focus,
    #wkextsearchform .btn-search:active,
    #wkextsearchform .btn-search.active {
      color: #FFFFFF;
      background: #ff3f64;
    }

    #wkextsearchform .reset_button {
      padding: 4px;
      border: 1px solid #eaeaea;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      background-color: #eaeaea;
    }

    #wkextsearchform1 .reset_button {
      padding: 4px;
      border: 1px solid #eaeaea;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      background-color: #eaeaea;
    }


    @media (max-width: 768px) {
      #wkextsearchform .form-row-home {
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        padding-left: 0;
      }

      #wkextsearchform1 .form-row-home {
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        padding-left: 0;
      }

    }
  </style>
</head>

<body class="index hide-left-column hide-right-column lang_en  fullwidth  double-menu">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9PRSVK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="list">
    <!-- Header -->
    <div id="app">
      <index></index>
    </div>
  </section>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=AbAduUWN2Ex6BkjyekZMl-xeViXp85v9KlotMcjRvkiJ2QUz3c1KJnOTbj6H6-ye6dRgY83V8FZx__s6"></script>
  <script src="{{ mix('/frontapp/js/app.js') }}" type="text/javascript" charset="utf-8"></script>
  


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsdR7IYEPb95iQyI2qXoh13KB9QKRjMug&libraries=places" async defer></script>
</body>

</html>
