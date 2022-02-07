<template>
  <section class="bg-white  py-8 pl-10 pr-10">
     <h1 class="w-full my-2 text-5xl font-bold  text-center text-gray-800">HOW IT WORKS</h1>
      <p class="w-full my-2 text-3xl pb-10  text-center text-gray-500">During this example, I will not go into topics like v-for ,v-if etc. but I will try to explain the things that could cause more doubts.</p>
      
<div class="text-center mt-5"> 
  <img class="w-full md:w-5/5 z-50" :src="'duration.png'" :alt="'stoodux'" :title="'stoodux'" />
</div> 
<div class="container mx-auto flex flex-wrap pt-4 pb-12">

<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden ">
         <div class=" flex flex-wrap no-underline hover:no-underline" style="color: black;border-radius: 25px;justify-content: center;">
      <img :src="'Groupe-25.png'"  class="img-fluid" alt="icon2" width="20%"> <p class=" pl-10" style=" margin-top: 2rem;    font-weight: 800;
 ">Find Course</p>
    </div>
        </div>
       
      </div>



      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden ">
         <div class="flex flex-wrap no-underline hover:no-underline" style="color: black;border-radius: 25px;justify-content: center;">
      <img :src="'Groupe-26.png'" class="img-fluid" alt="icon2" width="20%"><p class=" pl-10" style=" margin-top: 2rem;    font-weight: 800;
 "> Book Seat</p>
    </div>
        </div>
       
      </div>



      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden ">
          <div class="flex flex-wrap no-underline hover:no-underline" style="color: black;border-radius: 25px;justify-content: center;">
      <img :src="'Groupe-27.png'" class="img-fluid" alt="icon2" width="20%"> <p class=" pl-10" style=" margin-top: 2rem;    font-weight: 800;
 ">Certificate</p>
    </div>
        </div>
       
      </div>

</div>
  </section>
</template>
<style scoped>
.flex.flex-wrap.no-underline.hover\:no-underline {
    background: #f8f9fa;
}
</style>
