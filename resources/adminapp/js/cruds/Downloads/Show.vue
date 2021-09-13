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
              <strong>{{ $t('cruds.download.title_singular') }}</strong>
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
                          {{ $t('cruds.download.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.download.fields.download') }}
                        </td>
                        <td>
                          <datatable-attachments
                            :row="entry"
                            :field="'download'"
                          >
                          </datatable-attachments>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.download.fields.name') }}
                        </td>
                        <td>
                          {{ entry.name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.download.fields.categories') }}
                        </td>
                        <td>
                          <datatable-single
                            :row="entry"
                            field="categories.categories"
                          >
                          </datatable-single>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.download.fields.photo') }}
                        </td>
                        <td>
                          <datatable-pictures :row="entry" :field="'photo'">
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
import DatatableAttachments from '@components/Datatables/DatatableAttachments'
import DatatableSingle from '@components/Datatables/DatatableSingle'
import DatatablePictures from '@components/Datatables/DatatablePictures'

export default {
  components: {
    DatatableAttachments,
    DatatableSingle,
    DatatablePictures
  },
  data() {
    return {}
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('DownloadsSingle', ['entry'])
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
    ...mapActions('DownloadsSingle', ['fetchShowData', 'resetState'])
  }
}
</script>