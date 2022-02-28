<template>
  <div id="slideshow" class="clearfix">
    <div class="inner">
      <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
      <div class="row ApRow" style="">
        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn">
          <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
          <div id="slideshow-form_1505172328162442" class="ApSlideShow">
            <div
              class="bannercontainer banner-fullwidth"
              style="padding: 0px; margin: 0px"
            >
              <div class="iview iview-group-3 iview-hover" style="height: auto">
                <div
                  class="iviewSlider"
                  style="
                    position: relative;
                    transform-origin: 0px 0px;
                    background: url('https://stoodux.com/themes/leo_ecogreen/img/modules/leoslideshow/PICTURE-1.jpg')
                      0% 0% / 100% no-repeat;
                  "
                >
                  <!-- SLIDE IMAGE BEGIN -->
                  <div
                    class="slide_config d-flex justify-content-center"
                    style="width: auto; display: block"
                  >
                    <div
                      class="tp-caption white d-flex justify-content-center"
                      style="opacity: 1; top: 280px; width: auto; height: 29px"
                    >
                      <div
                        class="caption-contain"
                        style="
                          position: relative;
                          width: auto;
                          height: 29px;
                          opacity: 1;
                          top: 0px;
                          left: 0px;
                        "
                      >
                        <!-- LAYER TEXT BEGIN -->
                        Studying abroad made easy
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>
                    </div>

                    <div
                      class="tp-caption big_white d-flex justify-content-center"
                      style="opacity: 1; top: 318px; width: auto; height: 43px"
                    >
                      <div
                        class="caption-contain"
                        style="
                          position: relative;
                          width: 946px;
                          height: 43px;
                          opacity: 1;
                          top: 0px;
                          left: 0px;
                        "
                      >
                        <!-- LAYER TEXT BEGIN -->
                        We've got all the advice and the best deals just for
                        you!
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>
                    </div>
                    <div
                      class="
                        d-flex
                        flex-row
                        justify-content-center
                        align-items-center
                      "
                      style="height: 100px"
                    >
                      <div class="p-2">
                        <div
                          class="tp-caption data-link btn btn-more p-2"
                          style="
                            opacity: 1;
                            left: 40%;
                            top: 415px;
                            width: 159px;
                            height: 42px;
                          "
                        >
                          <div
                            class="caption-contain"
                            style="
                              position: relative;
                              width: 159px;
                              height: 42px;
                              opacity: 1;
                              top: 0px;
                              left: 0px;
                            "
                          >
                            <!-- LAYER TEXT BEGIN -->
                            discover more
                            <!-- LAYER TEXT END -->

                            <!-- LAYER IMAGE END -->

                            <!-- LAYER VIDEO END -->
                          </div>
                        </div>
                      </div>
                      <div class="p-2">
                        <div
                          class="
                            btn-danger
                            tp-caption
                            data-link
                            btn btn-outline1
                            p-2
                          "
                          style="
                            opacity: 1;
                            left: 53%;
                            top: 415px;
                            width: 122px;
                            height: 42px;
                          "
                        >
                          <div
                            class="caption-contain"
                            style="
                              position: relative;
                              width: 122px;
                              height: 42px;
                              opacity: 1;
                              top: 0px;
                              left: 0px;
                            "
                          >
                            <!-- LAYER TEXT BEGIN -->
                            book now
                            <!-- LAYER TEXT END -->

                            <!-- LAYER IMAGE END -->

                            <!-- LAYER VIDEO END -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- SLIDE IMAGE END -->
                </div>
                <div
                  class="iview-timer paused"
                  style="display: none; opacity: 0.5; top: 10px; right: 10px"
                  title="Play"
                >
                  <div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="search-top-fix ApRow has-bg bg-boxed"
        data-bg=" #076F89 no-repeat"
        style="background: #076f89 no-repeat"
      >
        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn">
          <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

          <div>
            <div class="extsearch-home">
              <div class="">
                <div class="">
                  <b-card no-body class="search-tabs clearfix">
                    <b-tabs card class="tab-btn-wrapper" align="center">
                      <b-tab title="Language" active>
                        <b-card-text>
                          <h4 class="title-widgets">
                            Search our language courses offering
                          </h4></b-card-text
                        >

                        <div class="tab-content-bg">
                          <div class="col-xs-12">
                            <div class="container">
                              <div class="search-tab-content">
                                <div class="" id="hotels-tab">
                                  <div id="wkextsearchform">
                                    <input
                                      type="hidden"
                                      value="22"
                                      name="firstlevel"
                                      id="firstlevel"
                                    />
                                    <div class="col-lg-3">
                                      <label class="tb-label"
                                        >I want to learn</label
                                      >
                                      <div class="form-row-home row-home1">
                                        <select
                                          required="required"
                                          class="select form-controle"
                                          id="secondlevel"
                                          name="secondlevel"
										  v-model="language"
                      					  @change="getCountries()"
                                        >
                                          <option  value="0">
                                            Select a Language
                                          </option>
                                           <option
												v-for="data in languages"
												:value="data.id"
												:key="'cc' + data.id"
											>
												{{ data.name }}
											</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-3">
                                      <label class="tb-label">Where</label>
                                      <div class="form-row-home row-home2">
                                        <select
                                          required="required"
                                          class="select form-controle"
                                          id="thirdlevel"
                                          name="thirdlevel"
                                          :disabled="!isFormValidcountry"
											v-model="country"
											@change="getCities()"
										  :class="{
														'opacity-65 cursor-not-allowed': !isFormValidcountry,
												  }"
                                        >
                                          <option value="0">
                                            Select a country
                                          </option>
										  <option
											v-for="data in countries"
											:value="data.id"
											:key="'cc' + data.id"
										>
											{{ data.name }}
										 </option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col-lg-3">
                                      <label class="tb-label">In</label>
                                      <div class="form-row-home row-home3">
                                        <select
                                          class="select form-controle"
                                          id="fourthlevel"
                                          name="fourthlevel"
                                           :disabled="!isFormValid"
											:class="{ 'opacity-65 cursor-not-allowed': !isFormValid }"
											aria-label="Default select example"
											v-model="city"
                                        >
                                          <option value="0">
                                            Select a city
                                          </option>
										  <option
											v-for="data in cities"
											:value="data.id"
											:key="'cc' + data.id"
										>
											{{ data.name }}
										</option>
                                        </select>
                                      </div>
                                    </div>


                                    <div class="buttsubmit">
                                      <button
                                        type="submit"
                                        id="search_button"
                                        name="sUBMITSEARCh"
                                        class="
                                          btn btn-outline-inverse
                                          col-lg-12
                                        "
										:disabled="!isFormValid"
                      :class="{ 'opacity-65 cursor-not-allowed': !isFormValid }"
                      @click.stop.prevent="submit()"
                                      >
                                        <span
                                          ><img
                                            src="https://stoodux.com/img/right-arrow-black-circular-button.png"
                                            width="30"
                                            height="30"
                                          />Search</span
                                        >
                                      </button>
                                    </div>

                                    <input
                                      type="hidden"
                                      name="orderby"
                                      value="position"
                                    />
                                    <input
                                      type="hidden"
                                      name="orderway"
                                      value="ASC"
                                    />
                                    <input
                                      type="hidden"
                                      id="token_security"
                                      value="852c1af2d5"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </b-tab>
                      <b-tab title="Pathway" class="tab-btn-wrapper">
                        <b-card-text>Tab contents 2</b-card-text>
                      </b-tab>
                      <b-tab title="Accommodations" class="tab-btn-wrapper">
                         <b-card-text>
                          <h4 class="title-widgets">
                            SEARCH OUR STUDENT HOUSING OFFERING
                          </h4></b-card-text
                        >

                        <div class="tab-content-bg">
                          <div class="col-xs-12">
                            <div class="container">
                              <div class="search-tab-content">
                                <div class="" id="hotels-tab">
                                  <div id="wkextsearchform">
                                    <input
                                      type="hidden"
                                      value="22"
                                      name="firstlevel"
                                      id="firstlevel"
                                    />
                                   
                                    <div class="col-lg-4">
                                      <label class="tb-label">Where</label>
                                      <div class="form-row-home row-home2">
                                        <select
                                          required="required"
                                          class="select form-controle"
                                          id="thirdlevel"
                                          name="thirdlevel"
											v-model="countryAccom"
											@change="getCitiesAccom()"
                                        >
                                          <option value="0">
                                            Select a country
                                          </option>
										  <option
											v-for="data in countriesaccom"
											:value="data.id"
											:key="'ccac' + data.id"
										>
											{{ data.name }}
										 </option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col-lg-4">
                                      <label class="tb-label">In</label>
                                      <div class="form-row-home row-home3">
                                        <select
                                          class="select form-controle"
                                          id="fourthlevel"
                                          name="fourthlevel"
                                           :disabled="!isFormValidaccom"
											:class="{ 'opacity-65 cursor-not-allowed': !isFormValidaccom }"
											aria-label="Default select example"
											v-model="cityaccom"
                                        >
                                          <option value="0">
                                            Select a city
                                          </option>
										  <option
											v-for="data in citiesaccom"
											:value="data.id"
											:key="'ccacoms' + data.id"
										>
											{{ data.name }}
										</option>
                                        </select>
                                      </div>
                                    </div>


                                    <div class="buttsubmit">
                                      <button
                                        type="submit"
                                        id="search_button"
                                        name="sUBMITSEARCh"
                                        class="
                                          btn btn-outline-inverse
                                          col-lg-12
                                        "
										:disabled="!isFormValidaccom"
                      :class="{ 'opacity-65 cursor-not-allowed': !isFormValidaccom }"
                      @click.stop.prevent="submitaccom()"
                                      >
                                        <span
                                          ><img
                                            src="https://stoodux.com/img/right-arrow-black-circular-button.png"
                                            width="30"
                                            height="30"
                                          />Search</span
                                        >
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </b-tab>
                      <b-tab title="Universities" class="tab-btn-wrapper">
                        <b-card-text>Tab contents 2</b-card-text>
                      </b-tab>
                    </b-tabs>
                  </b-card>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
        <div class="col-md-12 col-lg-12 ApColumn"></div>
      </div>
      <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
      <div class="wrapper" style="background: #ffffff no-repeat">
        <div class="container">
          <div
            class="
              row
              rea
              howitworks
              justify-content-center
              align-items-center
              ApRow
              has-bg
              bg-fullwidth-container
            "
            style="padding-top: 11px"
          >
            <h4 class="title_block">How it works</h4>
            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div class="col-md-12 col-lg-12 ApColumn">
              <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

              <p class="apdesc">
                Booking language courses, pathway programs and university
                degrees abroad has never been so easy! You can also book your
                accommodation at the same time if you wish.
              </p>
            </div>
            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div
              class="
                clearfix
                col-lg-4 col-md-4 col-sm-6 col-xs-12 col-sp-12
                ApColumn
              "
            >
              <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
              <div class="ApRawHtml block">
                <div class="reassurances text-center">
                  <div class="title">
                    <span
                      ><img
					  class="rounded mx-auto d-block"
                        src="https://stoodux.com/img/hand-gesture-1.png"
                        style="width: 20%"
                        alt=""
                    /></span>
                    <h4>Search</h4>
                  </div>
                  <div class="description">
                    Search through our offers of language courses, University
                    &amp; Pathway school programs and accommodation services
                    discounted up to 20%
                  </div>
                </div>
              </div>
            </div>
            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div
              class="
                clearfix
                col-lg-4 col-md-4 col-sm-6 col-xs-12 col-sp-12
                ApColumn
              "
            >
              <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
              <div class="ApRawHtml block">
                <div class="reassurances text-center">
                  <div class="title">
                    <span
                      ><img
					  class="rounded mx-auto d-block"
                        src="https://stoodux.com/img/search-engine.png"
                        style="width: 20%"
                        alt=""
                    /></span>
                    <h4>Book</h4>
                  </div>
                  <div class="description">
                    Easily and quickly book language courses, university &amp;
                    pathway school programs or sutdent housing from the comfort
                    of your home — without any expensive phone calls or hassle.
                  </div>
                </div>
              </div>
            </div>
            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div
              class="
                clearfix
                col-lg-4 col-md-4 col-sm-6 col-xs-12 col-sp-12
                ApColumn
              "
            >
              <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
              <div class="ApRawHtml block">
                <div class="reassurances text-center">
                  <div class="title">
                    <span
                      ><img
					  class="rounded mx-auto d-block"
                        src="https://stoodux.com/img/hand-gesture.png"
                        style="width: 20%"
                        alt=""
                    /></span>
                    <h4>Study</h4>
                  </div>
                  <div class="description">
                    Enjoy it and experience new cultures and places around the
                    world with stoodux.com.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <populardestinations />
    </div>
  </div>
</template>
<script>
import populardestinations from "./populardestinations.vue";

export default {
  components: {
    populardestinations,
  },
  data() {
    return {
      language: 0,
      languages: [],
      isFormValid: false,
      isFormValidcountry: false,
      country: 0,
      countries: [],
      city: 0,
      cities: [],
      countryAccom: 0,
      countriesaccom: [],
      cityaccom: 0,
      citiesaccom: [],
      isFormValidaccom: false,
    };
  },
  methods: {
    submit() {
      //if you want to send any data into server before redirection then you can do it here
      this.$router.push(
        `/searchcourses?language=${this.language}&city=${this.city}&country=${this.country}`
      );
    },
    getlanguages: function () {
      axios.get("/languages").then(
        function (response) {
          this.languages = response.data.data;
        }.bind(this)
      );
    },
    getCountries: function () {
      axios
        .get(`/countrybylanguage`, {
          params: {
            languageId: this.language,
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
        .get(`/citiesbycountry`, {
          params: {
            countryid: this.country,
          },
        })
        .then(
          function (response) {
            this.cities = response.data;
            this.isFormValid = true;
          }.bind(this)
        );
    },

    //accommodation data search
   submitaccom() {
      //if you want to send any data into server before redirection then you can do it here
      this.$router.push(
        `/searchaccommodation?city=${this.cityaccom}&country=${this.countryAccom}`
      );
    },
     getCountriesaccom: function () {
      axios
        .get(`/countriesaccommodation`)
        .then(
          function (response) {
            this.countriesaccom = response.data;
            
          }.bind(this)
        );
    },
    getCitiesAccom: function () {
      axios
        .get(`/citiesbycountryaccommodation`, {
          params: {
            countryid: this.countryAccom,
          },
        })
        .then(
          function (response) {
            this.citiesaccom = response.data;
            this.isFormValidaccom = true;
          }.bind(this)
        );
    },
  },

  created: function () {
    this.getlanguages();
    this.getCountriesaccom();
  },
};
</script>

<style scoped>
</style>

