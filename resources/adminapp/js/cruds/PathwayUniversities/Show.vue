<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">remove_red_eye</i>
            </div>
            <h4 class="card-title">
              {{ $t('global.view') }}
              <strong>{{
                $t('cruds.pathwayUniversity.title_singular')
              }}</strong>
            </h4>
          </div>
          <div class="card-body">
            <back-button></back-button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <div class="table">
                    <tbody>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayUniversity.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayUniversity.fields.name') }}
                        </td>
                        <td>
                          {{ entry.name }}
                        </td>
                      </tr>
                       <tr>
                        <td class="text-primary">
                          {{ $t('cruds.univercityCourse.fields.city') }}
                        </td>
                        <td>
                          <datatable-single :row="entry" field="city.name">
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayUniversity.fields.facebook_link')
                          }}
                        </td>
                        <td>
                          {{ entry.facebook_link }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayUniversity.fields.instagram_link')
                          }}
                        </td>
                        <td>
                          {{ entry.instagram_link }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayUniversity.fields.twitter_link')
                          }}
                        </td>
                        <td>
                          {{ entry.twitter_link }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayUniversity.fields.description') }}
                        </td>
                        <td>
                          <ckeditor
                            :editor="editor"
                            :value="entry.description"
                            disabled
                          >
                          </ckeditor>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayUniversity.fields.pathbrochure')
                          }}
                        </td>
                        <td>
                          <datatable-attachments
                            :row="entry"
                            :field="'pathbrochure'"
                          >
                          </datatable-attachments>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayUniversity.fields.featured_image')
                          }}
                        </td>
                        <td>
                          <datatable-pictures
                            :row="entry"
                            :field="'featured_image'"
                          >
                          </datatable-pictures>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayUniversity.fields.photos') }}
                        </td>
                        <td>
                          <datatable-pictures :row="entry" :field="'photos'">
                          </datatable-pictures>
                        </td>
                      </tr>
                    </tbody>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'
import DatatableAttachments from '@components/Datatables/DatatableAttachments'
import DatatablePictures from '@components/Datatables/DatatablePictures'

import DatatableSingle from '@components/Datatables/DatatableSingle'

export default {
  components: {
    ClassicEditor,
    DatatableAttachments,
    DatatablePictures,
    DatatableSingle
  },
  data() {
    return {
      editor: ClassicEditor
    }
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('PathwayUniversitiesSingle', ['entry'])
  },
  watch: {
    '$route.params.id': {
      immediate: true,
      handler() {
        this.resetState()
        this.fetchShowData(this.$route.params.id)
      }
    }
  },
  methods: {
    ...mapActions('PathwayUniversitiesSingle', ['fetchShowData', 'resetState'])
  }
}
</script>
