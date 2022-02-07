<template>
  <div class="dt-action-container">
    

    <router-link
      class="btn  btn-primary"
      v-if="$can(xprops.permission_prefix + 'edit')"
      :to="{ name: xprops.route2 + '.create' }"
    >
      <i class="material-icons">add</i>
    </router-link>

   
  </div>
</template>

<script>
export default {
  props: ['row', 'xprops'],
  data() {
    return {
      // Code...
    }
  },
  created() {
    // Code...
  },
  computed: {
    hasStatus() {
            return this.row.hasOwnProperty('status');
    },
},
  methods: {
 
  }
}
</script>
