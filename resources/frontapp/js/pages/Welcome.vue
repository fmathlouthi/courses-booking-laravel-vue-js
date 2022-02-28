<template>
  <div >
    <navbar/>
    <slider/>
    

    
  </div>
</template>
<script>

import navbar from "./../shared/components/NavBar.vue";
import slider from "./../shared/components/slider.vue";
import { mapState, mapGetters } from "vuex";
import { logIn } from "./../shared/utils/auth";
  
  export default {
    components: {
    navbar,
      slider,
    },
     data() {
            return {
                courses: {}
            }
        },
          computed: {
              login() {
      this.loading = true;
      this.errors = null;
      
       
        logIn();
        this.$store.dispatch("loadUser");
      
      this.loading = false;
    },
    ...mapState({
      lastSearchComputed: "lastSearch",
      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({
      itemsInBasket: "itemsInBasket"
    }),
   
  },
    mounted() {
       axios.get('universities-courses')
                .then(response => {
                    this.courses = response.data.data;
                });
      window.addEventListener('scroll', this.handleScroll);
    },
    beforeDestroy() {
      window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {

    }

  }
</script>
