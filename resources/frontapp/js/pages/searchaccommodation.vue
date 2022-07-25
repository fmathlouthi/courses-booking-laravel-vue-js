<template>
  <div>
    <navbarsecond />
    
    <section id="columns" class="columns-container">
      <brandcamp />
      <div class="container">
        <div class="row">
          <!-- Left -->
          <section id="left_column" class="column sidebar col-md-3">
            <div>
              <div id="categories_block_left" class="block">
                <h4 class="title_block">SEARCH ACCOMMODATION</h4>

                <div class="block_content" style="">
                  <div class="hero-banner">
                    <div id="main" class="col-sm-12 col-md-12">
                      <div>
                        <input
                          type="hidden"
                          value="22"
                          name="firstlevel"
                          id="firstlevel4"
                        />
                   

                        <div class="form-row-column">
                          <h5 class="booking-filters-title">Where</h5>

                          <select
                            class="select form-controle highlight"
                            id="thirdlevel4"
                            name="thirdlevel"
                            v-model="countrysearch"
                            @change="getCities()"
                          >
                            <option value="0">Select country</option>
                            <option
                              v-for="data in countries"
                              :value="data.id"
                              :key="'cc' + data.id"
                            >
                              {{ data.name }}
                            </option>
                          </select>
                        </div>

                        <div class="form-row-column">
                          <h5 class="booking-filters-title">In</h5>
                          <select
                            class="select form-controle highlight"
                            id="fourthlevel4"
                            name="fourthlevel"
                            :disabled="!isFormValid"
                            :class="{
                              'opacity-25 cursor-not-allowed': !isFormValid,
                            }"
                            v-model="citysearch"
                          >
                            <option value="0">Select city</option>
                            <option
                              v-for="data in cities"
                              :value="data.id"
                              :key="'cc' + data.id"
                            >
                              {{ data.name }}
                            </option>
                          </select>
                        </div>

                        <div class="button_vertical">
                          <div class="col-lg-12" id="wkextsearchform">
                            <button
                              type="submit"
                              id="search_button2"
                              name="sUBMITSEARCh"
                              class="
                                btn btn-outline-inverse
                                fa fa-search1
                                col-lg-12
                              "
                              :disabled="!isFormValid"
                              :class="{
                                'opacity-25 cursor-not-allowed': !isFormValid,
                              }"
                               v-on:click="submit()"
                            >
                              <span>Search</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="center_column" class="col-md-9">
            <p id="resetShow" style="display: none" class="alert alert-warning">
              <i class="icon-warning"></i>
              Please make a search by available filters or/and by keywords.
            </p>

            <div id="sortBy" class="content_sortPagiBar sidebar">
              <div id="categories_block_left1" class="block">
                <h4 class="title_block">Sort By</h4>
                <div class="block_content" style="">
                  <div class="sortPagiBar clearfix">
                    <div id="resetHidden" class="display pull-right">
                      <!--<div id="grid"><a rel="nofollow" href="#" title="Grid"><i class="fa fa fa-th"></i></a></div>-->
                      <div id="list" class="selected">
                        <a rel="nofollow" href="#" title="List"
                          ><i class="fa fa-list-ul"></i
                        ></a>
                      </div>
                    </div>

                    <form
                      id="productsSortForm"
                      action="https://stoodux.com/products-search?firstlevel=22&amp;secondlevel=44&amp;thirdlevel=45&amp;fourthlevel=&amp;sUBMITSEARCh=&amp;module=wkextsearch&amp;fc=module"
                      class="productsSortForm form-horizontal pull-left"
                    >
                      <label for="selectProductSort">Sort by :</label>

                      <div class="select">
                        <select
                          id="selectProductSort"
                          class="selectProductSort form-control"
                        >
                          <option value="position:asc" selected="selected">
                            Price
                          </option>
                          <option value="price:asc">Price: Lowest first</option>
                          <option value="price:desc">
                            Price: Highest first
                          </option>
                        </select>
                      </div>
                      <hr class="separation1" />
                      <div class="select">
                        <select
                          id="selectProductSort"
                          class="selectProductSort form-control"
                        >
                          <option value="position:asc" selected="selected">
                            SEARCH ACCOMMODATION
                          </option>
                          <option value="name:asc">
                            SEARCH ACCOMMODATION: A to Z
                          </option>
                          <option value="name:desc">
                            SEARCH ACCOMMODATION: Z to A
                          </option>
                        </select>
                      </div>
                    </form>

                    <!-- /Sort products -->

                    <!-- nbr product/page -->
                    <!-- /nbr product/page -->
                  </div>
                  <div class="top-pagination-content clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <h1 style="font-size: 36px; margin-top: 0px; font-weight: 700;">
                <span class="heading-counter">{{products.length}} results have been found.</span>
              </h1>
            </div>
            <div class="product_list list row profile-default">
              <div class="col-md-12" v-for="product in products" :key="product.id">
                <div
                  class="
                    ajax_block_product
                    col-sp-12
                    first-in-line first-item-of-tablet-line
                    last-item-of-mobile-line
                    col-xs-12
                  "
                >
                  <div class="product-container product-block">
                    <div class="row">
                      <div class="left-block col-md-4 col-sm-4">
                        <!-- @file modules\appagebuilder\views\templates\front\products\image_container -->
                        <div class="product-image-container image">
                          <a
                            class="product_img_link"
                            href="#"
                            title="ACCORD Paris"
                            itemprop="url"
                          >
                            <img
                              class="replace-2x img-responsive"
                              :src="product.featured_image[0].url"
                              alt="ACCORD Paris"
                              title="ACCORD Paris"
                              width="370"
                              height="235"
                              itemprop="image"
                            />
                          </a>

                          <a class="new-box" href="#">
                            <span
                              class="label-new product-label label-info label"
                              >New</span
                            >
                          </a>
                        </div>
                      </div>
                      <div class="right-block col-md-8 col-sm-8">
                        <div class="col1">
                          <div class="product-meta">
                            <!-- @file modules\appagebuilder\views\templates\front\products\reviews -->
                            <!-- @file modules\appagebuilder\views\templates\front\products\name -->
                            <h5 itemprop="name" class="name">
                              <a
                                class="product-name"
                                href="#"
                                :title="product.name"
                                itemprop="url"
                              >
                                {{product.name}} 
                              </a>
                            </h5>

                            <!-- @file modules\appagebuilder\views\templates\front\products\color -->

                            <div class="hook-reviews">
                              <div
                                class="comments_note product-rating"
                                itemprop="aggregateRating"
                                itemscope=""
                                itemtype="https://schema.org/AggregateRating"
                              >
                                <div class="star_content">
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <meta itemprop="worstRating" content="0" />
                                  <meta itemprop="ratingValue" content="0" />
                                  <meta itemprop="bestRating" content="5" />
                                </div>
                                <!--<span class="nb-comments"><span itemprop="reviewCount"></span> Review(s)</span>-->
                              </div>
                            </div>


                            <!-- @file modules\appagebuilder\views\templates\front\products\price -->
                            <!-- @file modules\appagebuilder\views\templates\front\products\view -->
                          </div>
                          <p class="location" style="display: flex;">
		                          <img src="http://stoodux.com/img/rf/15.png"> 
                              <span> {{ product.city.country.name }}</span>/ {{ product.city.name }}
                            </p>
                          

                          <div class="attribut">
                            <div class="tooltip2">
                              <span class="toolipAbout">About</span>
                            </div>
                          </div>
                          <hr class="separation1" />
                          <div class="featsize">
                            <div
                              v-for="feature in product.features"
                              :key="feature.id"
                            >
                              <div class="col-sm-2">
                                <div class="tooltip2">
                                  <img
                                    :src="feature.icon[0].thumbnail"
                                    :alt="feature.name"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col2">
                          <div class="box-buttons">
                            <div class="content_price">
                              <span class="col-sm-12 col-sp-12 from">
                                From
                              </span>

                              <span
                                class="price product-price col-sm-12 col-sp-12"
                              >
                                ${{ product.min_price }}
                              </span>

                              <span class="col-sm-12 col-sp-12 from"
                                >Per week
                              </span>
                            </div>
                            <div class="view">
                              <router-link
                          :to="{ path: '/singleacommodation/' + product.id }"
                             
                                class="
                                  button
                                  lnk_view
                                  exclusive
                                  btn btn-inverse
                                "
                                
                              >
                                <span>More Detail</span>
                                <i class="fa fa-long-arrow-right"></i>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="resetHidden" class="content_sortPagiBar">
              <div class="bottom-pagination-content clearfix">
                <!-- Pagination -->
                <div
                  id="pagination_bottom"
                  class="pagination clearfix pull-left"
                ></div>
                <div class="product-count pull-right">
                  Showing 1 - {{products.length}} of {{products.length}} items
                </div>
                <!-- /Pagination -->
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import navbarsecond from "../shared/components/NavBarsecond.vue";
import brandcamp from "../shared/components/brandcamp.vue";
import { TModal } from "vue-tailwind/dist/components";
export default {
  props: ["country", "city", "language"],
  components: {
    navbarsecond,
    TModal,
    brandcamp,
  },
  data: function () {
    return {
     
      isFormValid: false,
      isFormValidcountry: false,
      countrysearch: this.$route.query.country,
      countries: [],
      citysearch: this.$route.query.city,
      cities: [],
      showModalextra: false,
      showModalextra1: false,
      showModalsemester: false,
      showModalsemester1: false,
      prices: [],
      features: [],
      products: [],
      loading: true,
      selected: {
        prices: [],
        features: [],
        country:  this.$route.query.country,
        city:  this.$route.query.city,
      },
    };
  },
  mounted() {
    this.loadFeatures();
    this.loadPrices();
    this.loadProducts();
  },
  watch: {
    selected: {
      handler: function () {
        this.loadFeatures();
        this.loadPrices();
        this.loadProducts();
      },
      deep: true,
    },
  },
  methods: {
    submit: function () {
         this.selected.country= this.countrysearch;
        this.selected.city= this.citysearch;
      
      //if you want to send any data into server before redirection then you can do it here
     /* this.$router.push(
        `/searchcourses?language=${this.languagesearch}&city=${this.citysearch}&country=${this.countrysearch}`
      );*/
      axios
        .get("/prices", {
          params: _.omit(this.selected, "prices"),
        })
        .then((response) => {
          this.prices = response.data;
          this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
      axios
        .get("accommodatinsfilter", {
          params: this.selected,
        })
        .then((response) => {
          this.products = response.data.data;
          this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
        axios
        .get("CourseUniversityFeatures", {
          params: _.omit(this.selected, "features"),
        })
        .then((response) => {
          this.features = response.data.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    getCountries: function () {
      axios
        .get(`/countriesaccommodation`, {
          params: {
            languageId: this.languagesearch,
          },
        })
        .then(
          function (response) {
            this.countries = response.data;
            this.isFormValidcountry = true;
          }.bind(this)
        );
    },
    getCities: function () {
      axios
        .get(`/citiesbycountryaccommodation`, {
          params: {
            countryid: this.countrysearch,
          },
        })
        .then(
          function (response) {
            this.cities = response.data;
            this.citysearch = 0;
            this.isFormValid = true;
          }.bind(this)
        );
    },
    showModalextrafunction(model) {
      this.showModalextra = model;
      this.showModalextra1 = true;
    },
    showModalsemesterfunction(model) {
      this.showModalsemester = model;
      this.showModalsemester1 = true;
    },

    loadFeatures: function () {
      axios
        .get("CourseUniversityFeatures", {
          params: _.omit(this.selected, "features"),
        })
        .then((response) => {
          this.features = response.data.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    loadProducts: function () {
      axios
        .get("accommodatinsfilter", {
          params: this.selected,
        })
        .then((response) => {
          this.products = response.data.data;
          this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    loadPrices: function () {
      axios
        .get("/prices", {
          params: _.omit(this.selected, "prices"),
        })
        .then((response) => {
          this.prices = response.data;
          this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
  created: function () {
    this.getCountries();
    this.getCities();
  },
};
</script>
<style scoped>
#search_button2 {
  height: 35px;
  border-radius: 50px;
  background-color: #d63933;
  color: white;
}
.tooltip2 {
  position: relative;
  display: inline-block;
}
.featsize img {
  width: 50px !important;
}
.product-image-container.image {
  width: 70%;
}
</style>
