<template>
<div class="shadow-2xl rounded p-3">
<div class="grid grid-cols-6 gap-4">
  <div class="col-start-2 col-span-4 bg-white p-3 rounded">
      <h6 class="font-semibold">price breakdown</h6>
  </div>
</div>
<div class="grid grid-cols-6 gap-4 bg-white p-3 rounded">
  <div class="col-start-1 col-end-3 font-semibold">Start Date : </div>
  <div class="col-end-7 col-span-2">{{ price.startDate }}</div>
</div>
<div class="grid grid-cols-6 gap-4 bg-white p-3 rounded">
  <div class="col-start-1 col-end-3 font-semibold">Weeks number course : </div>
  <div class="col-end-7 col-span-2">{{ price.weeksnumber }}</div>
</div>
<div class="grid grid-cols-6 gap-4 bg-white p-3 rounded">
  <div class="col-start-1 col-end-3 font-semibold">Weeks number accommodation : </div>
  <div class="col-end-7 col-span-2">{{ price.weeksnumberaccom }}</div>
</div>
 <div
 v-for="(days, price) in price.breakdown"
      :key="price"
      class="grid grid-cols-6 gap-4 bg-white p-3 rounded"
      >
      <div class="col-start-1 col-end-4">{{ price }} </div>
       <div class="col-end-7 col-span-2">${{ days[1] }}</div>
 </div>
  
<div class="grid grid-cols-6 gap-4 bg-white p-3 rounded">
  <div class="col-start-1 col-end-3 font-semibold">Total : </div>
  <div class="col-end-7 col-span-2">${{ price.total }}</div>
</div>


   <div class="flex border-t border-gray-300 mt-5 pt-5">
                    <router-link :to="{ path: '/checkoutcourseweekly'}" 
                    @click.native="addToBasket"
                    class="bg-gray-800 duration-200 focus:outline-none focus:shadow-outline font-medium h-12 hover:bg-gray-900 inline-flex items-center justify-center px-6 text-white tracking-wide transition w-full">
                    
                        Checkout
                  
                     </router-link>
                </div>
  </div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
export default {
  props: {
    price: Object
  },
  
        methods: {
          addToBasket(){
            this.$store.dispatch("addToBasket", {
        bookable: this.price,
        price: this.price.total,
      });
       this.$store.dispatch("setLastSearch", {
        from: this.price.total,
        discount: 0,
        to: this.price.total,
        coupon: null
      });
          }
        },
        
};
</script>
