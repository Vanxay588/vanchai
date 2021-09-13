<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">remove_red_eye</i>
            </div>
            <h5 class="card-title">
              {{ $t('global.view') }}
              <strong>{{
                $t('cruds.examinationResult.title_singular')
              }}</strong>
            </h5>
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
                          {{ $t('cruds.examinationResult.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t('cruds.examinationResult.fields.academic_years')
                          }}
                        </td>
                        <td>
                          {{ entry.academic_years }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{
                            $t(
                              'cruds.examinationResult.fields.examination_result'
                            )
                          }}
                        </td>
                        <td>
                          <datatable-attachments
                            :row="entry"
                            :field="'examination_result'"
                          >
                          </datatable-attachments>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.examinationResult.fields.name') }}
                        </td>
                        <td>
                          {{ entry.name }}
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
import DatatableAttachments from '@components/Datatables/DatatableAttachments'

export default {
  components: {
    DatatableAttachments
  },
  data() {
    return {}
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('ExaminationResultsSingle', ['entry'])
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
    ...mapActions('ExaminationResultsSingle', ['fetchShowData', 'resetState'])
  }
}
</script>
