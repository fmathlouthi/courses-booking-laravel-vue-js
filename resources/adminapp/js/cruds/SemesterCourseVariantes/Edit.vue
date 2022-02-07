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
                <strong>{{
                  $t('cruds.semesterCourseVariante.title_singular')
                }}</strong>
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
                      'has-items': entry.starting_date,
                      'is-focused': activeField == 'starting_date'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.semesterCourseVariante.fields.starting_date')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      picker="date"
                      :value="entry.starting_date"
                      @input="updateStartingDate"
                      @focus="focusField('starting_date')"
                      @blur="clearFocus"
                      required
                    >
                    </datetime-picker>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.price,
                      'is-focused': activeField == 'price'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.semesterCourseVariante.fields.price')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      step="0.01"
                      :value="entry.price"
                      @input="updatePrice"
                      @focus="focusField('price')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.semester_course_id !== null,
                      'is-focused': activeField == 'semester_course'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.semesterCourseVariante.fields.semester_course')
                    }}</label>
                    <v-select
                      name="semester_course"
                      label="name"
                      :key="'semester_course-field'"
                      :value="entry.semester_course"
                      :options="lists.semester_course"
                      :reduce="entry => entry.id"
                      @input="updateSemesterCourse"
                      @search.focus="focusField('semester_course')"
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

export default {
  data() {
    return {
      status: '',
      activeField: ''
    }
  },
  computed: {
    ...mapGetters('SemesterCourseVariantesSingle', [
      'entry',
      'loading',
      'lists'
    ])
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
    ...mapActions('SemesterCourseVariantesSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setStartingDate',
      'setPrice',
      'setSemesterCourse'
    ]),
    updateStartingDate(e) {
      this.setStartingDate(e.target.value)
    },
    updatePrice(e) {
      this.setPrice(e.target.value)
    },
    updateSemesterCourse(value) {
      this.setSemesterCourse(value)
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'semester_course_variantes.index' })
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
