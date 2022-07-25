<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">edit</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.edit') }}
                <strong>{{ $t('cruds.pathwayRequest.title_singular') }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.student_first_name,
                      'is-focused': activeField == 'student_first_name'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.student_first_name')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.student_first_name"
                      @input="updateStudentFirstName"
                      @focus="focusField('student_first_name')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.student_last_name,
                      'is-focused': activeField == 'student_last_name'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.student_last_name')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.student_last_name"
                      @input="updateStudentLastName"
                      @focus="focusField('student_last_name')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.pathwayRequest.fields.gendre')
                    }}</label>
                    <v-radio
                      :value="entry.gendre"
                      :options="lists.gendre"
                      @change="updateGendre"
                    >
                    </v-radio>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.nationality,
                      'is-focused': activeField == 'nationality'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.nationality')
                    }}</label>
                    <v-select
                      name="nationality"
                      :key="'nationality-field'"
                      :value="entry.nationality"
                      :options="lists.nationality"
                      :reduce="entry => entry.value"
                      @input="updateNationality"
                      @search.focus="focusField('nationality')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.level_of_study,
                      'is-focused': activeField == 'level_of_study'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.level_of_study')
                    }}</label>
                    <v-select
                      name="level_of_study"
                      :key="'level_of_study-field'"
                      :value="entry.level_of_study"
                      :options="lists.level_of_study"
                      :reduce="entry => entry.value"
                      @input="updateLevelOfStudy"
                      @search.focus="focusField('level_of_study')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.email,
                      'is-focused': activeField == 'email'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.pathwayRequest.fields.email')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.email"
                      @input="updateEmail"
                      @focus="focusField('email')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.phone,
                      'is-focused': activeField == 'phone'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.phone')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.phone"
                      @input="updatePhone"
                      @focus="focusField('phone')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.country,
                      'is-focused': activeField == 'country'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.country')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.country"
                      @input="updateCountry"
                      @focus="focusField('country')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.post_code,
                      'is-focused': activeField == 'post_code'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.post_code')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.post_code"
                      @input="updatePostCode"
                      @focus="focusField('post_code')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.state,
                      'is-focused': activeField == 'state'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.state')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.state"
                      @input="updateState"
                      @focus="focusField('state')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.city,
                      'is-focused': activeField == 'city'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.city')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.city"
                      @input="updateCity"
                      @focus="focusField('city')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.address_1,
                      'is-focused': activeField == 'address_1'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.pathwayRequest.fields.address_1')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.address_1"
                      @input="updateAddress1"
                      @focus="focusField('address_1')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.address_2,
                      'is-focused': activeField == 'address_2'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.address_2')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.address_2"
                      @input="updateAddress2"
                      @focus="focusField('address_2')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.special_needs,
                      'is-focused': activeField == 'special_needs'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.special_needs')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.special_needs"
                      @input="updateSpecialNeeds"
                      @focus="focusField('special_needs')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.pathwayRequest.fields.comments')
                    }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.comments"
                      @input="updateComments"
                    >
                    </ckeditor>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.preferred_intake,
                      'is-focused': activeField == 'preferred_intake'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.preferred_intake')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.preferred_intake"
                      @input="updatePreferredIntake"
                      @focus="focusField('preferred_intake')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.university_degree_id !== null,
                      'is-focused': activeField == 'university_degree'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.university_degree')
                    }}</label>
                    <v-select
                      name="university_degree"
                      label="name"
                      :key="'university_degree-field'"
                      :value="entry.university_degree_id"
                      :options="lists.university_degree"
                      :reduce="entry => entry.id"
                      @input="updateUniversityDegree"
                      @search.focus="focusField('university_degree')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.university_college,
                      'is-focused': activeField == 'university_college'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.university_college')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.university_college"
                      @input="updateUniversityCollege"
                      @focus="focusField('university_college')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.secondary_school,
                      'is-focused': activeField == 'secondary_school'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.secondary_school')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.secondary_school"
                      @input="updateSecondarySchool"
                      @focus="focusField('secondary_school')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.english_proficiency,
                      'is-focused': activeField == 'english_proficiency'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.english_proficiency')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.english_proficiency"
                      @input="updateEnglishProficiency"
                      @focus="focusField('english_proficiency')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.current_address,
                      'is-focused': activeField == 'current_address'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.current_address')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.current_address"
                      @input="updateCurrentAddress"
                      @focus="focusField('current_address')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.date_of_birth,
                      'is-focused': activeField == 'date_of_birth'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.date_of_birth')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      picker="date"
                      :value="entry.date_of_birth"
                      @input="updateDateOfBirth"
                      @focus="focusField('date_of_birth')"
                      @blur="clearFocus"
                    >
                    </datetime-picker>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.subject_id !== null,
                      'is-focused': activeField == 'subject'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.subject')
                    }}</label>
                    <v-select
                      name="subject"
                      label="name"
                      :key="'subject-field'"
                      :value="entry.subject_id"
                      :options="lists.subject"
                      :reduce="entry => entry.id"
                      @input="updateSubject"
                      @search.focus="focusField('subject')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.university_id !== null,
                      'is-focused': activeField == 'university'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.pathwayRequest.fields.university')
                    }}</label>
                    <v-select
                      name="university"
                      label="name"
                      :key="'university-field'"
                      :value="entry.university_id"
                      :options="lists.university"
                      :reduce="entry => entry.id"
                      @input="updateUniversity"
                      @search.focus="focusField('university')"
                      @search.blur="clearFocus"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <vue-button-spinner
                class="btn-primary"
                :status="status"
                :isLoading="loading"
                :disabled="loading"
              >
                {{ $t('global.save') }}
              </vue-button-spinner>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

export default {
  components: {
    ClassicEditor
  },
  data() {
    return {
      status: '',
      activeField: '',
      editor: ClassicEditor
    }
  },
  computed: {
    ...mapGetters('PathwayRequestsSingle', ['entry', 'loading', 'lists'])
  },
  beforeDestroy() {
    this.resetState()
  },
  watch: {
    '$route.params.id': {
      immediate: true,
      handler() {
        this.resetState()
        this.fetchEditData(this.$route.params.id)
      }
    }
  },
  methods: {
    ...mapActions('PathwayRequestsSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setStudentFirstName',
      'setStudentLastName',
      'setGendre',
      'setNationality',
      'setLevelOfStudy',
      'setEmail',
      'setPhone',
      'setCountry',
      'setPostCode',
      'setState',
      'setCity',
      'setAddress1',
      'setAddress2',
      'setSpecialNeeds',
      'setComments',
      'setPreferredIntake',
      'setUniversityDegree',
      'setUniversityCollege',
      'setSecondarySchool',
      'setEnglishProficiency',
      'setCurrentAddress',
      'setDateOfBirth',
      'setSubject',
      'setUniversity'
    ]),
    updateStudentFirstName(e) {
      this.setStudentFirstName(e.target.value)
    },
    updateStudentLastName(e) {
      this.setStudentLastName(e.target.value)
    },
    updateGendre(value) {
      this.setGendre(value)
    },
    updateNationality(value) {
      this.setNationality(value)
    },
    updateLevelOfStudy(value) {
      this.setLevelOfStudy(value)
    },
    updateEmail(e) {
      this.setEmail(e.target.value)
    },
    updatePhone(e) {
      this.setPhone(e.target.value)
    },
    updateCountry(e) {
      this.setCountry(e.target.value)
    },
    updatePostCode(e) {
      this.setPostCode(e.target.value)
    },
    updateState(e) {
      this.setState(e.target.value)
    },
    updateCity(e) {
      this.setCity(e.target.value)
    },
    updateAddress1(e) {
      this.setAddress1(e.target.value)
    },
    updateAddress2(e) {
      this.setAddress2(e.target.value)
    },
    updateSpecialNeeds(e) {
      this.setSpecialNeeds(e.target.value)
    },
    updateComments(value) {
      this.setComments(value)
    },
    updatePreferredIntake(e) {
      this.setPreferredIntake(e.target.value)
    },
    updateUniversityDegree(value) {
      this.setUniversityDegree(value)
    },
    updateUniversityCollege(e) {
      this.setUniversityCollege(e.target.value)
    },
    updateSecondarySchool(e) {
      this.setSecondarySchool(e.target.value)
    },
    updateEnglishProficiency(e) {
      this.setEnglishProficiency(e.target.value)
    },
    updateCurrentAddress(e) {
      this.setCurrentAddress(e.target.value)
    },
    updateDateOfBirth(e) {
      this.setDateOfBirth(e.target.value)
    },
    updateSubject(value) {
      this.setSubject(value)
    },
    updateUniversity(value) {
      this.setUniversity(value)
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'pathway_requests.index' })
          this.$eventHub.$emit('update-success')
        })
        .catch(error => {
          this.status = 'failed'
          _.delay(() => {
            this.status = ''
          }, 3000)
        })
    },
    focusField(name) {
      this.activeField = name
    },
    clearFocus() {
      this.activeField = ''
    }
  }
}
</script>
