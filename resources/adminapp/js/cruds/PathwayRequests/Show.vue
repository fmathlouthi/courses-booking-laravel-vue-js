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
              <strong>{{ $t('cruds.pathwayRequest.title_singular') }}</strong>
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
                          {{ $t('cruds.pathwayRequest.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.student_first_name')
                          }}
                        </td>
                        <td>
                          {{ entry.student_first_name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.student_last_name')
                          }}
                        </td>
                        <td>
                          {{ entry.student_last_name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.gendre') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="gendre">
                          </datatable-enum>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.nationality') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="nationality">
                          </datatable-enum>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.level_of_study') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="level_of_study">
                          </datatable-enum>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.email') }}
                        </td>
                        <td>
                          {{ entry.email }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.phone') }}
                        </td>
                        <td>
                          {{ entry.phone }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.country') }}
                        </td>
                        <td>
                          {{ entry.country }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.post_code') }}
                        </td>
                        <td>
                          {{ entry.post_code }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.state') }}
                        </td>
                        <td>
                          {{ entry.state }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.city') }}
                        </td>
                        <td>
                          {{ entry.city }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.address_1') }}
                        </td>
                        <td>
                          {{ entry.address_1 }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.address_2') }}
                        </td>
                        <td>
                          {{ entry.address_2 }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.special_needs') }}
                        </td>
                        <td>
                          {{ entry.special_needs }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.comments') }}
                        </td>
                        <td>
                          <ckeditor
                            :editor="editor"
                            :value="entry.comments"
                            disabled
                          >
                          </ckeditor>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.preferred_intake')
                          }}
                        </td>
                        <td>
                          {{ entry.preferred_intake }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.university_degree')
                          }}
                        </td>
                        <td>
                          <datatable-single
                            :row="entry"
                            field="university_degree.name"
                          >
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.university_college')
                          }}
                        </td>
                        <td>
                          {{ entry.university_college }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.secondary_school')
                          }}
                        </td>
                        <td>
                          {{ entry.secondary_school }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t(
                              'cruds.pathwayRequest.fields.english_proficiency'
                            )
                          }}
                        </td>
                        <td>
                          {{ entry.english_proficiency }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.pathwayRequest.fields.current_address')
                          }}
                        </td>
                        <td>
                          {{ entry.current_address }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.date_of_birth') }}
                        </td>
                        <td>
                          {{ entry.date_of_birth }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.subject') }}
                        </td>
                        <td>
                          <datatable-single :row="entry" field="subject.name">
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.pathwayRequest.fields.university') }}
                        </td>
                        <td>
                          <datatable-single
                            :row="entry"
                            field="university.name"
                          >
                          </datatable-single>
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
import DatatableEnum from '@components/Datatables/DatatableEnum'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'
import DatatableSingle from '@components/Datatables/DatatableSingle'

export default {
  components: {
    DatatableEnum,
    ClassicEditor,
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
    ...mapGetters('PathwayRequestsSingle', ['entry'])
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
    ...mapActions('PathwayRequestsSingle', ['fetchShowData', 'resetState'])
  }
}
</script>
