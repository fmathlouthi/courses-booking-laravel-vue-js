<template>
  <div>
    <span
      class="badge badge-pill badge-success mr-1"
      v-for="(item, key) in row[entry.key]"
      :key="key"
    >
     <router-link
     style=" color: #fbf8fb !important; "
      :to="{ name: xprops.route2 + '.edit', params: { id: item[entry.id] } }"
    >
      {{ item[entry.field] }}
    </router-link>
      
    </span>
      
  </div>
</template>

<script>
export default {
  props: ['field', 'row','xprops'],
  computed: {
    entry() {
      let s = _.split(this.field, '.')
      return {
        key: s[0],
        field: s[1],
        id: 'id'
      }
    }
  }
}
</script>

<style scoped>
.badge {
  font-size: 0.875rem;
  font-weight: 500;
  text-transform: none;
}
</style>
