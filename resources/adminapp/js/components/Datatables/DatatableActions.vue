<template>
  <div class="dt-action-container">
    <router-link
      v-if="$can(xprops.permission_prefix + 'show')"
      :to="{ name: xprops.route + '.show', params: { id: row.id } }"
      class="btn btn-just-icon btn-round btn-link text-azure"
    >
      <i class="material-icons">remove_red_eye</i>
    </router-link>

    <router-link
      class="btn btn-just-icon btn-round btn-link text-success"
      v-if="$can(xprops.permission_prefix + 'edit')"
      :to="{ name: xprops.route + '.edit', params: { id: row.id } }"
    >
      <i class="material-icons">edit</i>
    </router-link>

    <a
      href="#"
      class="btn btn-just-icon btn-round btn-link text-rose"
      v-if="$can(xprops.permission_prefix + 'delete')"
      @click.prevent="destroyData(row.id)"
      type="button"
    >
      <i class="material-icons">delete</i>
    </a>
         <a
      href="#"
      class="btn btn-just-icon btn-round btn-link "
      v-if="hasStatus"
      @click.prevent="activeData(row.id)"
      type="button"
    >
      <i class="material-icons text-success" v-if="row.status == 'active'">notifications_active</i>
      <i class="material-icons text-rose" v-else>notifications_active</i>
    </a>
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
    destroyData(id) {
      this.$swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        confirmButtonColor: '#dd4b39',
        focusCancel: true,
        reverseButtons: true
      }).then(result => {
        if (result.value) {
          this.$store
            .dispatch(this.xprops.module + '/destroyData', id)
            .then(result => {
              this.$eventHub.$emit('delete-success')
            })
        }
      })
    },
        activeData(id) {
     this.$store
            .dispatch(this.xprops.module + '/activeData', id)
            .then(result => {
              this.$eventHub.$emit('update-success')
            })
    },
  }
}
</script>
<style scoped>
.btn.btn-just-icon {
    font-size: 20px;
    height: 30px;
    min-width: 30px;
    width: 30px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}
</style>
