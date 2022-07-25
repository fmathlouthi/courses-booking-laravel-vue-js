 <template>
  <div class="radio-button-group">
   <label :for="option" v-for="option in options" :key="option">
    <input type="radio" :name=name :value="option" 
     :id="option" 
    @change="$emit('input', option)" />
    {{ option }}
   </label>
  </div>
 </template>

<script>
 export default {
  name: 'BaseRadioButtonGroup',
  props: {
    options: {
     required: true,
     type: Array
    },
    name:'',
  }
 }
</script>

<style>
 .radio-button-group {
width: 60%;
  padding: 15px 20px;
  border-radius: 8px;
  justify-content: space-between;
  padding: 1.5rem;
    margin-right: 0;
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
</style>
