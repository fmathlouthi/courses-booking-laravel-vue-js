<template>
  <!-- Header -->
  <header id="header" class="header12">
    <section class="header-container">
      <div id="header-main">
        <div id="header_content">
          <div class="inner">
            <div id="topbar">
              <div class="sliderbar-menu-controller">
                <span>
                  <i class="fa fa-bars"></i>
                </span>
              </div>
              <div class="container">
                <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                <div
                  class="row ApRow has-bg bg-fullwidth-container"
                  data-bg=" #272727 no-repeat"
                  style=""
                >
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div
                    class="
                      col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12
                      ApColumn
                    "
                  >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                    <div class="header_user_info">
                      <!--<div data-toggle="dropdown" class="popup-title"><a href="#"><i class="fa fa-user"></i><span>Account</span></a></div>-->
                      <div class="set-2">
                        <ul class="links">
                          <li>
                            <a
                              href="https://stoodux.com/my-account"
                              class="myaccount"
                              title="My account"
                            >
                              <i class="fa fa-user"></i
                              ><span>Sign up / Login</span>
                            </a>
                          </li>
                
                        </ul>
                      </div>
                    </div>
                    <div class="popup-over e-scale">
                      <div  style=" padding: 0 20px 0 0; ">
                         
                         <router-link to="/checkoutcourseweekly" >
             <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span v-if="itemsInBasket"  class="badge badge-pill badge-danger">{{ itemsInBasket }}</span>
             </router-link>
                      </div>
                      </div>
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                    <!-- Block languages module -->
                    <div class="popup-over e-scale">
                      <div class="popup-title" data-toggle="dropdown">
                        <a href="#"
                          ><i class="fa fa-globe"></i
                          ><span class="hidden-xs">Languages: </span>

                          <img
                            src="https://stoodux.com/img/l/1.jpg"
                            alt="en"
                            width="16"
                            height="11"
                            style=" display: initial; "
                          />
                        </a>
                      </div>
                      <div class="popup-content">
                        <div id="languages-block-top" class="languages-block">
                          <ul id="first-languages" class="languages-block_ul">
                            <li class="selected">
                              <span
                                ><img
                                  src="https://stoodux.com/img/l/1.jpg"
                                  alt="en"
                                  width="16"
                                  height="11"
                                  style=" display: initial; "
                                />&nbsp;English</span
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!-- /Block languages module -->

                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                    <!-- Block currencies module -->

                    <div class="popup-over e-scale">
                      <div data-toggle="dropdown" class="popup-title">
                        <a href="#">
                          <span class="curr-iso"> $ </span>
                          <span class="hidden-xs">Currency: </span>
                          USD
                        </a>
                      </div>
                      <div class="popup-content">
                        <div id="currencies-block-top">
                          <form
                            id="setCurrency"
                            action="https://stoodux.com/"
                            method="post"
                          >
                            <input
                              type="hidden"
                              name="id_currency"
                              id="id_currency"
                              value=""
                            />
                            <input
                              type="hidden"
                              name="SubmitCurrency"
                              value=""
                            />

                            <ul
                              id="first-currencies"
                              class="currencies_ul toogle_content"
                            >
                              <li class="selected">
                                <a
                                  href="javascript:setCurrency(1);"
                                  rel="nofollow"
                                  title="Dollar"
                                >
                                  $ Dollar
                                </a>
                              </li>
                              <li>
                                <a
                                  href="javascript:setCurrency(2);"
                                  rel="nofollow"
                                  title="Euro"
                                >
                                  € Euro
                                </a>
                              </li>
                            </ul>
                          </form>
                        </div>
                      </div>
                    </div>

                    <!-- /Block currencies module -->

                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
                  </div>
                </div>
              </div>
            </div>
            <div class="topnav">
              <div class="container">
                <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                <div class="row ApRow" style="">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div class="col-md-6 col-lg-3 ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

                    <div class="logoindex">
                      <a href="http://stoodux.com/" title="Stoodux">
                        <img
                          class="logo img-responsive"
                          src="https://stoodux.com/img/leo-ecogreen-logo-1526892520.jpg"
                          alt="Stoodux"
                          width="195"
                          height="177"
                        />
                      </a>
                    </div>
                  </div>
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div class="col-md-6 col-lg-9 ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                    <div id="leo-megamenu" class="clearfix">
                      <nav id="cavas_menu" class="sf-contener leo-megamenu">
                        <div role="navigation">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                            <button
                              type="button"
                              class="navbar-toggle btn-outline-inverse"
                              data-toggle="collapse"
                              data-target=".navbar-ex1-collapse"
                            >
                              <span class="sr-only">Toggle navigation</span>
                              <span class="fa fa-bars"></span>
                              <span class="title-menu">Menu</span>
                            </button>
                          </div>
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div
                            id="leo-top-menu"
                            class="collapse navbar-collapse navbar-ex1-collapse"
                          >
                            <ul class="nav navbar-nav megamenu">
                              <li class="active">
                                <a
                                  href="http://stoodux.com/"
                                  target="_self"
                                  class="has-category"
                                  ><span class="menu-title">Home</span></a
                                >
                              </li>
                              <li class="">
                                <a
                                  href="https://stoodux.com/content/4-about-us"
                                  target="_self"
                                  class="has-category"
                                  ><span class="menu-title">About</span></a
                                >
                              </li>
                              <li class="">
                                <a
                                  href="https://stoodux.com/faq"
                                  target="_self"
                                  class="has-category"
                                  ><span class="menu-title">Help</span></a
                                >
                              </li>
                              <li class="">
                                <a
                                  href="https://stoodux.com/contact-us"
                                  target="_self"
                                  class="has-category"
                                  ><span class="menu-title">Contact us</span></a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
</template>
<script>
import { mapState, mapGetters } from "vuex";
  export default {
    components: {
    //SwitchLang,
    //VueSelectCurrency
  }, 
  
  computed: {
    ...mapState({
      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({
      itemsInBasket: "itemsInBasket"
    }),
  },
    
    
  }
</script>
<style scoped>
#index #header {
  position: absolute !important;
  z-index: 9 !important;
  width: 100% !important;
  min-height: 145px !important;
  background: black !important;
  background: -moz-linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.7) 0%,
    rgba(0, 0, 0, 0) 100%
  ) !important;
  background: -webkit-linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.7) 0%,
    rgba(0, 0, 0, 0) 100%
  ) !important;
  background: -o-linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.7) 0%,
    rgba(0, 0, 0, 0) 100%
  ) !important;
  background: -ms-linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.7) 0%,
    rgba(0, 0, 0, 0) 100%
  );
  background: linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.7) 0%,
    rgba(0, 0, 0, 0) 100%
  ) !important;
}
</style>
