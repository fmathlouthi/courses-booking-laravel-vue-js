<template>
   <section class="text-gray-700 body-font overflow-hidden relative pt-16 bg-blueGray-50">
        
<div class="container px-5 py-24 mx-auto">
    <div class="w-1/2 m-auto">
      <div v-if="!submitted">
        <component
          v-bind:is="steps[currentStep].component"
          v-bind:formValue="formValue[steps[currentStep].label]"
          @formValueChange="updateFormValue"
        />
        <div class="text-center">
          <button v-if="currentStep !== 0" v-on:click="previous" class="step-button step-button-previous btn text-center p-5 text-5xl mt-4">
            Previous
          </button>
          <button  v-if="currentStep < steps.length - 1" v-on:click="next" class="step-button step-button-next btn text-center p-5 text-5xl mt-4">
            NEXT 
          </button>
          
          <button v-else class="step-button step-button-submit" v-on:click="submit">
            Submit
          </button>
        </div>
      </div>
      <div v-else class="text-5xl font-bold text-center shadow-lg p-10">
        <span><span class="text-green-500">Thank you for submitting the form.</span> <br/><br/> We will get back to you soon.</span>
      </div>
    </div>
    </div>

        <footer-component></footer-component>
    </section>
</template>

<script>
import FooterComponent from '../components/FooterComponent.vue';
import Information from '../components/Steps/Information.vue';
import About from '../components/Steps/About.vue';
import Profile from '../components/Steps/Profile.vue';
export default {
  name: 'MultiSteps',
  data () {
    return {
      currentStep: 0,
      submitted: false,
      formValue: {
        information: {
          name: '',
          age: 0,
          dob: '',
          email: ''
        },
        about: {
          address: '',
          gender: ''
        },
        profile: {
          profilePicture: '',
          bio: ''
        },
      },
      steps: [
        {
          component: Information,
          label: 'information'
        },
        {
          component: About,
          label: 'about'
        },
        {
          component: Profile,
          label: 'profile'
        }
      ]
    }
  },
  methods: {
    next () {
      this.currentStep += 1;
    },
    previous () {
      this.currentStep -= 1;
    },
    updateFormValue (payload) {
      this.formValue = {
        ...this.formValue,
        [payload.label]: payload.data
      }
    },
    submit () {
      this.submitted = true;
      console.log(this.formValue)
    }
  },
  components: {
    Information,
    About,
    Profile,
    FooterComponent
  }
}
</script>
<style scoped>
 .step-button-submit{
    background-color: #4fa203;
  }
  .step-button{
    font-weight: 700;
    line-height: 1;
    text-transform: uppercase;
    position: relative;
    max-width: 30rem;
    text-align: center;
    border: 1px solid;
    border-radius: 12px;
    color: #22292f;
    color: rgba(34,41,47,var(--text-opacity));
    padding: 0.5rem 1.25rem;
    font-size: .875rem;
    margin: 0.5rem;
    color: #fff;
    outline: none !important;
    box-shadow: none !important;
  }
  .step-button-next{
    background-color: #126fde;
  }
  .step-button-previous{
    background-color: #3deaba;
  }
</style>
