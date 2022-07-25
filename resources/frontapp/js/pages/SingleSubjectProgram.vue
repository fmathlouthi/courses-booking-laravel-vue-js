<template>
  <div>
    <navbarsecond />

    <section id="columns" class="columns-container">
      <div id="breadcrumb" class="clearfix">
        <!-- Breadcrumb -->

        <div class="breadcrumb">
          <div class="container">
            <a class="home" href="https://stoodux.com/" title="Return to Home">Home</a>
            <span class="navigation-pipe">&gt;</span>
            <span class="navigation_page"
              >Program<span class="navigation-pipe">&gt;</span>{{ product.name }}</span
            >
          </div>
        </div>

        <!-- /Breadcrumb -->
      </div>
      <div class="container">
        <div class="row">
          <!-- Center -->
          <section id="center_column" class="col-md-12">
            <div itemscope="" itemtype="https://schema.org/Product">
              <!--<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

</div>-->
              <div class="primary_block col-lg-12">
                <div class="container">
                  <div class="top-hr"></div>
                </div>

                <h1 class="page-heading bottom-indent">{{ product.name }}</h1>
                <!-- left infos-->
                <div
                  class="pb-left-column col-xs-12 col-sm-12 col-md-5 col-lg-5 pb-left-column1"
                >
                  <sliderimagesingle :photos="photos"></sliderimagesingle>

                  <!-- end image-block -->
                </div>
                <!-- end left infos-->
                <!-- center infos -->
                <div class="pb-center-column col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <h1 itemprop="name" style="font-size: 20px; font-weight: 600">
                    {{ product.name }}
                  </h1>
                  <h4 itemprop="name" style="font-size: 16px; font-weight: 500">
                    {{ name }}
                  </h4>
                  <!--  /Module ProductComments -->
                  <div class="socialsharing_product list-inline no-print">
                    <div class="media">
                      <span
                        class="title"
                        style="
                          float: left;
                          margin-right: 10px;
                          font-size: 14px;
                          font-weight: 600;
                          padding-top: 17px;
                        "
                        >Share</span
                      >
                      <div class="media-body" style="font-size: 2.2rem">
                        <b-icon
                          icon="facebook"
                          class="border rounded p-2"
                          variant="info"
                        ></b-icon>
                        <b-icon
                          icon="instagram"
                          class="border rounded p-2"
                          variant="info"
                        ></b-icon>
                        <b-icon
                          icon="linkedin"
                          class="border rounded p-2"
                          variant="info"
                        ></b-icon>
                        <b-icon
                          icon="twitter"
                          class="border rounded p-2"
                          variant="info"
                        ></b-icon>

                        <button
                          data-type="facebook"
                          type="button"
                          class="btn-facebook social-sharing"
                        >
                          <i class="fa fa-facebook"></i> <span>Share</span>
                        </button>
                        <button
                          data-type="twitter"
                          type="button"
                          class="btn-twitter social-sharing"
                        >
                          <i class="fa fa-twitter"></i> <span>Tweet</span>
                        </button>
                        <button
                          data-type="google-plus"
                          type="button"
                          class="btn-google-plus social-sharing"
                        >
                          <i class="fa fa-linkedin"></i> <span>Google+</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <p class="location"></p>

                  <!-- usefull links-->
                  <ul id="usefull_link_block" class="clearfix no-print list-inline">
                    <!--<li class="print">
            <a href="javascript:print();">
                Print
            </a>
        </li>-->
                  </ul>
                  <div id="short_description_block">
                    <h5>Description</h5>
                    <div
                      id="short_description_content"
                      class="rte align_justify"
                      itemprop="description"
                    >
                      <p>
                        <span v-html="description"></span>
                      </p>
                    </div>
                  </div>
                  <!-- end short_description_block -->
                  <div class="col-sm-12 feat">
                    <div v-for="feature in features" :key="feature.id">
                      <p>
                        <a href="#" title="Wi-Fi"
                          ><img
                            :src="feature.icon[0].thumbnail"
                            :alt="feature.name"
                            :title="feature.name"
                        /></a>
                        {{ feature.name }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="rightuniv">
                  <div class="set-2">
                    <router-link
                      :to="{ path: '/universityrequests/' + product.id }"
                      class="button btn-medium myaccount"
                      target="_blank"
                    >
                      <i class="fa fa-link"></i> <span>Apply to university</span>
                    </router-link>
                  </div>
                </div>
              </div>
              <!-- end center infos-->
            </div>
            <div class="pb-left-column col-xs-12 col-sm-12 col-md-9 col-lg-12">
              <div
                class="pb-left-column col-xs-12 col-sm-12 col-md-8 col-lg-8"
                style="width: 65%; background: #fff"
              >
                <badger-accordion>
                  <badger-accordion-item>
                    <template slot="header">ENTRY REQUIREMENTS</template>
                    <template slot="content">
                      <div
                        style="font-size: 18px; padding: 1.25rem"
                        v-html="product.entry_requirements"
                      ></div>
                    </template>
                  </badger-accordion-item>

                  <badger-accordion-item>
                    <template slot="header">MONTHS OF ENTRY</template>
                    <template slot="content">
                      <div
                        style="font-size: 18px; padding: 1.25rem"
                        v-html="product.months_of_entry"
                      ></div>
                    </template>
                  </badger-accordion-item>
                  <badger-accordion-item>
                    <template slot="header"> COURSE CONTENT</template>
                    <template slot="content">
                      <div
                        style="font-size: 18px; padding: 1.25rem"
                        v-html="product.course_content"
                      ></div>
                    </template>
                  </badger-accordion-item>
                  <badger-accordion-item>
                    <template slot="header"> FEES AND FUNDING</template>
                    <template slot="content">
                      <div style="font-size: 18px; padding: 1.25rem">
                        ${{ product.fees_and_funding }}
                      </div>
                    </template>
                  </badger-accordion-item>
                  <badger-accordion-item>
                    <template slot="header">QUALIFICATION AND COURSE DURATION</template>
                    <template slot="content">
                      <div
                        style="font-size: 18px; padding: 1.25rem"
                        v-html="product.qualification_and_course_duration"
                      ></div>
                    </template>
                  </badger-accordion-item>
                </badger-accordion>
              </div>
              <div class="pb-right-column col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <!-- Block CMS module -->
                <div id="informations_block_left_1" class="block informations_block_left">
                  <div class="how">
                    <h4 class="title_block">How it works</h4>
                    <div class="reassurances text-left col-md-12 col-sp-12 col-sm-12">
                      <div class="description">
                        <span class="col-md-3 col-sp-3 col-sm-3"
                          ><img src="https://stoodux.com/img/search.png" alt=""
                        /></span>
                        <p>
                          <span
                            id="docs-internal-guid-f101fd22-7fff-f067-eed9-3c63d4384b0e"
                            ><span
                              >Amazing choice of language courses, university &amp;
                              pathway programs and student housing.</span
                            ></span
                          >
                        </p>
                      </div>
                    </div>
                    <div class="reassurances col-md-12 col-sm-12 col-sp-12">
                      <div class="description">
                        <p class="col-md-9 col-sp-9 col-sm-9">
                          Book online and receive a confirmation within a few hours.
                        </p>
                        <span class="col-md-3 col-sp-3 col-sm-3"
                          ><img src="https://stoodux.com/img/checked.png" alt=""
                        /></span>
                      </div>
                    </div>
                    <div class="reassurances text-left col-md-12 col-sp-12 col-sm-12">
                      <div class="description">
                        <span class="col-md-3 col-sm-3 col-sp-3"
                          ><img src="https://stoodux.com/img/certificate.png" alt=""
                        /></span>
                        <p class="col-md-9 col-sp-9 col-sm-9">
                          Experience new cultures and places around the world with
                          stoodux.com.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import sliderimagesingle from "../components/sliderimagesingle.vue";
import FooterComponent from "../components/FooterComponent.vue";
import navbarsecond from "./../shared/components/NavBarsecond.vue";
import { BadgerAccordion, BadgerAccordionItem } from "vue-badger-accordion";

export default {
  components: {
    sliderimagesingle,
    FooterComponent,
    navbarsecond,
    BadgerAccordion,
    BadgerAccordionItem,
  },
  data() {
    return {
      description: "",
      name: "",
      product: [],
      university: [],
      photos: [],
      features: [],
      loading: false,
      pricesemester: null,
      loadingpage: false,
      price: null,
      text: `
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
          richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
          brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
          tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
          vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
          synth nesciunt you probably haven't heard of them accusamus labore VHS.
        `,
    };
  },
  beforeMount() {
    axios
      .get(`subjectprograms/${this.$route.params.id}`)
      .then((response) => {
        this.product = response.data.data;
        this.photos = this.product.university.photos;
        this.name = this.product.university.name;
        this.description = this.product.university.description;
        this.features = this.product.university.features;
      })
      .catch((error) => {
        console.error(error);
      });
    this.loadingpage = true;
  },

  methods: {
    addweekstodate(date, nweek) {
      var dt = new Date(date);
      dt.setDate(dt.getDate() + nweek * 7);
      return new Date(dt).toJSON().slice(0, 10);
    },

    updatecoursesemester(value) {
      this.activePlancoursesemester = value;
    },
  },
};
</script>
<style scoped>
.loader {
  border-top-color: #3498db;
  -webkit-animation: spinner 1.5s linear infinite;
  animation: spinner 1.5s linear infinite;
}

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.small-text {
  font-size: 18px;
}
.title {
  font-size: 36px;
}
.share-button {
  position: relative;
  display: inline-flex;
  align-items: center;
  padding: 3px 10px 4px 8px;
  margin: 10px;
  color: #fff;
  background-color: #333;
  border-radius: 2px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.35);
  text-decoration: none;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  font-weight: 600;
  font-size: 15px;
}

.share-button:hover {
  color: #fff;
  background-color: #4f4f4f;
}

.share-button:active {
  top: 1px;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.25);
}

.share-button svg {
  fill: #ffffff;
  width: 19px;
  height: 19px;
  margin-right: 5px;
}

.share-button.facebook {
  background-color: #4a66b7;
}
.share-button.facebook:hover {
  background-color: #556fbb;
}

.share-button.twitter {
  background-color: #1b95e0;
}
.share-button.twitter:hover {
  background-color: #269ce5;
}

.share-button.pinterest {
  background-color: #c92228;
}
.share-button.pinterest:hover {
  background-color: #cf4146;
}

.share-button.linkedin {
  background-color: #0077b5;
}
.share-button.linkedin:hover {
  background-color: #1e84b9;
}

.share-button.reddit {
  background-color: #5f99cf;
}
.share-button.reddit:hover {
  background-color: #75a6d4;
}

.share-button.tumblr {
  background-color: #35465c;
}
.share-button.tumblr:hover {
  background-color: #455166;
}

.share-button.hacker-news {
  background-color: #ff6600;
}
.share-button.hacker-news:hover {
  background-color: #ff7515;
}

.share-button.designer-news {
  background-color: #2d72d9;
}
.share-button.designer-news:hover {
  background-color: #3d82e9;
}

.share-button.google-plus {
  background-color: #fefefe;
  color: #333;
}

.share-button.google-plus:hover {
  background-color: #f6f6f6;
  color: #333;
}

.share-button.google-plus svg {
  fill: #db4437;
}
.iq-room-card__price {
  font-size: 1.4rem;
  line-height: 1.18571;
}
.buffer {
  padding-top: 1rem;
}
.iq-text-red {
  color: #f74637;
}
.iq-room-card__price--large .iq-room-card__price__from {
  color: #afafaf;
  display: block;
  font-size: 0.75em;
  font-weight: 300;
}
.iq-room-card__price--large .iq-room-card__price__price {
  font-size: 2rem;
}
.iq-room-card__price--large p {
  line-height: 1.2;
  font-size: 1.333rem;
}
.set-2 a.myaccount {
    position: relative;
    color: #efe6e6 !important;
    text-decoration: none;
    display: block;
    background: #c90404;
    padding: 10px;
    /* padding: 10px 0; */
}
.iq-contract {
  width: 100%;
  min-width: 0;
  margin-right: 0;
  margin-left: 0;
  margin-top: 1rem;
}
.iq-contract--selected {
  border-color: #1e1546;
  border-width: 2px;
}
.iq-contract {
  margin-bottom: 1rem;
  white-space: normal;
  font-size: 1rem;
  border-color: #1e1546;
  border-style: solid;
  border-width: 2px;
  border-radius: 4px;
  box-shadow: 0 0 0 rgb(0 0 0 / 20%);
  transition: border-width 0.3s ease-in-out, border-color 0.3s ease-in-out,
    padding 0.3s ease-in-out, box-shadow 0.5s ease-in-out;
  font-weight: 300;
}
.iq-contract__info {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 15px 28px;
  background-color: transparent;
  flex-wrap: wrap;
}
.iq-contract__info__item {
  flex: 1 0 21%;
  font-weight: 600;
}
.iq-contract__info span {
  display: block;
  font-weight: 600;
}
.iq-text-sm,
small {
  font-size: 0.77em;
  font-weight: 600;
}
.iq-contract__info__item--contract-start-finish {
  min-height: 0;
  font-weight: 600;
}
.iq-contract__info span {
  display: block;
  font-weight: 600;
}
.iq-text-sm,
small {
  font-size: 0.77em;
  font-weight: 600;
}
.iq-contract__info__item {
  flex: 1 0 21%;
  font-weight: 600;
}
.iq-contract__info__item--center-aligned {
  text-align: center;
  font-weight: 600;
}
.iq-contract__info span {
  display: block;
}
.iq-contract__info__item--book-contract {
  margin-top: 1em;
  max-width: 100px;
  font-weight: 600;
}
.iq-button--xxs {
  padding: 0.5em 0.75em;
  line-height: 1.3;
  max-height: 2.2em;
  font-size: 0.75em;
}
.iq-button--primary,
.iq-button-wrapper--primary button,
.iq-button-wrapper--primary a {
  color: #fff;
  background-color: #f74637;
  box-shadow: inset 0 0 0 2px #f74637;
}
.iq-button,
.iq-button-wrapper button,
.iq-button-wrapper a {
  display: inline-block;
  position: relative;
  vertical-align: middle;
  line-height: 1.4;
  font-size: 1rem;
  font-weight: 600;
  text-align: center;
  color: #1e1546;
  background-color: transparent;
  border: 0;
  box-shadow: inset 0 0 0 2px #96d200;
  border-radius: 3.4em;
  overflow: hidden;
  white-space: nowrap;
  transition: opacity 0.3s ease-in-out;
  -webkit-mask-image: -webkit-radial-gradient(white, black);
  cursor: pointer;
}
.iq-button--primary,
.iq-button-wrapper--primary button,
.iq-button-wrapper--primary a {
  color: #fff;
  background-color: #f74637;
  box-shadow: inset 0 0 0 2px #f74637;
}
</style>
