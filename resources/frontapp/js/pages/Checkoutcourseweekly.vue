 
 <template>
  <section class="text-gray-700 body-font overflow-hidden bg-gray-100">
    <div class="container px-5 py-24 mx-auto ">
      <success  v-if="success">Congratulations on your purchase!</success>
      <div class='flex items-center justify-center min-h-screen' v-if="!basket.length && !success">
 <section class="text-center mx-6 lg:w-2/3">
	<img class="m-auto w-24 lg:w-48" src="https://github.com/pharmawala/pharmawala.com/raw/main/logo.png" />
	<h1 class="mt-2 mb-1 text-2xl lg:text-3xl">We'll be back soon!</h1>
	<div>
		<p>
			Sorry for the inconvenience. We&rsquo;re performing some maintenance
			at the moment. You can always follow us on
			<a class="text-blue-700 font-semibold hover:underline hover:decoration-wavy" href="https://twitter.com/_pharmawala">Twitter</a> for more updates.
		</p>
    <div class="my-8">
		<router-link to="/" class="text-white bg-indigo-500 rounded-md border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 text-lg">Back to book</router-link>
	</div>
  </div>
</section>
</div>
         <div class="flex shadow-md my-10" v-if="basket.length">
      <div class="w-3/4 bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Shopping Cart</h1>
          <h2 class="font-semibold text-2xl">Items {{itemsInBasket}}</h2>
        </div>
        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">course Details</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">weeks number</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Start date</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>
        <div v-for="item in basket" :key="item.bookable.id">
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
          <div class="flex w-2/5"> <!-- product -->
           <!-- <div class="w-20">
              <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
            </div>-->
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <router-link
                  :to="{name: 'bookable', params: {id: item.bookable.id}}"
                >{{ item.bookable.title }}
              <span class="font-bold text-sm">{{ item.bookable.coursename }}</span>
              <span class="text-red-500 text-xs">{{ item.bookable.universityname }}</span>
              </router-link>
              <a href="#" @click="removeFromBasket(item.bookable.idcourse)" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
            </div>
          </div>
          <div class="flex justify-center w-1/5">
            

           <span class="text-center w-1/5 font-semibold text-sm">{{ item.bookable.weeksnumber }}</span>

            
          </div>
          <span class="text-center w-1/5 font-semibold text-sm" v-if="item.bookable.startDate.starting_date">{{ item.bookable.startDate.starting_date }}</span>
          <span class="text-center w-1/5 font-semibold text-sm" v-else>{{ item.bookable.startDate }}</span>
          <span class="text-center w-1/5 font-semibold text-sm">${{ item.bookable.total }}</span>
        </div>
        </div>
        

      

        <router-link to="/" class="flex font-semibold text-indigo-600 text-sm mt-10">
      
          <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
          Continue Shopping
        </router-link>
          <div class="mt-20">
            <h1 class="flex items-center justify-left font-bold text-blue-600 text-md lg:text-2xl">Tailwind CSS
                Ecommerce
                Checkout Page UI
            </h1>
        </div>
        <div class="container p-12 mx-auto">
            <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
                <div class="flex flex-col md:w-full">
                    <h2 class="mb-4 font-bold md:text-xl text-heading ">Shipping Address
                    </h2>
                    <div class="justify-center w-full mx-auto">
                        <div class="">
                            <div class="space-x-0 lg:flex lg:space-x-4">
                                <div class="w-full lg:w-1/2">
                                    <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">First
                                        Name</label>
                                    <input v-model="customer.first_name" 
                                    name="firstName"
                                     type="text"
                                      placeholder="First Name"
                                      class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                      :class="[{'is-invalid': errorFor('customer.first_name')}]"
                                      />
                                      <v-errors :errors="errorFor('customer.first_name')"></v-errors>
                                </div>
                                <div class="w-full lg:w-1/2 ">
                                    <label for="last_name" class="block mb-3 text-sm font-semibold text-gray-500">Last
                                        Name</label>
                                    <input v-model="customer.last_name" name="last_name" type="text" placeholder="Last Name"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        :class="[{'is-invalid': errorFor('customer.last_name')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.last_name')"></v-errors>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="w-full">
                                    <label for="Email"
                                        class="block mb-3 text-sm font-semibold text-gray-500">Email</label>
                                    <input v-model="customer.email" name="Email" type="text" placeholder="Email"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.email')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.email')"></v-errors>
                                </div>
                            </div>
                              <div class="space-x-0 lg:flex lg:space-x-4">
  
 <div class="w-full lg:w-1/2">
 
<label for="phone" class="block mb-3 text-sm font-semibold text-gray-500">phone</label>
<input v-model="customer.phone" name="phone" type="text" placeholder="phone"
 class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.phone')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.phone')"></v-errors>
 
</div>
<div class="w-full lg:w-1/2 ">

<label for="country" class="block mb-3 text-sm font-semibold text-gray-500">country</label>
<input v-model="customer.country" name="country" type="text" placeholder="country"
class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.country')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.country')"></v-errors>

 </div>
 
 
</div>
                             <div class="space-x-0 lg:flex lg:space-x-4">
  
 <div class="w-full lg:w-1/2">
 
<label for="address_1" class="block mb-3 text-sm font-semibold text-gray-500">address_1</label>
<input v-model="customer.address_1" name="address_1" type="text" placeholder="address_1"
 class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.address_1')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.address_1')"></v-errors>
 
</div>
<div class="w-full lg:w-1/2 ">

<label for="address_2" class="block mb-3 text-sm font-semibold text-gray-500">address_2</label>
<input v-model="customer.address_2" name="address_2" type="text" placeholder="address_2"
class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.address_2')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.address_2')"></v-errors>

 </div>
 
 
</div>
                            <div class="space-x-0 lg:flex lg:space-x-4">
                                <div class="w-full lg:w-1/2">
                                    <label for="post_code"
                                        class="block mb-3 text-sm font-semibold text-gray-500">post_code</label>
                                    <input v-model="customer.post_code" name="post_code" type="text" placeholder="post_code"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.post_code')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.post_code')"></v-errors>
                                </div>
                                 <div class="w-full lg:w-1/2">
                                    <label for="password"
                                        class="block mb-3 text-sm font-semibold text-gray-500">Set password</label>
                                    <input v-model="customer.password" name="password" type="text" placeholder="password"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                         :class="[{'is-invalid': errorFor('customer.password')}]"
                                        
                                        />
                                        <v-errors :errors="errorFor('customer.password')"></v-errors>
                                </div>
                            </div>
                            <div class="flex items-center mt-4">
                                <label class="flex items-center text-sm group text-heading">
                                    <input type="checkbox"
                                        class="w-5 h-5 border border-gray-300 rounded focus:outline-none focus:ring-1">
                                    <span class="ml-2">Save this information for next time</span></label>
                            </div>
                            
                           <button @click.prevent="book"
              
              
               class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
               <div class="w-100">
                <div class="mx-auto w-50" ref="paypal"></div>
             </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      </div>

      <div id="summary" class="w-1/4 px-8 py-10">
        <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">Items {{itemsInBasket}}</span>
          <span class="font-semibold text-sm">${{ total.from }}</span>
        </div>
      <!--  <div>
          <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
          <select class="block p-2 text-gray-600 w-full text-sm">
            <option>Standard shipping - $10.00</option>
          </select>
        </div>-->
        <div v-if="total.discount"> 
           <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>discount</span>
            <span>${{ total.discount }}</span>
          </div>
          
        </div>
        </div>
        <div v-else>
        <div class="py-10">
          <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
          <input  v-model="promocode" type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
        </div>
        
        <button @click="promocodefunction(total.from )" class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
        </div>
        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>Total cost</span>
            <span>${{ total.to }}</span>
          </div>
          
        </div>
      </div>

    </div>
    </div>
    <footer-component></footer-component>
</section>

</template>
<script>
import FooterComponent from '../components/FooterComponent.vue';
import { mapState, mapGetters } from "vuex";
import validationErrors from "./../shared/mixins/validationErrors";
    export default {
      mixins: [validationErrors],
       props: {
    price: Object
  },
 
         components: {
      FooterComponent,
      },
         data(){
      return {
      product : [],
      loading: false,
      bookingAttempted: false,
      promocode: null,
      sum:0,
      customer: {
         id: null,
            first_name: null,
            last_name: null,
            phone: null,
            email: null,
            country: null,
            post_code: null,
            address_1: null,
            address_2: null,
            created_at: null,
            updated_at: null,
            deleted_at: null,
            password: null
      }, 
            };
        },
        
         computed: {
    
    ...mapState({
      basket: state => state.basket.items,
      total: state => state.lastSearch,
      isLoggedIn: "isLoggedIn"
      
    }),
    ...mapGetters({
      itemsInBasket: "itemsInBasket"
    }),
     success() {
      return !this.loading && 0 === this.itemsInBasket && this.bookingAttempted;
    }
  },
created(){
 this.setpricetotal();
}, 
  mounted: function() {
    const script = document.createElement("script");
    script.src =
      "https://www.paypal.com/sdk/js?client-id=AbAduUWN2Ex6BkjyekZMl-xeViXp85v9KlotMcjRvkiJ2QUz3c1KJnOTbj6H6-ye6dRgY83V8FZx__s6";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  },
      methods:{
         setLoaded: function(resp) {
      this.loaded = true;
      window.paypal
        .Buttons({
        createOrder(data, actions) {
      return actions.order.create({
          purchase_units: [{
              amount: {
                  value: '0.01'
              }
          }]
      });
    },
    onApprove(data, actions) {
      return actions.order.capture();
    },
          onError: err => {
            console.log(err);
          }
        })
        .render(this.$refs.paypal);
    },
        setpricetotal(){
 this.sum = this.basket.reduce((accumulator, item) => accumulator + item.bookable.price, 0);
  this.$store.dispatch("setLastSearch", {
        from: this.sum,
        discount: 0,
        to: this.sum,
        coupon: null
      });
        },
      promocodefunction(price){
            axios.get(`courseweekliesdiscountprice?total=${price}&promocode=${this.promocode}`)
            .then(response => {
                console.log(response.data)
                
        this.$store.dispatch("setLastSearch", {
        discount: response.data.discount,
        to: response.data.totalafterdiscount,
        from: response.data.total,
        coupon: response.data.coupon,
      });
            })
            .catch(error => {
                console.error(error);
            })  
      
          },

        removeFromBasket(id) {
      this.$store.dispatch("removeFromBasket", id);
    },
    async book() {
      this.loading = true;
      this.bookingAttempted = false;
      this.errors = null;
      try {
        await axios.post(`checkout`, {
          customer: this.customer,
          bookings: this.basket,
          discount: this.total
        });
        this.$store.dispatch("clearBasket");
      } catch (error) {
        this.errors = error.response && error.response.data.errors;
      }
      this.loading = false;
      this.bookingAttempted = true;
    }
      },


    }
</script>
