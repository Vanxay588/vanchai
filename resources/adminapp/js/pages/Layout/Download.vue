<template>
  <div class="container" id="download">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">download</i>
            </div>
            <h5 class="card-title">
              {{ $t('global.table') }}
              <strong>{{ $t('cruds.download.title') }}</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="table-overlay" v-show="loading">
                  <div class="table-overlay-container">
                    <material-spinner></material-spinner>
                    <span>Loading...</span>
                  </div>
                </div>
                <datatable
                  :columns="columns"
                  :data="data"
                  :total="total"
                  :query="query"
                  :xprops="xprops"
                  :HeaderSettings="false"
                  :pageSizeOptions="[10, 25, 50, 100]"
                >
                  <global-search :query="query" class="pull-left" />
                  <span style="margin-left:10%">
                    <button
                    type="button"
                    class="btn btn-default"
                    @click="fetchIndexData"
                    :disabled="loading"
                    :class="{ disabled: loading }"
                    >
                    <i class="material-icons" :class="{ 'fa-spin': loading }">
                        refresh
                    </i>
                    {{ $t('global.refresh') }}
                    </button>
                  </span>
                  <header-settings :columns="columns" class="pull-right" />
                </datatable>
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
import TranslatedHeader from '@components/Datatables/TranslatedHeader'
import HeaderSettings from '@components/Datatables/HeaderSettings'
import GlobalSearch from '@components/Datatables/GlobalSearch'
import DatatableAttachments from '@components/Datatables/DatatableAttachments'
import DatatableSingle from '@components/Datatables/DatatableSingle'
import DatatablePictures from '@components/Datatables/DatatablePictures'

export default {
  components: {
    GlobalSearch,
    HeaderSettings
  },
  data() {
    return {
      columns: [
        {
          title: 'cruds.download.fields.id',
          field: 'id',
          thComp: TranslatedHeader,
          sortable: true,
          colStyle: 'width: 100px;'
        },
        {
          title: 'cruds.download.fields.download',
          field: 'download',
          thComp: TranslatedHeader,
          tdComp: DatatableAttachments
        },
        {
          title: 'cruds.download.fields.name',
          field: 'name',
          thComp: TranslatedHeader,
          sortable: true
        },
        {
          title: 'cruds.download.fields.categories',
          field: 'categories.categories',
          thComp: TranslatedHeader,
          tdComp: DatatableSingle,
          sortable: true
        },
        {
          title: 'cruds.download.fields.photo',
          field: 'photo',
          thComp: TranslatedHeader,
          tdComp: DatatablePictures
        }
      ],
      query: { sort: 'id', order: 'desc', limit: 10, s: '' },
      xprops: {
        module: 'DownloadsIndex',
        route: 'downloads',
        permission_prefix: 'download_'
      }
    }
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('DownloadsIndex', ['data', 'total', 'loading'])
  },
  watch: {
    query: {
      handler(query) {
        this.setQuery(query)
        this.fetchIndexData()
      },
      deep: true
    }
  },
  methods: {
    ...mapActions('DownloadsIndex', [
      'fetchIndexData',
      'setQuery',
      'resetState'
    ])
  }
}
</script>