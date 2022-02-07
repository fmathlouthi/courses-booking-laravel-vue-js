<template>
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            We have the best universities offerts in the market
        </h2>
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
            Check our awesome universities
        </h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div  v-for="item in courses" :key="'1' + item.id" class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
           <div class=" bg-gray-100 flex justify-center items-center">
  <div class="w- p-6 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500">
    <img class="w-64 object-cover rounded-t-md" :src="item.featured_image[0].url" :alt="item.featured_image.name" :title="item.featured_image.name" />
    <div class="mt-4">
      <h1 class="text-2xl font-bold text-gray-700"> {{item.name}}</h1>
      <p class="text-sm mt-2 text-gray-700">{{item.language.name}}</p>
     <!-- <div class="mt-3 space-x-4 flex p-1">
        <div class="p-1 border-4 rounded-full cursor-pointer hover:border-green-200 hover:scale-105 transition transform duration-200">
          <span class="block h-6 w-6 bg-green-400 rounded-full"> </span>
        </div>
        <div class="p-1 border-4 rounded-full cursor-pointer hover:border-blue-200 hover:scale-105 transition transform duration-200">
          <span class="block h-6 w-6 bg-blue-400 rounded-full"> </span>
        </div>
        <div class="p-1 border-4 rounded-full cursor-pointer hover:border-yellow-200 hover:scale-105 transition transform duration-200">
          <span class="block h-6 w-6 bg-yellow-400 rounded-full"> </span>
        </div>
      </div>
      <div class="mt-4 mb-2 flex justify-between pl-4 pr-2">
        <router-link :to="{ path: '/courses-weekly/'+item.id}">
        <button class="block text-xl font-semibold text-gray-700 cursor-auto">${{item.weeklycourses[0].price}}</button>
        </router-link>
        <router-link :to="{ path: '/courses-weekly/'+item.id}">
        <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">Book now</button>
         </router-link>
      </div>-->
    </div>
  </div>
</div>

        </div>
        
       
    </div>
</section>

             
</template>
<script>
export default {
  props: ['courses']
}
</script>
