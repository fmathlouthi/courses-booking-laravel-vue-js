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
                $t('cruds.universitySubject.title_singular')
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
                          {{ $t('cruds.universitySubject.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.universitySubject.fields.name') }}
                        </td>
                        <td>
                          {{ entry.name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.universitySubject.fields.facebook_link')
                          }}
                        </td>
                        <td>
                          {{ entry.facebook_link }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.universitySubject.fields.instagram_link')
                          }}
                        </td>
                        <td>
                          {{ entry.instagram_link }}
                        </td>
                      </tr>
                       <tr>
                        <td class="text-primary">
                          {{ $t('cruds.univercityCourse.fields.features') }}
                        </td>
                        <td>
                          <datatable-list :row="entry" field="features.name">
                          </datatable-list>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.universitySubject.fields.twitter_link')
                          }}
                        </td>
                        <td>
                          {{ entry.twitter_link }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.universitySubject.fields.description') }}
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
                            $t('cruds.universitySubject.fields.pathbrochure')
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
                          {{ $t('cruds.universitySubject.fields.city') }}
                        </td>
                        <td>
                          <datatable-single :row="entry" field="city.name">
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.universitySubject.fields.photos') }}
                        </td>
                        <td>
                          <datatable-pictures :row="entry" :field="'photos'">
                          </datatable-pictures>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.universitySubject.fields.featured_image')
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
                     <!-- <tr>
                        <td class="text-primary">
                          {{ $t('cruds.universitySubject.fields.type') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="type">
                          </datatable-enum>
                        </td>
                      </tr>-->
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
import DatatableSingle from '@components/Datatables/DatatableSingle'
import DatatablePictures from '@components/Datatables/DatatablePictures'
import DatatableEnum from '@components/Datatables/DatatableEnum' 
import DatatableList from '@components/Datatables/DatatableList'

export default {
  components: {
    ClassicEditor,
    DatatableAttachments,
    DatatableSingle,
    DatatablePictures,
    DatatableList,
    DatatableEnum
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
    ...mapGetters('UniversitySubjectsSingle', ['entry'])
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
    ...mapActions('UniversitySubjectsSingle', ['fetchShowData', 'resetState'])
  }
}
</script>
