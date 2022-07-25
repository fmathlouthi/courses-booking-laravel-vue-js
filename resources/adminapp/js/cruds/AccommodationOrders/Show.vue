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
              <strong>{{ $t('cruds.courseOrder.title_singular') }}</strong>
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
                          {{ $t('cruds.courseOrder.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.order_number') }}
                        </td>
                        <td>
                          {{ entry.order_number }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.client') }}
                        </td>
                        <td>
                          <datatable-single :row="entry" field="client.name">
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.sub_total') }}
                        </td>
                        <td>
                          {{ entry.sub_total }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.total_amount') }}
                        </td>
                        <td>
                          {{ entry.total_amount }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.payment_method') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="payment_method">
                          </datatable-enum>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.payment_status') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="payment_status">
                          </datatable-enum>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.status') }}
                        </td>
                        <td>
                          <datatable-enum :row="entry" field="status">
                          </datatable-enum>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.first_name') }}
                        </td>
                        <td>
                          {{ entry.first_name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.last_name') }}
                        </td>
                        <td>
                          {{ entry.last_name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.email') }}
                        </td>
                        <td>
                          {{ entry.email }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.phone') }}
                        </td>
                        <td>
                          {{ entry.phone }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.country') }}
                        </td>
                        <td>
                          {{ entry.country }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.post_code') }}
                        </td>
                        <td>
                          {{ entry.post_code }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.address_1') }}
                        </td>
                        <td>
                          {{ entry.address_1 }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.address_2') }}
                        </td>
                        <td>
                          {{ entry.address_2 }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          Period
                        </td>
                        <td>
                          <datatable-single :row="entry" field="accommodationvariante.weeksnumber">
                          </datatable-single>
                        </td>
                      </tr>
                     
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.accommodation') }}
                        </td>
                        <td>
                          <datatable-single
                            :row="entry"
                            field="accommodation.name"
                          >
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.courseOrder.fields.start_date') }}
                        </td>
                        <td>
                          {{ entry.start_date }}
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
import DatatableSingle from '@components/Datatables/DatatableSingle'
import DatatableEnum from '@components/Datatables/DatatableEnum'

export default {
  components: {
    DatatableSingle,
    DatatableEnum
  },
  data() {
    return {}
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('AccommodationOrdersSingle', ['entry'])
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
    ...mapActions('AccommodationOrdersSingle', ['fetchShowData', 'resetState'])
  }
}
</script>
