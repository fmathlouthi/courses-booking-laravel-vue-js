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
                  $t('cruds.weeklyAccommodation.title_singular')
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
                      'has-items': entry.name,
                      'is-focused': activeField == 'name'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.weeklyAccommodation.fields.name')
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
                  <div class="form-group">
                    <label>{{
                      $t('cruds.weeklyAccommodation.fields.description')
                    }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.description"
                      @input="updateDescription"
                    >
                    </ckeditor>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.price,
                      'is-focused': activeField == 'price'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.weeklyAccommodation.fields.price')
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
                      'has-items': entry.city_id !== null,
                      'is-focused': activeField == 'city'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.weeklyAccommodation.fields.city')
                    }}</label>
                    <v-select
                      name="city"
                      label="name"
                      :key="'city-field'"
                      :value="entry.city"
                      :options="lists.city"
                      :reduce="entry => entry.id"
                      @input="updateCity"
                      @search.focus="focusField('city')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.availability.length !== 0,
                      'is-focused': activeField == 'availability'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.weeklyAccommodation.fields.availability')
                    }}</label>
                    <v-select
                      name="availability"
                      label="name"
                      :key="'availability-field'"
                      :value="entry.availability"
                      :options="lists.availability"
                      :closeOnSelect="false"
                      multiple
                      @input="updateAvailability"
                      @search.focus="focusField('availability')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.features.length !== 0,
                      'is-focused': activeField == 'features'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.weeklyAccommodation.fields.features')
                    }}</label>
                    <v-select
                      name="features"
                      label="name"
                      :key="'features-field'"
                      :value="entry.features"
                      :options="lists.features"
                      :closeOnSelect="false"
                      multiple
                      @input="updateFeatures"
                      @search.focus="focusField('features')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.weeklyAccommodation.fields.photos')
                    }}</label>
                    <attachment
                      :route="getRoute('weekly-accommodations')"
                      :collection-name="'weekly_accommodation_photos'"
                      :media="entry.photos"
                      :model-id="$route.params.id"
                      :max-file-size="2"
                      :component="'pictures'"
                      :accept="'image/*'"
                      @file-uploaded="insertPhotosFile"
                      @file-removed="removePhotosFile"
                    />
                  </div>
                  <div class="form-group">
                    <label class="required">{{
                      $t('cruds.weeklyAccommodation.fields.featured_image')
                    }}</label>
                    <attachment
                      :route="getRoute('weekly-accommodations')"
                      :collection-name="'weekly_accommodation_featured_image'"
                      :media="entry.featured_image"
                      :model-id="$route.params.id"
                      :max-file-size="2"
                      :component="'pictures'"
                      :accept="'image/*'"
                      @file-uploaded="insertFeaturedImageFile"
                      @file-removed="removeFeaturedImageFile"
                      :max-files="1"
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
import Attachment from '@components/Attachments/Attachment'

export default {
  components: {
    ClassicEditor,
    Attachment
  },
  data() {
    return {
      status: '',
      activeField: '',
      editor: ClassicEditor
    }
  },
  computed: {
    ...mapGetters('WeeklyAccommodationsSingle', ['entry', 'loading', 'lists'])
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
    ...mapActions('WeeklyAccommodationsSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setName',
      'setDescription',
      'setPrice',
      'setCity',
      'setAvailability',
      'setFeatures',
      'insertPhotosFile',
      'removePhotosFile',
      'insertFeaturedImageFile',
      'removeFeaturedImageFile'
    ]),
    updateName(e) {
      this.setName(e.target.value)
    },
    updateDescription(value) {
      this.setDescription(value)
    },
    updatePrice(e) {
      this.setPrice(e.target.value)
    },
    updateCity(value) {
      this.setCity(value)
    },
    updateAvailability(value) {
      this.setAvailability(value)
    },
    updateFeatures(value) {
      this.setFeatures(value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'weekly_accommodations.index' })
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
