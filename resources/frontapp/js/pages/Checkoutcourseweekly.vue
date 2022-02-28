 
 <template>
 <div>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <navbarsecond/>
 <div class="container  mt-5">
 
 <success  v-if="success">Congratulations on your purchase!</success>
 <emptycard  v-if="emptycard">Congratulations on your purchase!</emptycard>
 
    <div id="paymentForm"  v-if="basket.length" >
     <div class="py-5 text-center">
    
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>
       <div class="alert alert-danger" v-if="errorFor('customer.first_name')" v-cloak>
           Please check the form and try again!
       </div>
       <div class="row">
           <div class="col-md-4 order-md-2 mb-4">
               <h4 class="d-flex justify-content-between align-items-center mb-3">
                   <span class="text-muted">Your cart</span>
                   <span class="badge badge-secondary badge-pill">{{itemsInBasket}}</span>
               </h4>
               <ul class="list-group mb-3">
                   <li class="list-group-item d-flex justify-content-between lh-condensed" v-for="item in basket" :key="item.bookable.id">
                       <div>
                           <h6 class="my-0" v-text="item.bookable.coursename"></h6>
                           <small class="text-muted" v-text="item.bookable.universityname"></small>
                       </div>
                       <span class="text-muted" v-text="'$' + item.bookable.total "></span>
                       <a href="#" @click="removeFromBasket(item.bookable.idcourse)" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
          
                   </li>
                   <li class="list-group-item d-flex justify-content-between">
                       <span>Total (USD)</span>
                       <strong > ${{ total.to }}</strong>
                   </li>
               </ul>
               
               <div v-if="total.discount"> 
           
         <div class="list-group-item d-flex justify-content-between">
                       <span class="text-success">discount (USD)</span>
                       <strong > ${{ total.discount }}</strong>
                   </div>
        </div>
        <div class="card p-2"style="
    background: #fff !important;
"  v-else>
        <div class="input-group">
                   <input type="text" v-model="promocode" class="form-control" placeholder="Promo code">
                   <div class="input-group-append">
                       <button type="button" @click="promocodefunction(total.from )" class="btn btn-secondary">Redeem</button>
                   </div>
        </div>
           </div>
               </div>
                 
   
           <div class="col-md-8 order-md-1">
               <h4 class="mb-3">Billing address</h4>
               <div class="row">
                   <div class="col-md-6 mb-3" >
                       <label for="name">First name</label>
                       <input v-model="customer.first_name" name="firstName" type="text" class="form-control" id="name" placeholder="" value="" :class="[{'is-invalid': errorFor('customer.first_name')}]">
                       <v-errors :errors="errorFor('customer.first_name')"></v-errors>
                   </div>
                   <div class="col-md-6 mb-3">
                       <label for="lastName">Last name</label>
                       <input v-model="customer.last_name" name="last_name" type="text" class="form-control" id="lastName" placeholder="" value="" :class="[{'is-invalid': errorFor('customer.last_name')}]">
                       <v-errors :errors="errorFor('customer.last_name')"></v-errors>
                   </div>
               </div>
   
               <div class="mb-3">
                   <label for="username">Phone</label>
                   <div class="input-group">
                       
                       <input v-model="customer.phone" name="phone" type="text" placeholder="phone" class="form-control" id="phone"  
                       :class="[{'is-invalid': errorFor('customer.phone')}]">
                        <v-errors :errors="errorFor('customer.phone')"></v-errors>
                   </div>
               </div>
   
               <div class="mb-3">
                   <label for="email">Email <span class="text-muted">(Optional)</span></label>
                   <input v-model="customer.email" name="email" type="email" class="form-control" id="email" placeholder="you@example.com" :class="[{'is-invalid': errorFor('customer.email')}]">
                   <v-errors :errors="errorFor('customer.email')"></v-errors>
               </div>
   
               <div class="mb-3">
                   <label for="address">Address</label>
                   <input  v-model="customer.address_1" name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" :class="[{'is-invalid': errorFor('customer.address_1')}]">
                   <v-errors :errors="errorFor('customer.address_1')"></v-errors>
               </div>
   
             <div class="mb-3">
                        <label name="address2" for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input v-model="customer.address_2" type="text" class="form-control" id="address2" placeholder="Apartment or suite" :class="[{'is-invalid': errorFor('customer.address_2')}]">
                        <v-errors :errors="errorFor('customer.address_2')"></v-errors>
                    </div>
   
               <div class="row">
                   <div class="col-md-3 mb-3">
                       <label name="country" for="country">Country</label>
                       <select v-model="customer.country" class="custom-select d-block w-100" id="country" >
                           <option value="">Choose...</option>
                           <option value="United States">United States</option>
                       </select>
                       
                   </div>
                   <div class="col-md-3 mb-3">
                       <label for="city">City</label>
                       <input name="city" class="custom-select d-block w-100" id="city">
                       
                   </div>
                   <div class="col-md-3 mb-3">
                       <label for="state">State</label>
                       <select  name="state" class="custom-select d-block w-100" id="state" >
                           <option value="">Choose...</option>
                           <option value="California">California</option>
                       </select>
                       
                   </div>
                   <div class="col-md-3 mb-3">
                       <label for="zip">Zip</label>
                       <input v-model="customer.post_code" name="zip" type="text" class="form-control" id="zip" placeholder="" :class="[{'is-invalid': errorFor('customer.post_code')}]">
                       <v-errors :errors="errorFor('customer.post_code')"></v-errors>
                   </div>
                  
                   
               </div>
     
                             <div class="mb-3">
                   <label for="password">password</label>
                   <div class="input-group" style="
    border: 1px solid #ced4da;
">
                       
                       <input v-model="customer.password" name="password" type="password" placeholder="password" class="form-control" id="password"  
                       :class="[{'is-invalid': errorFor('customer.password')}]">
                        <v-errors :errors="errorFor('customer.password')"></v-errors>
                   </div>
               </div>
               <hr class="mb-4">
               
   
               <div class="custom-control custom-checkbox">
                   <input  name="save_info" type="checkbox" class="custom-control-input" id="save-info">
                   <label class="custom-control-label" for="save-info">Save this information for next time</label>
               </div>
               <hr class="mb-4">
   
               
              
   
               
               <input  type="hidden" name="dataValue" id="dataValue" />
               <input  type="hidden" name="dataDescriptor" id="dataDescriptor" />
               <button @click.prevent="book" class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
               <div class="w-100">
                <div class="mx-auto w-50" ref="paypal"></div>
             </div>
           </div>
       </div>
    </div>
   </div>
  
</div>
        
</div>
</template>
<script>
import navbarsecond from "./../shared/components/NavBarsecond.vue";
import { mapState, mapGetters } from "vuex";
import validationErrors from "./../shared/mixins/validationErrors";
    export default {
      mixins: [validationErrors],
       props: {
    price: Object
  },
 
         components: {
      navbarsecond
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
    },
      emptycard() {
      return !this.loading && 0 === this.itemsInBasket && !this.success;
    }
  },
created(){
 //this.setpricetotal();
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
