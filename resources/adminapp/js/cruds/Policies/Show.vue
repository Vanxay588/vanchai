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
              <strong>{{ $t('cruds.policy.title_singular') }}</strong>
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
                          {{ $t('cruds.policy.fields.id') }}
                        </td>
                        <td>
                          {{ entry.id }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.policy.fields.policy') }}
                        </td>
                        <td>
                          <datatable-attachments :row="entry" :field="'policy'">
                          </datatable-attachments>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.policy.fields.name') }}
                        </td>
                        <td>
                          {{ entry.name }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.policy.fields.categories') }}
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
                          {{ $t('cruds.policy.fields.level_no') }}
                        </td>
                        <td>
                          {{ entry.level_no }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.policy.fields.allow_date') }}
                        </td>
                        <td>
                          {{ entry.allow_date }}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-primary">
                          {{ $t('cruds.policy.fields.description') }}
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
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

export default {
  components: {
    DatatableAttachments,
    DatatableSingle,
    ClassicEditor
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
    ...mapGetters('PoliciesSingle', ['entry'])
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
    ...mapActions('PoliciesSingle', ['fetchShowData', 'resetState'])
  }
}
</script>
