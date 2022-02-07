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
                <strong>{{
                  $t('cruds.univercityCourse.title_singular')
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
                      $t('cruds.univercityCourse.fields.name')
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
                      $t('cruds.univercityCourse.fields.description')
                    }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.description"
                      @input="updateDescription"
                    >
                    </ckeditor>
                  </div>
                  <!--countries -->
                    <div class="form-group">
                            <label>Select Country:</label>
                            <select class='form-control' v-model='country' @change='getStates()'>
                                <option value='0' >Select Country</option>
                                <option v-for='data in countries' :value='data.id' :key="'cc' + data.id">{{ data.name }}</option>
                            </select>
                        </div> 

                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.city_id !== null,
                      'is-focused': activeField == 'city'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.univercityCourse.fields.city')
                    }}</label>
                    <v-select
                      name="city"
                      label="name"
                      :key="'city-field'"
                      :value="entry.city_id"
                      :options="states"
                      :reduce="entry => entry.id"
                      @input="updateCity"
                      @search.focus="focusField('city')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.language_id !== null,
                      'is-focused': activeField == 'language'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.univercityCourse.fields.language')
                    }}</label>
                    <v-select
                      name="language"
                      label="name"
                      :key="'language-field'"
                      :value="entry.language_id"
                      :options="lists.language"
                      :reduce="entry => entry.id"
                      @input="updateLanguage"
                      @search.focus="focusField('language')"
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
                    <label class="bmd-label-floating required">{{
                      $t('cruds.univercityCourse.fields.availability')
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
                      'has-items': entry.extra.length !== 0,
                      'is-focused': activeField == 'extra'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.univercityCourse.fields.extra')
                    }}</label>
                    <v-select
                      name="extra"
                      label="name"
                      :key="'extra-field'"
                      :value="entry.extra"
                      :options="lists.extra"
                      :closeOnSelect="false"
                      multiple
                      @input="updateExtra"
                      @search.focus="focusField('extra')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.accommodation.length !== 0,
                      'is-focused': activeField == 'accommodation'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.univercityCourse.fields.accommodation')
                    }}</label>
                    <v-select
                      name="accommodation"
                      label="name"
                      :key="'accommodation-field'"
                      :value="entry.accommodation"
                      :options="lists.accommodation"
                      :closeOnSelect="false"
                      multiple
                      @input="updateAccommodation"
                      @search.focus="focusField('accommodation')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.twitter_link,
                      'is-focused': activeField == 'twitter_link'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.univercityCourse.fields.twitter_link')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.twitter_link"
                      @input="updateTwitterLink"
                      @focus="focusField('twitter_link')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.instagram_link,
                      'is-focused': activeField == 'instagram_link'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.univercityCourse.fields.instagram_link')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.instagram_link"
                      @input="updateInstagramLink"
                      @focus="focusField('instagram_link')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.facebook_link,
                      'is-focused': activeField == 'facebook_link'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.univercityCourse.fields.facebook_link')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.facebook_link"
                      @input="updateFacebookLink"
                      @focus="focusField('facebook_link')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.univercityCourse.fields.photos')
                    }}</label>
                    <attachment
                      :route="getRoute('univercity-courses')"
                      :collection-name="'univercity_course_photos'"
                      :media="entry.photos"
                      :max-file-size="2"
                      :component="'pictures'"
                      :accept="'image/*'"
                      @file-uploaded="insertPhotosFile"
                      @file-removed="removePhotosFile"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.univercityCourse.fields.featured_image')
                    }}</label>
                    <attachment
                      :route="getRoute('univercity-courses')"
                      :collection-name="'univercity_course_featured_image'"
                      :media="entry.featured_image"
                      :max-file-size="2"
                      :component="'pictures'"
                      :accept="'image/*'"
                      @file-uploaded="insertFeaturedImageFile"
                      @file-removed="removeFeaturedImageFile"
                      :max-files="1"
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
                      $t('cruds.univercityCourse.fields.features')
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
      editor: ClassicEditor,
      country: 0,
      countries: [],
      state: 0,
      states: []
    }
  },
  computed: {
    ...mapGetters('UnivercityCoursesSingle', ['entry', 'loading', 'lists'])
  },
  mounted() {
    this.fetchCreateData()
  },
  beforeDestroy() {
    this.resetState()
  },
  methods: {
    getCountries: function(){
                axios.get('countries/depand/getcountries')
                    .then(function (response) {
                        this.countries = response.data;
                    }.bind(this));

            },
            
            getStates: function() {
                axios.get('countries/depand/getstates',{
                    params: {
                        country_id: this.country
                    }
                }).then(function(response){
                    this.states = response.data;
                }.bind(this));
            },
    ...mapActions('UnivercityCoursesSingle', [
      'storeData',
      'resetState',
      'setName',
      'setDescription',
      'setCity',
      'setLanguage',
      'setAvailability',
      'setExtra',
      'setAccommodation',
      'setTwitterLink',
      'setInstagramLink',
      'setFacebookLink',
      'insertPhotosFile',
      'removePhotosFile',
      'insertFeaturedImageFile',
      'removeFeaturedImageFile',
      'setFeatures',
      'fetchCreateData'
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
    updateLanguage(value) {
      this.setLanguage(value)
    },
    updateAvailability(value) {
      this.setAvailability(value)
    },
    updateExtra(value) {
      this.setExtra(value)
    },
    updateAccommodation(value) {
      this.setAccommodation(value)
    },
    updateTwitterLink(e) {
      this.setTwitterLink(e.target.value)
    },
    updateInstagramLink(e) {
      this.setInstagramLink(e.target.value)
    },
    updateFacebookLink(e) {
      this.setFacebookLink(e.target.value)
    },
    updateFeatures(value) {
      this.setFeatures(value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: 'univercity_courses.index' })
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
  },
  created: function(){
            this.getCountries()
        }
}
</script>
