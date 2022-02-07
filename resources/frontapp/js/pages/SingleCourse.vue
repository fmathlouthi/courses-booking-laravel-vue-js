 
 <template>
  <section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap" v-if="loadingpage">
        
            <div class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200">
            <sliderimagesingle :photos="photos"></sliderimagesingle>
            </div>
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{product.name}}</h1>
                 <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
        <a class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
         <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3">4 Reviews</span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
            <a class="text-gray-400">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-400">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-400">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
                <p class="leading-relaxed" v-html="product.description"></p>
                   <div class="flex mb-4">
                       <div v-for="feature in features" :key="feature.id">
                    <a href="#" class="share-button google-plus" target="_blank"><img class="rounded-full border border-gray-100 shadow-sm" :src="feature.icon[0].thumbnail" :alt="'stoodux'" :title="'stoodux'" />{{feature.name}}</a>

                       </div>
                </div>
                
                
                
            </div>
      
       
        
   
    </div>
    <div class="lg:w-4/5 mx-auto flex flex-wrap" v-else>
     <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-64 w-64"></div>
    </div>
        <SearchTabs class="w-12/12 lg:w-12/12 mx-auto mb-16" :tabList="tabList">
      <template v-slot:tabPanel-1> 
          <div class="grid grid-cols-3 gap-4">
	 <div class="col-span-2">
        <div class="overflow-auto lg:overflow-visible ">
            <div class="text-left pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
            pick a starting date please !
        </h1>
    </div>
    <div class="grid grid-cols-6 gap-4">
  <div class="col-start-1 col-end-3 ">
     <t-datepicker
    v-model="date"
    @change="addToBasket"
    :minDate="date"
    :highlightDates="disabledDates"
    :disabledDates="highlightDates"
  />
    
  </div>

  <div class="col-end-6 col-span-2 ">
    <div class="relative inline-flex">
  <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
  <select @change="addToBasket" v-model="weeksnumber" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
    <option value="0">pick your week number</option>
    <option value="1" >1 WEEK</option>
    <option value="2">2 WEEKS</option>
    <option value="3">3 WEEKS</option>
    <option value="4">4 WEEKS</option>
    <option value="5">5 WEEKS</option>
    <option value="6">6 WEEKS</option>
    <option value="7">7 WEEKS</option>
  </select>
</div>
  </div>
</div>
        </div>
        <!--course weekly -->
        <div class="overflow-auto lg:overflow-visible ">
            <div class="text-left pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
            We have the best weekly course
        </h1>
    </div>
			<table class="w-full table text-white border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="p-3">course weekly </th>
						<th class="p-3 text-left">Name</th>
						<th class="p-3 text-left">Description</th>
						<th class="p-3 text-left">price</th>
                        
					</tr>
				</thead>
				<tbody>
					<tr v-for="courseweekly in product.weeklycourses" :key="courseweekly.id" class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<div class="rounded-full h-12 w-12  object-cover">
								<input @input="updatecourseweekly" @change="addToBasket" type="radio" v-model="activePlancourseweekly" name="courseweekly" :value="courseweekly.id">
  
								</div>
							</div>
						</td>
						<td class="p-3">
							{{courseweekly.name}}
						</td>
						<td class="p-3 font-bold">
							<a  @click="showModalcourseweeklyfunction(courseweekly)" class="text-white hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">${{courseweekly.price}}</span>
						</td>
					
					</tr>
					
				</tbody>
			</table>
		</div>
        <!--course extra -->
        <div class="overflow-auto lg:overflow-visible ">
            <div class="text-left pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
            We have the best extra  for the course
        </h1>
    </div>
			<table class="w-full table text-white border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="p-3">course extra </th>
						<th class="p-3 text-left">Name</th>
						<th class="p-3 text-left">Description</th>
						<th class="p-3 text-left">price</th>
                        <th class="p-3 text-left">
                            <input @input="updateExtra" @change="addToBasket" type="radio" v-model="activePlan" name="profileImg" value=0>
                        </th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="extra in product.extra" :key="extra.id" class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<div class="rounded-full h-12 w-12  object-cover">
								<input @input="updateExtra" @change="addToBasket" type="radio" v-model="activePlan" name="extras" :value="extra.id">
  
								</div>
							</div>
						</td>
						<td class="p-3">
							{{extra.name}}
						</td>
						<td class="p-3 font-bold">
							<a  @click="showModalextrafunction(extra)" class="text-white hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">${{extra.price}}</span>
						</td>
					
					</tr>
					
				</tbody>
			</table>
		</div>
        <div class="overflow-auto lg:overflow-visible ">
    <div class="text-left pb-12">
<h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
    We have the best accommodations  for the course
</h1>
<div class="col-end-6 col-span-2 ">
    <div class="relative inline-flex">
  <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
  <select @change="addToBasket" v-model="weeksnumberaccom" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
    <option value="0">pick your week number</option>
    <option value="1" >1 WEEK</option>
    <option value="2">2 WEEKS</option>
    <option value="3">3 WEEKS</option>
    <option value="4">4 WEEKS</option>
    <option value="5">5 WEEKS</option>
    <option value="6">6 WEEKS</option>
    <option value="7">7 WEEKS</option>
  </select>
</div>
  </div>
</div>
    <table class="w-full table text-white border-separate space-y-6 text-sm">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-3">course accommodations </th>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Description</th>
                <th class="p-3 text-left">price</th>
                <th class="p-3 text-left">
                    <input @input="updateAccom" @change="addToBasket" type="radio" v-model="activePlanacom" name="accommodations" value=0>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="accommodation in product.accommodation" :key="accommodation.id" class="bg-gray-800">
                <td class="p-3">
                    <div class="flex align-items-center">
                        <div class="rounded-full h-12 w-12  object-cover">
                        <input @input="updateAccom" @change="addToBasket" type="radio" v-model="activePlanacom" name="profileImg" :value="accommodation.id">

                        </div>
                    </div>
                </td>
                <td class="p-3">
                    {{accommodation.name}}
                </td>
                <td class="p-3 font-bold">
                    <a @click="showModal(accommodation)" class="text-gray-400 hover:text-gray-100 mr-2">
                        <i class="material-icons-outlined text-base">visibility</i>
                    </a>
               
                </td>
                <td class="p-3">
                    <span class="bg-green-400 text-gray-50 rounded-md px-2">${{accommodation.price}}</span>
                </td>
            
            </tr>
            
        </tbody>
    </table>
    

     <t-modal 
v-model="showModalaccom1"
:header="showModalaccom.name"
>
   <div v-html="showModalaccom.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>

     <t-modal 
v-model="showModalextra1"
:header="showModalextra.name"
>
   <div v-html="showModalextra.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
  <t-modal 
v-model="showModalcourseweekly1"
:header="showModalcourseweekly.name"
>
   <div v-html="showModalcourseweekly.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
</div>
 
         </div>
 <div >
            <div class="lg:w-5/5  flex flex-wrap mt-10">
        <div class="md:w-custom mx-auto py-8 md:flex md:justify-between md:flex-wrap">
           
           
       <transition name="fade" v-if="loading">
        <price-breakdown v-if="price" :price="price" class="mb-4"></price-breakdown>
      </transition>
       <transition name="fade" v-if="!loading">
        <div class="p-2" >
    <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-sm">
      <span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">Notifaction </span>
      <span class="inline-flex px-2">Please pick a starting date and weeks number.</span>
    </div>
  </div>
  </transition>
      
    </div>
    </div>
         </div>
         </div>
      </template>
      <template v-slot:tabPanel-2 v-if="product.semestrecourses"> 
        <div class="grid grid-cols-3 gap-4">
	 <div class="col-span-2">
       
  
        <!--course weekly -->
        <div class="overflow-auto lg:overflow-visible ">
            <div class="text-left pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
            We have the best semestre courses
        </h1>
    </div>
		<table class="w-full table text-white border-separate space-y-6 text-sm">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="p-3">course semestre </th>
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Description</th>
            <th class="p-3 text-left">price</th>
            
        </tr>
    </thead>
            <tbody>
					<tr v-for="coursesemester in product.semestrecourses" :key="coursesemester.id" class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<div class="rounded-full h-12 w-12  object-cover">
								<input @input="updatecoursesemester" @change="addToBasketsemester" type="radio" v-model="activePlancoursesemester" name="coursesemester" :value="coursesemester.id">
  
								</div>
							</div>
						</td>
						<td class="p-3">
                            <div class="grid grid-cols-6 gap-4">
                                <div class="col-start-1 col-end-3 ">{{coursesemester.name}}</div>
                                <div class="col-end-7 col-span-4 ">
                                    <select 
                                    :disabled=" !(coursesemester.id == activePlancoursesemester)"
        :class="{ 'opacity-25 cursor-not-allowed':  !(coursesemester.id == activePlancoursesemester) }"
                                    class="form-select" aria-label="Default select example" v-model='activePlancoursesemestervar' @change='addToBasketsemester'>
                                        <option value='0' >Select date</option>
                                        <option v-for='data in coursesemester.semestrecoursesvariante' :value='data.id' :key="'cc' + data.id">{{ data.starting_date }}</option>
                                    </select>
                                </div>
                              </div>
							
						</td>
						<td class="p-3 font-bold">
                            <a  @click="showModalcoursesemesterfunction(coursesemester)" class="text-white hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">${{coursesemester.price}}</span>
						</td>
					
					</tr>
					
				</tbody>
			</table>


            
		</div>
        <!--course extra -->
        <div class="overflow-auto lg:overflow-visible ">
            <div class="text-left pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
            We have the best extra  for the course
        </h1>
    </div>
			<table class="w-full table text-white border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="p-3">course extra </th>
						<th class="p-3 text-left">Name</th>
						<th class="p-3 text-left">Description</th>
						<th class="p-3 text-left">price</th>
                        <th class="p-3 text-left">
                            <input @input="updateExtra" @change="addToBasketsemester" type="radio" v-model="activePlan" name="profileImg" value=0>
                        </th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="extra in product.extra" :key="extra.id" class="bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<div class="rounded-full h-12 w-12  object-cover">
								<input @input="updateExtra" @change="addToBasketsemester" type="radio" v-model="activePlan" name="extras" :value="extra.id">
  
								</div>
							</div>
						</td>
						<td class="p-3">
							{{extra.name}}
						</td>
						<td class="p-3 font-bold">
							<a  @click="showModalextrafunction(extra)" class="text-white hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">${{extra.price}}</span>
						</td>
					
					</tr>
					
				</tbody>
			</table>
		</div>
        <div class="overflow-auto lg:overflow-visible ">
    <div class="text-left pb-12">
      
<h1 class="font-bold text-3xl md:text-4xl lg:text-3xl font-heading text-gray-900">
    We have the best accommodations  for the course
</h1>
<div class="col-end-6 col-span-2 ">
    <div class="relative inline-flex">
  <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
  <select @change="addToBasketsemester" v-model="weeksnumberaccomsemester" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
    <option value="0">pick your week number</option>
    <option value="1" >1 WEEK</option>
    <option value="2">2 WEEKS</option>
    <option value="3">3 WEEKS</option>
    <option value="4">4 WEEKS</option>
    <option value="5">5 WEEKS</option>
    <option value="6">6 WEEKS</option>
    <option value="7">7 WEEKS</option>
  </select>
</div>
  </div>
</div>
    <table class="w-full table text-white border-separate space-y-6 text-sm">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="p-3">course accommodations </th>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Description</th>
                <th class="p-3 text-left">price</th>
                <th class="p-3 text-left">
                    <input @input="updateAccom" @change="addToBasketsemester" type="radio" v-model="activePlanacom" name="accommodations" value=0>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="accommodation in product.accommodation" :key="accommodation.id" class="bg-gray-800">
                <td class="p-3">
                    <div class="flex align-items-center">
                        <div class="rounded-full h-12 w-12  object-cover">
                        <input @input="updateAccom" @change="addToBasketsemester" type="radio" v-model="activePlanacom" name="profileImg" :value="accommodation.id">

                        </div>
                    </div>
                </td>
                <td class="p-3">
                    {{accommodation.name}}
                </td>
                <td class="p-3 font-bold">
                    <a @click="showModal(accommodation)" class="text-gray-400 hover:text-gray-100 mr-2">
                        <i class="material-icons-outlined text-base">visibility</i>
                    </a>
               
                </td>
                <td class="p-3">
                    <span class="bg-green-400 text-gray-50 rounded-md px-2">${{accommodation.price}}</span>
                </td>
            
            </tr>
            
        </tbody>
    </table>
    

     <t-modal 
v-model="showModalaccom1"
:header="showModalaccom.name"
>
   <div v-html="showModalaccom.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>

     <t-modal 
v-model="showModalextra1"
:header="showModalextra.name"
>
   <div v-html="showModalextra.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
  <t-modal 
v-model="showModalcourseweekly1"
:header="showModalcourseweekly.name"
>
   <div v-html="showModalcourseweekly.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
 <t-modal 
v-model="showModalcoursesemester1"
:header="showModalcoursesemester.name"
>
   <div v-html="showModalcoursesemester.description"></div>
  
  <template v-slot:footer>
    <div class="flex justify-between">
      Stoodux team
    </div>
  </template>
</t-modal>
</div>
 
         </div>
 <div >
            <div class="lg:w-5/5  flex flex-wrap mt-10">
        <div class="md:w-custom mx-auto py-8 md:flex md:justify-between md:flex-wrap">
           
           
       <transition name="fade" v-if="loadingsemester">
        <price-breakdownsemester v-if="pricesemester" :price="pricesemester" class="mb-4"></price-breakdownsemester>
      </transition>
       <transition name="fade" v-if="!loadingsemester">
        <div class="p-2" >
    <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-sm">
      <span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">Notifaction </span>
      <span class="inline-flex px-2">Please pick a starting date and weeks number.</span>
    </div>
  </div>
  </transition>
      
    </div>
    </div>
         </div>
         </div>
           </template>
    </SearchTabs>

    </div>
         
    <footer-component></footer-component>
</section>

</template>
<script>
import sliderimagesingle from '../components/sliderimagesingle.vue';
import SelectablePlan from '../components/SelectablePlan.vue'
import SelectablePlanacom from '../components/SelectablePlanacom.vue'
import FooterComponent from '../components/FooterComponent.vue';
import PriceBreakdown from "../components/PriceBreakdown.vue";
import PriceBreakdownsemester from "../components/PriceBreakdownsemester.vue";

import {
    TRadioGroup,
} from 'vue-tailwind/dist/components'
import SearchTabs from '../components/SearchTabsComponent';

import {
  TDatepicker,
} from 'vue-tailwind/dist/components'
import {
  TModal,
} from 'vue-tailwind/dist/components'

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
      SearchTabs
      },
        data(){
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
                product : [],
                university: [],
                photos: [],
                picked: 'Two',
                activePlan: 0,
                weeksnumber: 0,
                weeksnumberaccom: 0,
                weeksnumberaccomsemester: 0,
                activePlanacom: 0,
                activePlancourseweekly: 0,
                features: [],
                loading: false,
                loadingsemester: false,
                 pricesemester: null,
                loadingpage: false,
                price: null,
                date: new Date().toJSON().slice(0,10),
                 highlightDates: [
        // A formatted date
        new Date().toJSON().slice(0,10),
        // A date object ('1987-03-25',)
        new Date(1987, 4, 25),
        // Disable mondays
        function (date) {
          return date.getDay() === 3 || date.getDay() === 2 || date.getDay() === 0 || date.getDay() === 4 || date.getDay() === 5|| date.getDay() === 6
        }
      ],
      disabledDates: [
        
        // Disable mondays
        function (date) {
          return date.getDay() === 1
        }
      ],
      
            }
        },
        beforeMount(){
            /* axios.get(`course-weeklies/${this.$route.params.id}/price`)
            .then(response => {
                this.price = response.data

            })
            .catch(error => {
                console.error(error);
            })  */
            axios.get(`course-weeklies/${this.$route.params.id}`)
            .then(response => {
                this.product = response.data.data
                this.photos = this.product.photos
                this.activePlancourseweekly = this.product.weeklycourses[0].id
                this.features = this.product.features
            })
            .catch(error => {
                console.error(error);
            })  
            this.loadingpage  = true;   
        },
        
        methods: {
           showModal(model){
             this.showModalaccom = model
             this.showModalaccom1 = true
           },
           showModalcourseweeklyfunction(model){
             this.showModalcourseweekly = model
             this.showModalcourseweekly1 = true
           },

           showModalcoursesemesterfunction(model){
             this.showModalcoursesemester = model
             this.showModalcoursesemester1 = true
           },
           showModalextrafunction(model){
             this.showModalextra = model
             this.showModalextra1 = true
           },
            updateExtra(value) {
      this.activePlan = value
    },
    updatecourseweekly(value) {
      this.activePlancourseweekly = value
    },
    updatecoursesemester(value) {
      this.activePlancoursesemester = value
    },
        updatecoursesemestervar(value) {
      this.activePlancoursesemestervar = value
    },
        updateAccom(value) {
      this.activePlanacom = value
    },
              addToBasket(e) {
       axios.get(`course-weeklies/${this.$route.params.id}/price?extraid=${this.activePlan}&acomid=${this.activePlanacom}&startdate=${this.date}&weeksnumber=${this.weeksnumber}&weeksnumberaccom=${this.weeksnumberaccom}&courseid=${this.activePlancourseweekly}`)
            .then(response => {
                this.price = response.data
                
                this.loading = true
            })
            .catch(error => {
                console.error(error);
            })  
    },
    addToBasketsemester(e) {
       axios.get(`course-weeklies/${this.$route.params.id}/pricesemster?extraid=${this.activePlan}&acomid=${this.activePlanacom}&courseid=${this.activePlancoursesemester}&coursevarid=${this.activePlancoursesemestervar}&weeksnumberaccomsemester=${this.weeksnumberaccomsemester}`)
            .then(response => {
                this.pricesemester = response.data
                
                this.loadingsemester = true
            })
            .catch(error => {
                console.error(error);
            })  
    },
        }

    }
</script>
<style scoped>
.loader {
  border-top-color: #3498db;
  -webkit-animation: spinner 1.5s linear infinite;
  animation: spinner 1.5s linear infinite;
}

@-webkit-keyframes spinner {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spinner {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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

.share-button.facebook { background-color: #4A66B7; }
.share-button.facebook:hover { background-color: #556fbb; }

.share-button.twitter { background-color: #1B95E0; }
.share-button.twitter:hover { background-color: #269ce5; }

.share-button.pinterest { background-color: #c92228; }
.share-button.pinterest:hover { background-color: #cf4146; }

.share-button.linkedin { background-color: #0077B5; }
.share-button.linkedin:hover { background-color: #1e84b9; }

.share-button.reddit { background-color: #5f99cf; }
.share-button.reddit:hover { background-color: #75a6d4; }

.share-button.tumblr { background-color: #35465c; }
.share-button.tumblr:hover { background-color: #455166; }

.share-button.hacker-news { background-color: #ff6600; }
.share-button.hacker-news:hover { background-color: #ff7515; }

.share-button.designer-news { background-color: #2d72d9; }
.share-button.designer-news:hover { background-color: #3d82e9; }

.share-button.google-plus {
  background-color: #fefefe;
  color: #333;
}

.share-button.google-plus:hover {
  background-color: #f6f6f6;
  color: #333;
}

.share-button.google-plus svg {
  fill: #DB4437;
}
</style>
