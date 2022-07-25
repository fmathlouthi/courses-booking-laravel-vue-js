<template>
<div >
 <div class="bg-pay p-3"> 
 <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Course DURATION :</span> </div>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500"><strong>Start Date</strong> : {{ price.startDate }}</span> <span><strong>End Date</strong> : {{ price.fromdate  }}</span> </div>
               
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Weeks number course :</span> <span>{{ price.weeksnumber }}</span> </div>
                <hr>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">accommodation DURATION :</span> </div>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500"><strong>Start Date</strong> : {{ price.startDate }}</span> <span><strong>End Date</strong> : {{ price.todateaccom  }}</span> </div>
               
                <div class="d-flex justify-content-between mt-2"> <span class="lh-16 fw-500">Weeks number  : </span> <span>{{ price.weeksnumberaccom }}</span> </div>
                
                <hr>
                 <div
 v-for="(days, price) in price.breakdown"
      :key="price"
      
      >
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">{{ price }} </span> <span>${{ days[1] }}</span> </div>
          </div>
                <hr>
                <div class="d-flex justify-content-between mt-2"> <span class="fw-500">Total </span> <span class="text-success">${{ price.total }}</span> </div>
                 <hr>
                <div class="d-flex justify-content-between mt-2">
                 <router-link :to="{ path: '/checkoutcourseweekly'}" 
                    @click.native="addToBasket"
                    class="bg-gray-800 duration-200 focus:outline-none focus:shadow-outline font-medium h-12 hover:bg-gray-900 inline-flex items-center justify-center px-6 text-white tracking-wide transition w-full">
                    
                        Checkout
                  
                     </router-link> </div>
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
        type: 'course-weekly',
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
