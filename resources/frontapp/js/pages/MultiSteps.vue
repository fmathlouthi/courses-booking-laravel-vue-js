<template>
  <div>
    <navbarsecond />
    <form-wizard
      ref="formwizard"
      @onComplete="onComplete"
      @onNextStep="nextStep"
      @onPreviousStep="previousStep"
      @onReset="reset"
    >
      <tab-content title="Personal information" :selected="true">
        <!--Section: Contact v.2-->
        <section class="mb-4">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold my-4">Personal Information</h2>
          <!--Section description-->

          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="fullName">Full Name</label>
                      <input
                        type="text"
                        class="form-control"
                        :class="hasError('fullName') ? 'is-invalid' : ''"
                        placeholder="Enter your name"
                        v-model="formData.fullName"
                      />
                      <div v-if="hasError('fullName')" class="invalid-feedback">
                        <div class="error" v-if="!$v.formData.fullName.required">
                          Please provide a valid name.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="email">Email address *</label>
                      <input
                        type="email"
                        class="form-control"
                        :class="hasError('email') ? 'is-invalid' : ''"
                        placeholder="Enter your email"
                        v-model="formData.email"
                      />
                      <div v-if="hasError('email')" class="invalid-feedback">
                        <div class="error" v-if="!$v.formData.email.required">
                          Email field is required
                        </div>
                        <div class="error" v-if="!$v.formData.email.email">
                          Should be in email format
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3">
              <div class="md-form mb-0">
                <label>Nationality</label>
                <model-select
                  :options="options"
                  v-model="formData.nationality"
                  placeholder="select item"
                >
                </model-select>
              </div>
            </div>
            <!--Grid column-->
          </div>
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label>phone number *</label>
                      <VuePhoneNumberInput v-model="formData.phone" />
                      <div v-if="hasError('phone')" class="invalid-feedback">
                        <div class="error" v-if="!$v.formData.phone.required">
                          Please provide a valid phone number.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <div>
                        <label for="example-datepicker">Your date of Birth</label>
                        <b-form-datepicker
                          id="example-datepicker"
                          v-model="formData.dBirth"
                          class="mb-2"
                        ></b-form-datepicker>
                      </div>
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3">
              <div class="md-form mb-0">
                <label>Gender</label>
                <b-form-radio-group
                  v-model="formData.gender"
                  :options="optionsg"
                  class="mb-3"
                  value-field="item"
                  text-field="name"
                  disabled-field="notEnabled"
                ></b-form-radio-group>
              </div>
            </div>
            <!--Grid column-->
          </div>
        </section>
        <!--Section: Contact v.2-->
        <!--Section: Contact v.2-->
        <section class="mb-4">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold my-4">COURSE AND DEGREE</h2>
          <!--Section description-->

          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label>Level of study</label>
                      <model-select
                        :options="levelstudyoptions"
                        v-model="formData.levelofstudy"
                        placeholder="select item"
                      >
                      </model-select>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="email">Subject of interest *</label>
                      <model-select
                        :options="subjectinterest"
                        v-model="formData.subjectinterestitem"
                        placeholder="select item"
                      >
                      </model-select>
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
          </div>
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <div class="form-group">
                        <label for="preferredintake">Preferred intake *</label>
                        <input
                          type="text"
                          class="form-control"
                          :class="hasError('preferredintake') ? 'is-invalid' : ''"
                          placeholder="Enter your preferred intake"
                          v-model="formData.preferredintake"
                        />
                        <div v-if="hasError('preferredintake')" class="invalid-feedback">
                          <div class="error" v-if="!$v.formData.preferredintake.required">
                            Please provide a valid preferred intake.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <div class="form-group">
                        <label for="ProgressionUniversitydegree"
                          >Progression University degree *</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          :class="
                            hasError('ProgressionUniversitydegree') ? 'is-invalid' : ''
                          "
                          placeholder="Enter your Progression University degree "
                          v-model="formData.ProgressionUniversitydegree"
                        />
                        <div
                          v-if="hasError('ProgressionUniversitydegree')"
                          class="invalid-feedback"
                        >
                          <div
                            class="error"
                            v-if="!$v.formData.ProgressionUniversitydegree.required"
                          >
                            Please provide a valid Progression University degree.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
          </div>
        </section>
        <!--Section: Contact v.2-->
      </tab-content>
      <tab-content title="ACADEMIC INFORMATION">
        <!--Section: Contact v.2-->
        <section class="mb-4">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold my-4">ACADEMIC INFORMATION</h2>
          <!--Section description-->

          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <h3>UNIVERSITY OR COLLEGE</h3>
                      <label>Do you have a university or college degree?*</label>
                      <BaseRadioButtonGroup
                        v-model="formData.decision"
                        :name="'decision'"
                        :options="optionsf"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <h3>SECONDARY SCHOOL</h3>
                      <label>Do you have a Secondary school degree?*</label>
                      <BaseRadioButtonGroup
                        v-model="formData.ssdeg"
                        :name="'ssdeg'"
                        :options="optionsf"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <h3>ENGLISH PROFICIENCY</h3>
                      <label>Have you taken a recognised English Language TEST?*</label>
                      <BaseRadioButtonGroup
                        v-model="formData.engp"
                        :name="'engp'"
                        :options="optionsf"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
        </section>
        <!--Section: Contact v.2-->
      </tab-content>
      <tab-content title="Address">
        <!--Section: Contact v.2-->
        <section class="mb-4">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold my-4">
            THESE DETAILS ARE ALWAYS REQUIRED FOR VISAS AND OFTEN BY THE UNIVERSITY TOO.
          </h2>
          <!--Section description-->

          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <label>Tick Your primary source of funding*</label>
                      <BaseRadioButtonGroup
                        v-model="formData.funding"
                        :name="'funding'"
                        :options="optionsfk"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
        </section>
        <section class="mb-4">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold my-4">ADDRESS:</h2>
          <!--Section description-->

          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="address1">Address line 1</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Address line 1"
                        v-model="formData.address1"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="address2">Address line 2</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Address line 2"
                        v-model="formData.address2"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row mt-3">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="city">City</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter your City"
                        v-model="formData.city"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="zip">Postal / Zip code</label>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Postal / Zip code"
                        v-model="formData.zip"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row mt-4">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label for="country">Country*</label>
                      <country-select
                        v-model="formData.country"
                        :country="formData.country"
                        topCountry="US"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label>State / Province / Region</label>
                      <region-select
                        v-model="formData.region"
                        :country="formData.country"
                        :regionName="regionName"
                        :region="formData.region"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <label>Do you currently live at this address?</label>
                      <BaseRadioButtonGroup
                        v-model="formData.currently"
                        :name="'currently'"
                        :options="optionscurrently"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
        </section>
      </tab-content>
      <tab-content title="Terms and conditions">
        <!--Section: Contact v.2-->
        <section class="mb-4">
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold my-4">SPECIAL NEEDS</h2>
          <!--Section description-->
          <p>
            If you have any special needs or disabilities that might affect your mobility
            or studies, please tell us about them here. This will help us plan the best
            study environment / support for you.
          </p>
          <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
              <div id="contact-form" name="contact-form">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6">
                    <div class="md-form mb-0">
                      <label>Do you have any special needs?*</label>
                      <BaseRadioButtonGroup
                        v-model="formData.specialneeds"
                        :name="'specialneeds'"
                        :options="optionspecialneeds"
                      />
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12">
                    <div class="md-form mb-0">
                      <label>Questions and comments</label>
                      <b-form-textarea
                        id="textarea"
                        v-model="formData.comments"
                        placeholder="Enter something..."
                        rows="3"
                        max-rows="12"
                      ></b-form-textarea>
                    </div>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>

              <div class="status"></div>
            </div>
            <!--Grid column-->
          </div>
        </section>
        <!--Section: Contact v.2-->
 <!--Section: Contact v.2-->
 <section class="mb-4">
     <!--Section heading-->
     <h2 class="h1-responsive font-weight-bold my-4">TERMS & CONDITIONS</h2>
     <!--Section description-->
     <div class="row">
         <!--Grid column-->
         <div class="col-md-9 mb-md-0 mb-5">
             <div id="contact-form" name="contact-form">
                 <!--Grid row-->
                 <div class="row">
                     <!--Grid column-->
                     <div class="col-md-12">
                         <div class="md-form mb-0">
                            <label>Accuracy declaration</label>
                            <div class="form-group form-check">
                                <input
                                  type="checkbox"
                                  :class="hasError('accuracy') ? 'is-invalid' : ''"
                                  class="form-check-input"
                                  v-model="formData.accuracy"
                                />
                                <label class="form-check-label">I declare that the information I have supplied on and with this form is complete and correct. I declare that I am over 18 or can provide proof of parental consent</label>
                                <div v-if="hasError('accuracy')" class="invalid-feedback">
                                  <div class="error" v-if="!$v.formData.accuracy.required">
                                    Accuracy declaration
                                  </div>
                                </div>
                              </div>
                         </div>
                     </div>
                     <!--Grid column-->
                 </div>
                 <!--Grid row-->
                 <!--Grid row-->
                 <div class="row">
                     <!--Grid column-->
                     <div class="col-md-12">
                         <div class="md-form mb-0">
                            <label>Terms and Conditions</label>
                            <div class="form-group form-check">
                                <input
                                  type="checkbox"
                                  :class="hasError('terms') ? 'is-invalid' : ''"
                                  class="form-check-input"
                                  v-model="formData.terms"
                                />
                                <label class="form-check-label">I accpet terms & conditions</label>
                                <div v-if="hasError('terms')" class="invalid-feedback">
                                  <div class="error" v-if="!$v.formData.terms.required">
                                    Please select terms and conditions.
                                  </div>
                                </div>
                              </div>
                         </div>
                     </div>
                     <!--Grid column-->
                 </div>
                 <!--Grid row-->

             </div>

             <div class="status"></div>
         </div>
         <!--Grid column-->
     </div>
 </section>
 <!--Section: Contact v.2-->
      </tab-content>
    </form-wizard>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
  </div>
</template>

<script>
import navbarsecond from "./../shared/components/NavBarsecond.vue";
import FormWizard from "../components/FormWizard/FormWizard.vue";
import TabContent from "../components/FormWizard/TabContent.vue";
import ValidationHelper from "../components/FormWizard/ValidationHelper.vue";
import { required } from "vuelidate/lib/validators";
import { email } from "vuelidate/lib/validators";
import { numeric } from "vuelidate/lib/validators";
import { ModelSelect } from "vue-search-select";
import VuePhoneNumberInput from "vue-phone-number-input";
import "vue-phone-number-input/dist/vue-phone-number-input.css";
import BaseRadioButtonGroup from "../components/radio.vue";
const checked = (value) => value === true;
export default {
  name: "SimpleStepper",
  components: {
    FormWizard,
    TabContent,
    navbarsecond,
    ModelSelect,
    VuePhoneNumberInput,
    BaseRadioButtonGroup,
  },
  mixins: [ValidationHelper],
  data() {
    return {
      regionName: true,
      country: "",
      region: "",
      optionsf: ["Yes", "No", "Pending"],
      optionscurrently: ["Yes", "No"],
      optionspecialneeds: ["Yes", "No"],
      optionsfk: [
        "I am self-funding or family-funded",
        "I have sponsorship from a government, organisation or individual",
        "I expect to get a scholarship from elsewhere",
        "I have no funding and am seeking a full scholarship",
      ],
      levelstudyoptions: [
        { value: "postgraduate", text: "Postgraduate" },
        { value: "undergraduate", text: "Undergraduate" },
      ],
      optionsg: [
        { item: "Male", name: "Male" },
        { item: "Female", name: "Female" },
      ],
      subjectinterest: [],
      options: [
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Albania", text: "Albania" },
        { value: "Algeria", text: "Algeria" },
        { value: "Andorra", text: "Andorra" },
        { value: "Angola", text: "Angola" },
        { value: "Antarctica", text: "Antarctica" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
        { value: "Afghanistan", text: "Afghanistan" },
      ],

      formData: {
        fullName: "",
        email: null,
        nationality: {
          value: "",
          text: "",
        },
        country: "",
        region: "",
        currently: "No",
        decision: "No",
        specialneeds: "No",
        comments: "",
        engp: "No",
        ssdeg: "No",
        gender: "",
        preferredintake: "",
        ProgressionUniversitydegree: "",
        subjectinterestitem: {
          value: "",
          text: "",
        },
        levelofstudy: "",
        phone: null,
        dBirth: "",
        companyName: null,
        numberOfEmployees: null,
        referral: null,
        terms: false,
        accuracy: false,
      },
      validationRules: [
        {
          fullName: { required },
          email: { required, email },
          phone: { required },
          preferredintake: { required },
          ProgressionUniversitydegree: { required },
        },
      ],
    };
  },
  created: function () {
    this.getSubjects();
  },
  methods: {
    getSubjects: function () {
      axios.get(`/subjectlist`).then(
        function (response) {
          const json = response.data;

          const arr = JSON.parse(JSON.stringify(json));
          arr.forEach((obj) => this.renameKey(obj, "id", "value"));
          arr.forEach((obj) => this.renameKey(obj, "name", "text"));
          this.subjectinterest = arr;
        }.bind(this)
      );
    },
    renameKey(obj, oldKey, newKey) {
      obj[newKey] = obj[oldKey];
      delete obj[oldKey];
      delete obj["status_label"];
    },

    async onComplete() {
          
      this.loading = true;
      this.bookingAttempted = false;
      this.errors = null;
      try {
        await axios.post(`newrequest`, {
          data: this.formData,
          uid: this.$route.params.id
        });
      } catch (error) {
        this.errors = error.response && error.response.data.errors;
      }
    
      await this.$refs.formwizard.changeStatus();
       await this.$swal({
              title: 'Good job',
              text: "Your Request has been registred !",
              type: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Confirm!'
            }).then((result) => {
              if (result.value) {
               this.$router.push({ name: 'welocome' })
              }
            });
    },
    reset() {
      for (let field in this.formData) {
        this.formData[field] = null;
      }
    },
    nextStep() {
      //alert("On Next Step");
    },
    previousStep() {
      //alert("On Previous Step");
    },
  },
};
</script>
<style>
.custom-control-inline {
  margin-right: 3rem !important;
}
</style>
