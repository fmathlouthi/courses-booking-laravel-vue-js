<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">add</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.create') }}  
                <strong>{{ $t('cruds.subjectProgram.title_singular') }}</strong>
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
                      'has-items': entry.name,
                      'is-focused': activeField == 'name'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.subjectProgram.fields.name')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.name"
                      @input="updateName"
                      @focus="focusField('name')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                     <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.type,
                      'is-focused': activeField == 'type'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.universitySubject.fields.type')
                    }}</label>
                    <v-select
                      name="type"
                      :key="'type-field'"
                      :value="entry.type"
                      :options="lists.type"
                      :reduce="entry => entry.value"
                      @input="updateType"
                      @search.focus="focusField('type')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label class="required">{{
                      $t('cruds.subjectProgram.fields.entry_requirements')
                    }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.entry_requirements"
                      @input="updateEntryRequirements"
                      required
                    >
                    </ckeditor>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.months_of_entry,
                      'is-focused': activeField == 'months_of_entry'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.subjectProgram.fields.months_of_entry')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      picker="date"
                      :value="entry.months_of_entry"
                      @input="updateMonthsOfEntry"
                      @focus="focusField('months_of_entry')"
                      @blur="clearFocus"
                      required
                    >
                    </datetime-picker>
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.subjectProgram.fields.course_content')
                    }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.course_content"
                      @input="updateCourseContent"
                    >
                    </ckeditor>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.fees_and_funding,
                      'is-focused': activeField == 'fees_and_funding'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.subjectProgram.fields.fees_and_funding')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      step="0.01"
                      :value="entry.fees_and_funding"
                      @input="updateFeesAndFunding"
                      @focus="focusField('fees_and_funding')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t(
                        'cruds.subjectProgram.fields.qualification_and_course_duration'
                      )
                    }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.qualification_and_course_duration"
                      @input="updateQualificationAndCourseDuration"
                    >
                    </ckeditor>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.university_id !== null,
                      'is-focused': activeField == 'university'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.subjectProgram.fields.university')
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
                     <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.subject_id !== null,
                      'is-focused': activeField == 'subject'
                    }"
                  >
                    <label class="bmd-label-floating required">
                      Subject Type
                    </label>
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
    ...mapGetters('SubjectProgramsSingle', ['entry', 'loading', 'lists'])
  },
  mounted() {
    this.fetchCreateData()
  },
  beforeDestroy() {
    this.resetState()
  },
  methods: {
    ...mapActions('SubjectProgramsSingle', [
      'storeData',
      'resetState',
      'setName',
      'setEntryRequirements',
      'setMonthsOfEntry',
      'setCourseContent',
      'setFeesAndFunding',
      'setQualificationAndCourseDuration',
      'setUniversity',
      'setSubject',
      'setType',
      'fetchCreateData'
    ]),
    updateName(e) {
      this.setName(e.target.value)
    },
    updateEntryRequirements(value) {
      this.setEntryRequirements(value)
    },
    updateMonthsOfEntry(e) {
      this.setMonthsOfEntry(e.target.value)
    },
    updateCourseContent(value) {
      this.setCourseContent(value)
    },
    updateType(value) {
      this.setType(value)
    },
    updateFeesAndFunding(e) {
      this.setFeesAndFunding(e.target.value)
    },
    updateQualificationAndCourseDuration(value) {
      this.setQualificationAndCourseDuration(value)
    },
    updateUniversity(value) {
      this.setUniversity(value)
    },
    updateSubject(value) {
      this.setSubject(value)
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: 'subject_programs.index' })
          this.$eventHub.$emit('create-success')
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
