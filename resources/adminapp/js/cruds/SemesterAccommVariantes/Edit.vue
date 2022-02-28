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
                  $t('cruds.semesterAccommVariante.title_singular')
                }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
                 <a
      href="#"
      class="btn btn-primary"
      @click.prevent="destroyData(entry.id)"
      type="button"
    >
      <i class="material-icons">delete</i> delete
    </a>
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
                      $t('cruds.semesterAccommVariante.fields.starting_date')
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
                      'has-items': entry.weeksnumber,
                      'is-focused': activeField == 'weeksnumber'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('Weeks number')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      :value="entry.weeksnumber"
                      @input="updateWeeksnumber"
                      @focus="focusField('weeksnumber')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                   <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.bookfee,
                      'is-focused': activeField == 'bookfee'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('Book Fees')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      step="0.01"
                      :value="entry.bookfee"
                      @input="updateBookfee"
                      @focus="focusField('bookfee')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.price,
                      'is-focused': activeField == 'price'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.semesterAccommVariante.fields.price')
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
                      'has-items': entry.semester_accommodation_id !== null,
                      'is-focused': activeField == 'semester_accommodation'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t(
                        'cruds.semesterAccommVariante.fields.semester_accommodation'
                      )
                    }}</label>
                    <v-select
                      name="semester_accommodation"
                      label="name"
                      :key="'semester_accommodation-field'"
                      :value="entry.semester_accommodation"
                      :options="lists.semester_accommodation"
                      :reduce="entry => entry.id"
                      @input="updateSemesterAccommodation"
                      @search.focus="focusField('semester_accommodation')"
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
    ...mapGetters('SemesterAccommVariantesSingle', [
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
            .dispatch( 'SemesterAccommVariantesIndex/destroyData', id)
            .then(result => {
              this.$eventHub.$emit('delete-success')
              this.$router.push({ name: 'semester_accommodations.index' });
            })
        }
      })
    },
    ...mapActions('SemesterAccommVariantesSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setStartingDate',
      'setPrice',
      'setBookfee',
      'setWeeksnumber',
      'setSemesterAccommodation'
    ]),
    updateStartingDate(e) {
      this.setStartingDate(e.target.value)
    },
    updatePrice(e) {
      this.setPrice(e.target.value)
    },
    updateWeeksnumber(e) {
      this.setWeeksnumber(e.target.value)
    },updateBookfee(e) {
      this.setBookfee(e.target.value)
    },
    updateSemesterAccommodation(value) {
      this.setSemesterAccommodation(value)
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'semester_accommodations.index' })
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
