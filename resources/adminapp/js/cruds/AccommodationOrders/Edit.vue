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
                <strong>{{ $t('cruds.courseOrder.title_singular') }}</strong>
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
                      'has-items': entry.order_number,
                      'is-focused': activeField == 'order_number'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.courseOrder.fields.order_number')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.order_number"
                      @input="updateOrderNumber"
                      @focus="focusField('order_number')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.client_id !== null,
                      'is-focused': activeField == 'client'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.courseOrder.fields.client')
                    }}</label>
                    <v-select
                      name="client"
                      label="name"
                      :key="'client-field'"
                      :value="entry.client"
                      :options="lists.client"
                      :reduce="entry => entry.id"
                      @input="updateClient"
                      @search.focus="focusField('client')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.sub_total,
                      'is-focused': activeField == 'sub_total'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.courseOrder.fields.sub_total')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      step="0.01"
                      :value="entry.sub_total"
                      @input="updateSubTotal"
                      @focus="focusField('sub_total')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.total_amount,
                      'is-focused': activeField == 'total_amount'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.total_amount')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      step="0.01"
                      :value="entry.total_amount"
                      @input="updateTotalAmount"
                      @focus="focusField('total_amount')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.payment_method,
                      'is-focused': activeField == 'payment_method'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.courseOrder.fields.payment_method')
                    }}</label>
                    <v-select
                      name="payment_method"
                      :key="'payment_method-field'"
                      :value="entry.payment_method"
                      :options="lists.payment_method"
                      :reduce="entry => entry.value"
                      @input="updatePaymentMethod"
                      @search.focus="focusField('payment_method')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.payment_status,
                      'is-focused': activeField == 'payment_status'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.payment_status')
                    }}</label>
                    <v-select
                      name="payment_status"
                      :key="'payment_status-field'"
                      :value="entry.payment_status"
                      :options="lists.payment_status"
                      :reduce="entry => entry.value"
                      @input="updatePaymentStatus"
                      @search.focus="focusField('payment_status')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.status,
                      'is-focused': activeField == 'status'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.status')
                    }}</label>
                    <v-select
                      name="status"
                      :key="'status-field'"
                      :value="entry.status"
                      :options="lists.status"
                      :reduce="entry => entry.value"
                      @input="updateStatus"
                      @search.focus="focusField('status')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.first_name,
                      'is-focused': activeField == 'first_name'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.first_name')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.first_name"
                      @input="updateFirstName"
                      @focus="focusField('first_name')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.last_name,
                      'is-focused': activeField == 'last_name'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.last_name')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.last_name"
                      @input="updateLastName"
                      @focus="focusField('last_name')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.email,
                      'is-focused': activeField == 'email'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.email')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.email"
                      @input="updateEmail"
                      @focus="focusField('email')"
                      @blur="clearFocus"
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
                      $t('cruds.courseOrder.fields.phone')
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
                      $t('cruds.courseOrder.fields.country')
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
                      $t('cruds.courseOrder.fields.post_code')
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
                      'has-items': entry.address_1,
                      'is-focused': activeField == 'address_1'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.address_1')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.address_1"
                      @input="updateAddress1"
                      @focus="focusField('address_1')"
                      @blur="clearFocus"
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
                      $t('cruds.courseOrder.fields.address_2')
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
                      'has-items': entry.accommodationvariante_id !== null,
                      'is-focused': activeField == 'accommodationvariante'
                    }"
                  >
                    <label class="bmd-label-floating">accommodationvariante</label>
                    <v-select
                      name="extra"
                      label="starting_date"
                      :key="'extra-field'"
                      :value="entry.accommodationvariante_id"
                      :options="lists.accommodationvariante"
                      :reduce="entry => entry.id"
                      @input="updateAccommodationvariante"
                      @search.focus="focusField('accommodationvariante')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.accommodation_id !== null,
                      'is-focused': activeField == 'accommodation'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.accommodation')
                    }}</label>
                    <v-select
                      name="accommodation"
                      label="name"
                      :key="'accommodation-field'"
                      :value="entry.accommodation"
                      :options="lists.accommodation"
                      :reduce="entry => entry.id"
                      @input="updateAccommodation"
                      @search.focus="focusField('accommodation')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.start_date,
                      'is-focused': activeField == 'start_date'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.courseOrder.fields.start_date')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      picker="date"
                      :value="entry.start_date"
                      @input="updateStartDate"
                      @focus="focusField('start_date')"
                      @blur="clearFocus"
                    >
                    </datetime-picker>
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
    ...mapGetters('AccommodationOrdersSingle', ['entry', 'loading', 'lists'])
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
    ...mapActions('AccommodationOrdersSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setOrderNumber',
      'setClient',
      'setSubTotal',
      'setCoupon',
      'setTotalAmount',
      'setPaymentMethod',
      'setPaymentStatus',
      'setStatus',
      'setFirstName',
      'setLastName',
      'setEmail',
      'setPhone',
      'setCountry',
      'setPostCode',
      'setAddress1',
      'setAddress2',
      'setAccommodationvariante',
      'setAccommodation',
      'setStartDate'
    ]),
    updateOrderNumber(e) {
      this.setOrderNumber(e.target.value)
    },
    updateClient(value) {
      this.setClient(value)
    },
    updateSubTotal(e) {
      this.setSubTotal(e.target.value)
    },
    updateTotalAmount(e) {
      this.setTotalAmount(e.target.value)
    },
    updatePaymentMethod(value) {
      this.setPaymentMethod(value)
    },
    updatePaymentStatus(value) {
      this.setPaymentStatus(value)
    },
    updateStatus(value) {
      this.setStatus(value)
    },
    updateFirstName(e) {
      this.setFirstName(e.target.value)
    },
    updateLastName(e) {
      this.setLastName(e.target.value)
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
    updateAddress1(e) {
      this.setAddress1(e.target.value)
    },
    updateAddress2(e) {
      this.setAddress2(e.target.value)
    },
    updateAccommodationvariante(value) {
      this.setAccommodationvariante(value)
    },
    updateAccommodation(value) {
      this.setAccommodation(value)
    },
    updateStartDate(e) {
      this.setStartDate(e.target.value)
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'accommodation_orders.index' })
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
