 
 <template>
  <div>
    <navbarsecond />
     
  
    <section id="columns" class="columns-container">
      <div id="breadcrumb" class="clearfix">
        <!-- Breadcrumb -->

        <div class="breadcrumb">
          <div class="container">
            <a class="home" href="https://stoodux.com/" title="Return to Home"
              >Home</a
            >
            <span class="navigation-pipe">&gt;</span>
            <span class="navigation_page"
              >Courses<span class="navigation-pipe">&gt;</span
              >{{ product.name }}</span
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
                  class="
                    pb-left-column
                    col-xs-12 col-sm-12 col-md-5 col-lg-5
                    pb-left-column1
                  "
                >
 <sliderimagesingle :photos="photos"></sliderimagesingle>
                
                  <!-- end image-block -->
                </div>
                <!-- end left infos-->
                <!-- center infos -->
                <div
                  class="pb-center-column col-xs-12 col-sm-12 col-md-6 col-lg-6"
                >
                  <h1 itemprop="name" style=" font-size: 20px; font-weight: 600; ">{{ product.name }}</h1>

                  <!--  /Module ProductComments -->
                  <div class="socialsharing_product list-inline no-print">
                    <div class="media">
                      <span class="title" style=" float: left; margin-right: 10px; font-size: 14px; font-weight: 600; padding-top: 17px; ">Share</span>
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
                  <ul
                    id="usefull_link_block"
                    class="clearfix no-print list-inline"
                  >
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
                        <span
                          v-html="product.description"
                          ></span
                        >
                      </p>
                    </div>
                  </div>
                  <!-- end short_description_block -->
                  <div class="col-sm-12 feat">
                  <div  v-for="feature in features" :key="feature.id">
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
              </div>
              <!-- end center infos-->
            </div>
            <div class="pb-left-column col-xs-12 col-sm-12 col-md-9 col-lg-12">
         <SearchTabs class="pb-left-column col-xs-12 col-sm-12 col-md-9 col-lg-12" :tabList="tabList">
          <template v-slot:tabPanel-1>
          <div>
          
    <div class="pb-left-column col-xs-12 col-sm-12 col-md-8 col-lg-8" style="width:65%;">
      <b-row class="text-center">
    <b-col cols="4"><div class="type" style="float: left;font-size: 20px;font-weight: 600;"> Choose Your Date</div></b-col>
    <b-col ><table style="color: #fff;width: 100%;background: #076f89;padding: 26px 32px 46px;float: left;/* width: 60%; */color: #fff;border-radius: 24px;">
<tbody><tr>
    <th>Starting date</th>
 	  <th>Duration Week(s)</th>
  </tr>
 
<tr> 
<td>
     <div id="data">
		<div class="calendar" >
		<div class="legend">

		<b-form-datepicker id="datepicker-valid" 
      reset-button
      close-button
      :date-disabled-fn="dateDisabled"
      v-model="date"
      :min="date1"
      @input="addToBasket"
      locale="en" :state="true"></b-form-datepicker>
				</div>

 
            </div>
                        </div>
 </td>
<td> 

<select id="qtybook" name="qtybook" 
@change="addToBasket"
                          v-model="weeksnumber"
                          >
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
</select>
 </td>
</tr>
 </tbody></table></b-col>
  </b-row>
 <b-row class="mt-3">
 <b-col >
 <table id="table" class="table table-bordered">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name">Name</th>
        <th data-field="description">Description</th>
        <th data-field="starts">price</th>
    </tr>
    </thead>
    <tbody>
    <tr
                        v-for="courseweekly in product.weeklycourses"
                        :key="courseweekly.id"
                        
                      >
        <td>   <div class="flex align-items-center">
                            <div class="rounded-full h-12 w-12 object-cover">
                              <input
                                @input="updatecourseweekly"
                                @change="addToBasket"
                                type="radio"
                                v-model="activePlancourseweekly"
                                name="courseweekly"
                                :value="courseweekly.id"
                              />
                            </div>
                          </div>
                              </td>
        <td>
            {{ courseweekly.name }}
        </td>
        <td>
        <div class="text-center">
 <b-button style=" color: #fff; background-color: #ffffff00; border-color: #ffffff05; font-size: 1.5rem; " :id="`popover-1-${courseweekly.id}`" variant="primary"><b-icon icon="exclamation-circle-fill" variant="info"></b-icon></b-button>
        <b-popover
          :target="`popover-1-${courseweekly.id}`"
          title="Description"
          triggers="hover focus"
        >
        <div v-html="courseweekly.description"></div>
        </b-popover>
</div>
        </td>
        <td> <span
                            
                            >${{ courseweekly.price }}</span
                          ></td>
    </tr>
   
    </tbody>
</table>
 </b-col >
 </b-row>
 <b-row class="mt-3">
 <b-col >
 <div class="type" style="float: left;font-size: 20px;font-weight: 600;"> Choose Your extras</div>
 </b-col >
 </b-row>
 <b-row class="mt-3">
 <b-col >
 <table id="table" class="table table-bordered">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name">Name</th>
        <th data-field="description">Description</th>
        <th data-field="starts">price</th>
        <th data-field="starts">  <input
                            @input="updateExtra"
                            @change="addToBasket"
                            type="radio"
                            v-model="activePlan"
                            name="profileImg"
                            value="0"
                          /></th>
    </tr>
    </thead>
    <tbody>
  <tr
                        v-for="extra in product.extra"
                        :key="extra.id"
                        
                      >
        <td>   
                               <input
                                @input="updateExtra"
                                @change="addToBasket"
                                type="radio"
                                v-model="activePlan"
                                name="extras"
                                :value="extra.id"
                              />
                              </td>
        <td>
           {{ extra.name }}
        </td>
        <td>
        <div class="text-center">
 <b-button style=" color: #fff; background-color: #ffffff00; border-color: #ffffff05; font-size: 1.5rem; " :id="`popoverextra-1-${extra.id}`" variant="primary">
 <b-icon icon="exclamation-circle-fill" variant="info"></b-icon></b-button>
        <b-popover
          :target="`popoverextra-1-${extra.id}`"
          title="Description"
          triggers="hover focus"
        >
        <div v-html="extra.description"></div>
        </b-popover>
</div>
        </td>
        <td> <span
                            
                            >${{ extra.price }}</span
                          ></td>
    </tr>
   
    </tbody>
</table>
 </b-col >
 </b-row>
 <b-row class="mt-3">
 <b-col >
 <div class="type" style="float: left;font-size: 20px;font-weight: 600;"> Choose Your accommodations</div>
 </b-col >
 </b-row>
      <b-row class="text-center mt-3">
    <b-col cols="6"><div class="type" style="float: left;font-size: 16px;font-weight: 500;"> Choose Your Duration Week(s)</div></b-col>
    <b-col ><table style="color: #fff;width: 100%;padding: 26px 32px 46px;float: left;/* width: 60%; */color: #fff;border-radius: 24px;">
<tbody>
 
<tr> 

<td> 

<select id="qtybook" name="qtybook" 
@change="addToBasket"
                         v-model="weeksnumberaccom"
                          >
  <option  value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
</select>
 </td>
</tr>
 </tbody></table></b-col>
  </b-row>
 <b-row class="mt-3">
 <b-col >
 <table id="table" class="table table-bordered">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name">Name</th>
        <th data-field="description">Description</th>
        <th data-field="starts">price</th>
        <th data-field="starts"> <input
                            @input="updateAccom"
                            @change="addToBasket"
                            type="radio"
                            v-model="activePlanacom"
                            name="accommodations"
                            value="0"
                          /></th>
    </tr>
    </thead>
    <tbody>
  <tr
                         v-for="accommodation in product.accommodation"
                        :key="accommodation.id"
                        
                      >
        <td>  <input @input="updateAccom" @change="addToBasket" type="radio" v-model="activePlanacom" name="profileImg" :value="accommodation.id"></td>
        <td>
           {{ accommodation.name }}
        </td>
        <td>
        <div class="text-center">
 <b-button style=" color: #fff; background-color: #ffffff00; border-color: #ffffff05; font-size: 1.5rem; " :id="`popoveraccommodation-1-${accommodation.id}`" variant="primary">
 <b-icon icon="exclamation-circle-fill" variant="info"></b-icon></b-button>
        <b-popover
          :target="`popoveraccommodation-1-${accommodation.id}`"
          title="Description"
          triggers="hover focus"
        >
        <div v-html="accommodation.description"></div>
        </b-popover>
</div>
        </td>
        <td> <span
                            
                            >${{ accommodation.price }}</span
                          ></td>
    </tr>
   
    </tbody>
</table>
 </b-col >
 </b-row>
</div>
    <div class="pb-right-column col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
    <!-- add to cart form-->
<div id="buy_block" >
<div class="buy_block1">

<!-- hidden datas -->
<p class="hidden">

</p>
<h2 style="
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
">PRICE DETAILS</h2>
<div class="box-info-product">
<div style="
    padding: 0 0 10px;
" class="content_prices clearfix">
                                    <!-- prices -->
        <div class="price">
       <transition name="fade">
        <price-breakdown v-if="price" :price="price" class="mb-4"></price-breakdown>
      </transition>
                                            </div> <!-- end prices -->
                                                                                                     
    
    
    <div class="clear"></div>
    <!-- quantity wanted -->
    
    
</div> <!-- end content_prices -->
 <!-- end box-cart-bottom -->
<div class="group-btn">
    
</div>
</div>
</div>
</div>


<!-- Block CMS module -->
<div id="informations_block_left_1" class="block informations_block_left">
<!--<h4 class="title_block">
<a href="https://stoodux.com/content/category/1-home">
Information				</a>
</h4>-->
<div class="how">
<h4 class="title_block">How it works</h4>
<div class="reassurances text-left col-md-12 col-sp-12 col-sm-12">
<div class="description"><span class="col-md-3 col-sp-3 col-sm-3"><img src="https://stoodux.com/img/search.png" alt=""></span>
<p><span id="docs-internal-guid-f101fd22-7fff-f067-eed9-3c63d4384b0e"><span>Amazing choice of language courses, university &amp; pathway programs and student housing.</span></span></p>
</div>
</div>
<div class="reassurances col-md-12 col-sm-12 col-sp-12">
<div class="description">
<p class="col-md-9 col-sp-9 col-sm-9">Book online and receive a confirmation within a few hours.</p>
<span class="col-md-3 col-sp-3 col-sm-3"><img src="https://stoodux.com/img/checked.png" alt=""></span></div>
</div>
<div class="reassurances text-left col-md-12 col-sp-12 col-sm-12">
<div class="description"><span class="col-md-3 col-sm-3 col-sp-3"><img src="https://stoodux.com/img/certificate.png" alt=""></span>
<p class="col-md-9 col-sp-9 col-sm-9">Experience new cultures and places around the world with stoodux.com.</p>
</div>
</div> 
</div>

</div>


<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="block paiement_logo_block col-xs-12 col-sm-12 col-md-12">
<h4 class="title_block">Secure Payment</h4>
<p>We accept payments via credit cards such as Visa, MasterCard. You can also pay using PayPal, or bank transfer.</p>
<div class="toggle-footer">
<a href="#" class="d-flex justify-content-center">
<img src="https://stoodux.com/themes/leo_ecogreen/img/logo_paiement_visa.png" alt="visa" width="70" height="21">
<img src="https://stoodux.com/themes/leo_ecogreen/img/logo_paiement_mastercard.jpg" alt="mastercard" width="70" height="21">
<img src="https://stoodux.com/themes/leo_ecogreen/img/logo_paiement_paypal.png" alt="paypal" width="70" height="21">
</a>
</div>
</div>
<!-- /Block payment logo module -->

</div>
  </div>
          </template>
          <template v-slot:tabPanel-2 v-if="product.semestrecourses">


          <div>
          
    <div class="pb-left-column col-xs-12 col-sm-12 col-md-8 col-lg-8" style="width:65%;">
 <b-row class="mt-3">
 <b-col >
 <table id="table" class="table table-bordered">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name">Name</th>
        <th data-field="description">Description</th>
        <th data-field="starts">price</th>
    </tr>
    </thead>
    <tbody>
    <tr
                        v-for="coursesemester in product.semestrecourses"
                        :key="coursesemester.id"
                        
                      >
        <td>   <input @input="updatecoursesemester" @change="addToBasketsemester" type="radio" v-model="activePlancoursesemester" name="coursesemester" :value="coursesemester.id">
                              </td>
        <td>
            <div class="grid grid-cols-6 gap-4">
                                <div class="col-start-1 col-end-3 ">{{coursesemester.name}}</div>
                                <div class="col-end-7 col-span-4 ">
                                    <select 
                                    :disabled=" !(coursesemester.id == activePlancoursesemester)"
        :class="{ 'opacity-75 cursor-not-allowed':  !(coursesemester.id == activePlancoursesemester) }"
                                    class="form-select" aria-label="Default select example" v-model='activePlancoursesemestervar' @change='addToBasketsemester'>
                                        <option value='0' >Select date</option>
                                        <option v-for='data in coursesemester.semestrecoursesvariante' :value='data.id' :key="'cc' + data.id">{{ data.starting_date }}</option>
                                    </select>
                                </div>
                              </div>
        </td>
        <td>
        <div class="text-center">
 <b-button style=" color: #fff; background-color: #ffffff00; border-color: #ffffff05; font-size: 1.5rem; " :id="`popover-1-${coursesemester.id}`" variant="primary"><b-icon icon="exclamation-circle-fill" variant="info"></b-icon></b-button>
        <b-popover
          :target="`popover-1-${coursesemester.id}`"
          title="Description"
          triggers="hover focus"
        >
        <div v-html="coursesemester.description"></div>
        </b-popover>
</div>
        </td>
        <td> <span
                            
                            >${{ coursesemester.price }}</span
                          ></td>
    </tr>
   
    </tbody>
</table>
 </b-col >
 </b-row>
 <b-row class="mt-3">
 <b-col >
 <div class="type" style="float: left;font-size: 20px;font-weight: 600;"> Choose Your extras</div>
 </b-col >
 </b-row>
 <b-row class="mt-3">
 <b-col >
 <table id="table" class="table table-bordered">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name">Name</th>
        <th data-field="description">Description</th>
        <th data-field="starts">price</th>
        <th data-field="starts">  <input @input="updateExtra" @change="addToBasketsemester" type="radio" v-model="activePlan" name="profileImg" value=0></th>
    </tr>
    </thead>
    <tbody>
  <tr
                        v-for="extra in product.extra"
                        :key="extra.id"
                        
                      >
        <td>   
                             <input @input="updateExtra" @change="addToBasketsemester" type="radio" v-model="activePlan" name="extras" :value="extra.id">
                              </td>
        <td>
           {{ extra.name }}
        </td>
        <td>
        <div class="text-center">
 <b-button style=" color: #fff; background-color: #ffffff00; border-color: #ffffff05; font-size: 1.5rem; " :id="`popoverextra-1-${extra.id}`" variant="primary">
 <b-icon icon="exclamation-circle-fill" variant="info"></b-icon></b-button>
        <b-popover
          :target="`popoverextra-1-${extra.id}`"
          title="Description"
          triggers="hover focus"
        >
        <div v-html="extra.description"></div>
        </b-popover>
</div>
        </td>
        <td> <span
                            
                            >${{ extra.price }}</span
                          ></td>
    </tr>
   
    </tbody>
</table>
 </b-col >
 </b-row>
 <b-row class="mt-3">
 <b-col >
 <div class="type" style="float: left;font-size: 20px;font-weight: 600;"> Choose Your accommodations</div>
 </b-col >
 </b-row>
      <b-row class="text-center mt-3">
    <b-col cols="6"><div class="type" style="float: left;font-size: 16px;font-weight: 500;"> Choose Your Duration Week(s)</div></b-col>
    <b-col ><table style="color: #fff;width: 100%;padding: 26px 32px 46px;float: left;/* width: 60%; */color: #fff;border-radius: 24px;">
<tbody>
 
<tr> 

<td> 

<select id="qtybook" name="qtybook" 
@change="addToBasketsemester" v-model="weeksnumberaccomsemester"
                          >
  <option  value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
</select>
 </td>
</tr>
 </tbody></table></b-col>
  </b-row>
 <b-row class="mt-3">
 <b-col >
 <table id="table" class="table table-bordered">
    <thead>
    <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="name">Name</th>
        <th data-field="description">Description</th>
        <th data-field="starts">price</th>
        <th data-field="starts"> <input @input="updateAccom" @change="addToBasketsemester" type="radio" v-model="activePlanacom" name="accommodations" value=0></th>
    </tr>
    </thead>
    <tbody>
  <tr
                         v-for="accommodation in product.accommodation"
                        :key="accommodation.id"
                        
                      >
        <td>  <input @input="updateAccom" @change="addToBasketsemester" type="radio" v-model="activePlanacom" name="profileImg" :value="accommodation.id"></td>
        <td>
           {{ accommodation.name }}
        </td>
        <td>
        <div class="text-center">
 <b-button style=" color: #fff; background-color: #ffffff00; border-color: #ffffff05; font-size: 1.5rem; " :id="`popoveraccommodation-1-${accommodation.id}`" variant="primary">
 <b-icon icon="exclamation-circle-fill" variant="info"></b-icon></b-button>
        <b-popover
          :target="`popoveraccommodation-1-${accommodation.id}`"
          title="Description"
          triggers="hover focus"
        >
        <div v-html="accommodation.description"></div>
        </b-popover>
</div>
        </td>
        <td> <span
                            
                            >${{ accommodation.price }}</span
                          ></td>
    </tr>
   
    </tbody>
</table>
 </b-col >
 </b-row>
</div>
    <div class="pb-right-column col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
    <!-- add to cart form-->
<div id="buy_block" >
<div class="buy_block1">

<!-- hidden datas -->
<p class="hidden">

</p>
<h2 style="
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
">PRICE DETAILS</h2>
<div class="box-info-product">
<div style="
    padding: 0 0 10px;
" class="content_prices clearfix">
                                    <!-- prices -->
        <div class="price">
       <transition name="fade">
        <price-breakdownsemester v-if="pricesemester" :price="pricesemester" class="mb-4"></price-breakdownsemester>
      </transition>
                                            </div> <!-- end prices -->
                                                                                                     
    
    
    <div class="clear"></div>
    <!-- quantity wanted -->
    
    
</div> <!-- end content_prices -->
 <!-- end box-cart-bottom -->
<div class="group-btn">
    
</div>
</div>
</div>
</div>


<!-- Block CMS module -->
<div id="informations_block_left_1" class="block informations_block_left">
<!--<h4 class="title_block">
<a href="https://stoodux.com/content/category/1-home">
Information				</a>
</h4>-->
<div class="how">
<h4 class="title_block">How it works</h4>
<div class="reassurances text-left col-md-12 col-sp-12 col-sm-12">
<div class="description"><span class="col-md-3 col-sp-3 col-sm-3"><img src="https://stoodux.com/img/search.png" alt=""></span>
<p><span id="docs-internal-guid-f101fd22-7fff-f067-eed9-3c63d4384b0e"><span>Amazing choice of language courses, university &amp; pathway programs and student housing.</span></span></p>
</div>
</div>
<div class="reassurances col-md-12 col-sm-12 col-sp-12">
<div class="description">
<p class="col-md-9 col-sp-9 col-sm-9">Book online and receive a confirmation within a few hours.</p>
<span class="col-md-3 col-sp-3 col-sm-3"><img src="https://stoodux.com/img/checked.png" alt=""></span></div>
</div>
<div class="reassurances text-left col-md-12 col-sp-12 col-sm-12">
<div class="description"><span class="col-md-3 col-sm-3 col-sp-3"><img src="https://stoodux.com/img/certificate.png" alt=""></span>
<p class="col-md-9 col-sp-9 col-sm-9">Experience new cultures and places around the world with stoodux.com.</p>
</div>
</div> 
</div>

</div>


<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="block paiement_logo_block col-xs-12 col-sm-12 col-md-12">
<h4 class="title_block">Secure Payment</h4>
<p>We accept payments via credit cards such as Visa, MasterCard. You can also pay using PayPal, or bank transfer.</p>
<div class="toggle-footer">
<a href="#" class="d-flex justify-content-center">
<img src="https://stoodux.com/themes/leo_ecogreen/img/logo_paiement_visa.png" alt="visa" width="70" height="21">
<img src="https://stoodux.com/themes/leo_ecogreen/img/logo_paiement_mastercard.jpg" alt="mastercard" width="70" height="21">
<img src="https://stoodux.com/themes/leo_ecogreen/img/logo_paiement_paypal.png" alt="paypal" width="70" height="21">
</a>
</div>
</div>
<!-- /Block payment logo module -->

</div>
  </div>

          </template>
          </SearchTabs>
            </div>
          </section>
        </div>
      </div>
    </section>
   
  </div>
</template>
<script>
import sliderimagesingle from "../components/sliderimagesingle.vue";
import SelectablePlan from "../components/SelectablePlan.vue";
import SelectablePlanacom from "../components/SelectablePlanacom.vue";
import FooterComponent from "../components/FooterComponent.vue";
import PriceBreakdown from "../components/PriceBreakdown.vue";
import PriceBreakdownsemester from "../components/PriceBreakdownsemester.vue";

import { TRadioGroup } from "vue-tailwind/dist/components";
import SearchTabs from "../components/SearchTabsComponent";

import { TDatepicker } from "vue-tailwind/dist/components";
import { TModal } from "vue-tailwind/dist/components";

import navbarsecond from "./../shared/components/NavBarsecond.vue";

export default {
  components: {
    sliderimagesingle,
    SelectablePlan,
    FooterComponent,
    SelectablePlanacom,
    PriceBreakdownsemester,
    PriceBreakdown,
    TRadioGroup,
    TDatepicker,
    TModal,
    SearchTabs,
    navbarsecond,
  },
  data() {
    return {
      
      tabList: ["Weekly courses", "Semestre courses"],
      showModalextra: false,
      showModalextra1: false,
      showModalaccom: false,
      showModalcoursesemester: false,
      showModalcoursesemester1: false,
      showModalaccom1: false,
      showModalcourseweekly: false,
      showModalcourseweekly1: false,
      activePlancoursesemester: 0,
      activePlancoursesemestervar: 0,
      product: [],
      university: [],
      photos: [],
      picked: "Two",
      activePlan: 0,
      weeksnumber: 1,
      weeksnumberaccom: 1,
      weeksnumberaccomsemester: 0,
      activePlanacom: 0,
      activePlancourseweekly: 0,
      features: [],
      loading: false,
      loadingsemester: false,
      pricesemester: null,
      loadingpage: false,
      price: null,
      date:'',
      date1: new Date().toJSON().slice(0, 10),
      highlightDates: [
        // A formatted date
        new Date().toJSON().slice(0, 10),
        // A date object ('1987-03-25',)
        new Date(1987, 4, 25),
        // Disable mondays
        function (date) {
          return (
            date.getDay() === 3 ||
            date.getDay() === 2 ||
            date.getDay() === 0 ||
            date.getDay() === 4 ||
            date.getDay() === 5 ||
            date.getDay() === 6
          );
        },
      ],
      disabledDates: [
        // Disable mondays
        function (date) {
          return date.getDay() === 1;
        },
      ],
    };
  },
  beforeMount() {
    /* axios.get(`course-weeklies/${this.$route.params.id}/price`)
            .then(response => {
                this.price = response.data

            })
            .catch(error => {
                console.error(error);
            })  */
    axios
      .get(`course-weeklies/${this.$route.params.id}`)
      .then((response) => {
        this.product = response.data.data;
        this.photos = this.product.photos;
        this.activePlancourseweekly = this.product.weeklycourses[0].id;
        this.features = this.product.features;
      })
      .catch((error) => {
        console.error(error);
      });
    this.loadingpage = true;
  },

  methods: {
    dateDisabled(ymd, date) {
        // Disable weekends (Sunday = `0`, Saturday = `6`) and
        // disable days that fall on the 13th of the month
        const weekday = date.getDay()
        const day = date.getDate()
        // Return `true` if the date should be disabled
        return weekday === 0 || weekday === 6 || weekday === 2 || weekday === 3 || weekday === 4 || weekday === 5
      },
    showModal(model) {
      this.showModalaccom = model;
      this.showModalaccom1 = true;
    },
    showModalcourseweeklyfunction(model) {
      this.showModalcourseweekly = model;
      this.showModalcourseweekly1 = true;
    },

    showModalcoursesemesterfunction(model) {
      this.showModalcoursesemester = model;
      this.showModalcoursesemester1 = true;
    },
    showModalextrafunction(model) {
      this.showModalextra = model;
      this.showModalextra1 = true;
    },
    updateExtra(value) {
      this.activePlan = value;
    },
    updatecourseweekly(value) {
      this.activePlancourseweekly = value;
    },
    updatecoursesemester(value) {
      this.activePlancoursesemester = value;
    },
    updatecoursesemestervar(value) {
      this.activePlancoursesemestervar = value;
    },
    updateAccom(value) {
      this.activePlanacom = value;
    },
    addToBasket(e) {
      axios
        .get(
          `course-weeklies/${this.$route.params.id}/price?extraid=${this.activePlan}&acomid=${this.activePlanacom}&startdate=${this.date}&weeksnumber=${this.weeksnumber}&weeksnumberaccom=${this.weeksnumberaccom}&courseid=${this.activePlancourseweekly}`
        )
        .then((response) => {
          this.price = response.data;

          this.loading = true;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    addToBasketsemester(e) {
      axios
        .get(
          `course-weeklies/${this.$route.params.id}/pricesemster?extraid=${this.activePlan}&acomid=${this.activePlanacom}&courseid=${this.activePlancoursesemester}&coursevarid=${this.activePlancoursesemestervar}&weeksnumberaccomsemester=${this.weeksnumberaccomsemester}`
        )
        .then((response) => {
          this.pricesemester = response.data;

          this.loadingsemester = true;
        })
        .catch((error) => {
          console.error(error);
        });
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
</style>
