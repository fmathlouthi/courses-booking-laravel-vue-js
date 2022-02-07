<template>
  <div>
    <span
      class="badge badge-pill badge-info mr-1"
      v-for="(item, key) in row[entry.key]"
      :key="key"
    >
      {{ item[entry.field] }}
    </span>
   
  </div>
</template>

<script>
export default {
  props: ['field', 'row'],
  computed: {
    entry() {
      let s = _.split(this.field, '.')
      return {
        key: s[0],
        field: s[1]
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
