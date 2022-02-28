<template>
  <div>
    
      <router-view></router-view>
    
    <footerCom/>
  </div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
import footerCom from "./footer.vue";

export default {
   components: {
      
      footerCom,
      }, 
  data() {
    return {
      lastSearch: this.$store.state.lastSearch
    };
  },
  computed: {
    ...mapState({
      lastSearchComputed: "lastSearch",
      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({
      itemsInBasket: "itemsInBasket"
    }),
    somethingElse() {
      return 1 + 2;
    }
  },
  methods: {
    async logout() {
      try {
        axios.post("/logout");
        this.$store.dispatch("logout");
      } catch (error) {
        this.$store.dispatch("logout");
      }
    }
  }
};
</script>
