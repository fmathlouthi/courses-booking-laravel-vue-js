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
                  $t('cruds.semesterAccommodation.title_singular')
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
                      $t('cruds.semesterAccommodation.fields.name')
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
                      $t('cruds.universitySubject.fields.photos')
                    }}</label>
                    <attachment
                      :route="getRoute('semester-accommodations')"
                      :collection-name="'accommodations_photos'"
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
                    <label>{{
                      $t('cruds.universitySubject.fields.featured_image')
                    }}</label>
                    <attachment
                      :route="getRoute('semester-accommodations')"
                      :collection-name="'accommodations_featured_image'"
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
                  <div class="form-group">
                    <label>{{
                      $t('cruds.semesterAccommodation.fields.description')
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
                      'has-items': entry.city_id !== null,
                      'is-focused': activeField == 'city'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.semesterAccommodation.fields.city')
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
                      'has-items': entry.features.length !== 0,
                      'is-focused': activeField == 'features'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.semesterAccommodation.fields.features')
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
                               <!--   <div
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
                  </div>-->
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
    ...mapGetters('SemesterAccommodationsSingle', ['entry', 'loading', 'lists'])
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
    ...mapActions('SemesterAccommodationsSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setName',
      'setPrice',
      'setDescription',
      'setCity',
      'insertPhotosFile',
      'removePhotosFile',
      'insertFeaturedImageFile',
      'removeFeaturedImageFile',
      'setFeatures'
    ]),
    updateName(e) {
      this.setName(e.target.value)
    },
    updateDescription(value) {
      this.setDescription(value)
    },
    updateCity(value) {
      this.setCity(value)
    },
    updateFeatures(value) {
      this.setFeatures(value)
    },
    updatePrice(e) {
      this.setPrice(e.target.value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
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
