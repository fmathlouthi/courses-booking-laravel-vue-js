<template>
  <nav id="header" class="fixed w-full z-30 top-0 text-white" @click="toggleDropDown">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <router-link to="/" class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
          <!--Icon from: http://www.potlabicons.com/ -->
          <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="198.000000pt" height="57.000000pt" viewBox="0 0 198.000000 57.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,57.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M239 559 c-90 -13 -180 -83 -217 -168 -21 -48 -20 -165 0 -213 25
-56 92 -123 151 -149 109 -47 237 -20 318 68 56 61 72 104 72 188 0 82 -16
126 -69 185 -65 71 -156 104 -255 89z m153 -47 c42 -19 108 -77 108 -95 0 -5
-20 -7 -45 -5 -32 4 -59 16 -92 42 -62 48 -88 54 -132 30 -44 -23 -59 -54 -67
-133 l-7 -60 -38 42 c-50 55 -52 91 -5 136 70 68 183 86 278 43z m-57 -62 c2
-4 -15 -5 -39 -3 -38 5 -48 2 -70 -20 -14 -14 -26 -22 -26 -17 0 42 56 74 102
58 15 -6 30 -13 33 -18z m113 -57 c52 -7 54 -18 5 -27 -64 -10 -113 -7 -113 7
0 22 24 38 45 32 11 -4 39 -9 63 -12z m77 -64 c0 -34 -38 -51 -101 -44 -35 4
-63 1 -88 -9 -39 -16 -41 -15 -26 15 15 28 63 49 112 50 24 0 52 4 63 9 29 12
40 7 40 -21z m-399 -96 c7 -40 -16 -73 -51 -73 -17 0 -25 9 -33 39 -7 21 -12
51 -12 67 0 27 1 27 15 8 9 -12 13 -13 11 -4 -2 8 -7 29 -11 45 l-6 30 40 -39
c25 -25 43 -53 47 -73z m394 -3 c0 -10 -30 -29 -75 -47 -25 -10 -27 -12 -8
-12 12 -1 34 4 49 9 15 6 28 9 30 7 8 -8 -70 -80 -100 -93 -36 -15 -20 -19 19
-4 38 15 22 -6 -23 -29 -67 -33 -89 -34 -108 -5 -22 32 -34 107 -21 129 21 38
69 55 155 55 46 0 82 -4 82 -10z m-287 -27 c34 -7 30 -27 -6 -31 -33 -4 -67
14 -67 35 0 11 6 14 23 9 12 -4 35 -9 50 -13z"/>
<path d="M1920 391 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0
-10 -4 -10 -9z"/>
<path d="M692 354 c-39 -27 -23 -78 31 -97 10 -4 16 -11 12 -17 -4 -6 -13 -5
-25 2 -15 10 -22 10 -32 0 -16 -16 17 -52 47 -52 40 0 69 53 47 87 -4 6 -20
17 -35 22 -16 6 -25 15 -22 21 4 6 13 5 25 -2 15 -10 22 -10 32 0 9 9 7 16 -7
32 -22 24 -43 25 -73 4z"/>
<path d="M817 364 c-4 -4 -7 -35 -7 -69 0 -51 4 -65 23 -83 13 -12 32 -22 43
-22 25 0 64 27 64 45 0 22 -18 27 -42 11 -16 -11 -25 -13 -35 -4 -20 17 -16
55 7 61 29 7 25 31 -7 48 -16 7 -31 15 -34 16 -3 2 -8 0 -12 -3z"/>
<path d="M1458 359 c-2 -6 -19 -13 -38 -14 -38 -3 -80 -43 -80 -76 0 -11 13
-34 29 -50 26 -25 36 -29 78 -27 l48 3 0 85 c0 71 -3 85 -16 88 -10 2 -19 -2
-21 -9z m-8 -78 c7 -15 6 -24 -6 -36 -9 -9 -21 -14 -27 -12 -18 6 -31 33 -24
51 9 22 44 20 57 -3z"/>
<path d="M1030 343 c-59 -21 -77 -86 -35 -128 33 -34 70 -32 107 5 24 25 29
36 23 58 -11 46 -58 78 -95 65z m48 -69 c2 -11 -3 -26 -11 -33 -29 -24 -70 17
-46 46 17 20 53 12 57 -13z"/>
<path d="M1210 343 c-56 -21 -70 -96 -24 -132 35 -28 69 -26 99 4 40 39 32 96
-16 120 -30 16 -35 17 -59 8z m50 -47 c0 -2 3 -11 6 -19 9 -23 -24 -49 -47
-37 -19 10 -26 40 -12 53 7 8 53 10 53 3z"/>
<path d="M1537 344 c-4 -4 -7 -31 -7 -59 0 -67 26 -94 88 -93 l43 0 -3 77 c-2
60 -6 76 -18 76 -11 0 -16 -14 -18 -52 -5 -84 -48 -79 -54 6 -3 42 -16 60 -31
45z"/>
<path d="M1701 337 c-9 -11 -6 -20 10 -41 l20 -26 -21 -30 c-21 -30 -20 -50 4
-50 8 0 21 10 30 23 l16 22 16 -22 c9 -13 22 -23 30 -23 24 0 25 20 4 50 l-21
30 20 26 c16 21 19 30 10 41 -10 11 -16 10 -36 -8 l-23 -22 -23 22 c-20 18
-26 19 -36 8z"/>
</g>
</svg>
        
        </router-link>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle"
                class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
          </svg>
        </button>
      </div>
      <!-- main menu -->
       <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
            <router-link to="/" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">
              HOME
            </router-link>
          </li>
           <li class="mr-3">
            <router-link to="/aboutus" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">
              ABOUT
            </router-link>
          </li>
           <li class="mr-3">
            <router-link to="/aboutus" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">
              HELP
            </router-link>
          </li>
           <li class="mr-3">
            <router-link to="/contactus" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">
              CONTACT US
            </router-link>
          </li>
          <li class="mr-3">
            <router-link to="/multiSteps" class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">
              Multi Steps
            </router-link>
          </li>
        </ul>
    
      </div>
      <!-- main menu -->
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
         <!-- <li class="mr-3">
           <SwitchLang  :initLang="initLang" :options="options" />
          </li>
          <li class="mr-3">
         <VueSelectCurrency :preSelected="'Nigerian Naira'" :displayType="'short'"></VueSelectCurrency>
          </li>-->
       <li class="ml-2 lg:ml-4 relative inline-block" >
         <router-link to="/checkoutcourseweekly" >
               <div v-if="itemsInBasket" class="absolute -top-1 right-0 z-10 bg-yellow-400 text-xs font-bold px-1 py-0.5 rounded-sm">{{ itemsInBasket }}</div>
              <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" ><path fill="currentColor" d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"></path></svg>
            </router-link>
          </li>
          <li class="ml-2 lg:ml-4 relative inline-block" v-if="!isLoggedIn">
          <a href="/admin" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75" target="_blank">
          Sign UP / LOGIN
        </a>
          </li>
           <li class="ml-2 lg:ml-4 relative inline-block" v-if="isLoggedIn">
          <a href="/admin" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75" target="_blank">
          Account
        </a>
          </li>
        </ul>
        
      </div>
    </div>

    <hr class="border-b border-gray-100 opacity-25 my-0 py-0"/>
  </nav>
</template>

<script>
//import SwitchLang from "vue-switch-lang";
//import VueSelectCurrency from "./SelectCurrency.vue"
import { mapState, mapGetters } from "vuex";
  export default {
    components: {
    //SwitchLang,
    //VueSelectCurrency
  }, 
  data() {
    return {
      initLang: {
        title: "en",
        flag: "gb"
      },
      options: [
        {
          title: "en",
          flag: "gb"
        },
        {
          title: "de",
          flag: "de"
        },
        {
          title: "fa",
          flag: "ir"
        }
      ]
    };
  },
  computed: {
    ...mapState({
      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({
      itemsInBasket: "itemsInBasket"
    }),
  },
    methods: {
      toggleDropDown(event) {
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        const navMenuDiv = document.getElementById("nav-content");
        const navMenu = document.getElementById("nav-toggle");

        const target = (event && event.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }

        function checkParent(t, elm) {
          while (t.parentNode) {
            if (t == elm) {
              return true;
            }
            t = t.parentNode;
          }
          return false;
        }
      }
    }
  }
</script>
<style>
.multiselect__option--selected {
  background-color: red;
}

.multiselect__option--highlight {
  background-color: green;
  background: green;
}
.w-full.container.mx-auto.flex.flex-wrap.items-center.justify-between.mt-0.py-2 {
    background: #fff;
    border-radius: 25px;
    padding-left: 10px;
    padding-right: 10px;
}
</style>
