<template>
<section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto" :class="{'loading': loading}">
        
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <div class="grid grid-cols-3 gap-4">
            <div class=""> 
                                        <div class="text-LEFT pb-12">
                                <h2 class="text-base font-bold text-indigo-600">
                                FILTER BY 
                                </h2>
                                
                            </div>

                                        <h3 class="text-base font-bold text-indigo-600">Price</h3>
                                        <div class="form-check" v-for="(price, index) in prices" :key="'fadi' + index">
                                            <input class="form-check-input" type="checkbox" :value="index" :id="'price'+index" v-model="selected.prices">
                                            <label class="form-check-label" :for="'price' + index">
                                                {{ price.name }} ({{ price.products_count }})
                                            </label>
                                        </div>
                        <h3 class="text-base font-bold text-indigo-600">FEATURES</h3>
                                    <div class="form-check" v-for="(feature, index) in features" :key="index">
                                            <input class="form-check-input" type="checkbox" :value="feature.id" :id="'category'+index" v-model="selected.features">
                                            <label class="form-check-label" :for="'feature' + index">
                                                {{ feature.name }} ({{ feature.universities_count }})
                                            </label>
                                        </div>
                                    
            </div>
            <div class="col-span-2 ">
                <div class="text-left pb-12">
       
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
            Check our awesome courses
        </h1>
    </div>
                <div  v-for="product in products" :key="product.id">
                	<div
		class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img :src=" product.featured_image[0].url" alt="tailwind logo" class="rounded-xl" />
    </div>
			<div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
				<div class="flex justify-between item-center">
					<p class="text-gray-500 font-medium hidden md:block">{{ product.city.name }}</p>
					<div class="flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
							fill="currentColor">
							<path
								d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
						</svg>
						<p class="text-gray-600 font-bold text-sm ml-1">
							4.96
							<span class="text-gray-500 font-normal">(76 reviews)</span>
						</p>
					</div>
					<div class="">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
							fill="currentColor">
							<path fill-rule="evenodd"
								d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
								clip-rule="evenodd" />
						</svg>
					</div>
					<div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
						NEW</div>
				</div>
				<h3 class="font-black text-gray-800 md:text-3xl text-xl">{{ product.name }}</h3>
				<div class="grid grid-cols-3 gap-4">
  <div ><p class="md:text-lg text-gray-500 text-base">{{ product.language.name }}</p>
                </div>
  <div > <a  @click="showModalextrafunction(product.weeklycourses)" class="text-black hover:text-gray-800 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a></div>
  <div > <a  @click="showModalsemesterfunction(product.semestrecourses)" class="text-black hover:text-gray-800 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a></div>
</div>
               
				 <div class="grid grid-cols-3 gap-4">
                       <div v-for="feature in product.features" :key="feature.id">
                    <a  class="share-button google-plus" target="_blank"><img class="rounded-full border border-gray-100 shadow-sm" :src="feature.icon[0].thumbnail" :alt="'stoodux'" :title="'stoodux'" />
    {{feature.name}}</a>

                       </div>
                </div>
                <div class="grid grid-cols-6 gap-4">
  <div class="col-start-1 col-end-4 "><p class="text-xl font-black text-gray-800">
					$ {{ product.weeklycourses[0].price }}
					<span class="font-normal text-gray-600 text-base">/WEEK</span>
				</p></div>
  <div class="col-end-7 col-span-3"><router-link :to="{ path: '/courses-weekly/'+product.id}">
        <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">Book now</button>
         </router-link></div>
</div>
			</div>
		</div>
            </div>
                <t-modal 
v-model="showModalextra1"
:header="'Course weekly'"
>
    <div   class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
    <ul class="list-disc">
  <li v-for="item in showModalextra" :key="'1' + item.id">
      {{ item.name }} (${{ item.price}})
  </li>
  <!-- ... -->
</ul>
    </div>
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
   <t-modal 
v-model="showModalsemester1"
:header="'Course semestre'"
>
    <div   class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
    <ul class="list-disc">
  <li v-for="item in showModalsemester" :key="'1' + item.id">
      {{ item.name }} 
  </li>
  <!-- ... -->
</ul>
    </div>
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
            </div>
        </div>
    </div>
    </div>
    <footer-component></footer-component>
</section>

</template>

<script>

import FooterComponent from '../components/FooterComponent.vue';
import {
  TModal,
} from 'vue-tailwind/dist/components'
    export default {
        props : ['country','city' ,'language'],
            components: {
      FooterComponent,
      TModal
      },
        data: function () {
            return {
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
                    country: this.$route.query.country,
                    city: this.$route.query.city,
                    language: this.$route.query.language
                }
            }
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
                deep: true
            }
        },
        methods: {
              showModalextrafunction(model){
             this.showModalextra = model
             this.showModalextra1 = true
           },
  showModalsemesterfunction(model){
             this.showModalsemester = model
             this.showModalsemester1 = true
           },

           
            loadFeatures: function () {
                axios.get('CourseUniversityFeatures', {
                        params: _.omit(this.selected, 'features')
                    })
                    .then((response) => {
                        this.features = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            loadProducts: function () {
                axios.get('course-weekliesfiltercourse', {
                        params: this.selected
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
                axios.get('/prices', {
                        params: _.omit(this.selected, 'prices')
                    })
                    .then((response) => {
                        this.prices = response.data;
                        this.loading = false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>
