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
              <h5 class="card-title">
                {{ $t('global.edit') }}
                <strong>{{ $t('cruds.download.title_singular') }}</strong>
              </h5>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="required">{{
                      $t('cruds.download.fields.download')
                    }}</label>
                    <attachment
                      :route="getRoute('downloads')"
                      :collection-name="'download_download'"
                      :media="entry.download"
                      :model-id="$route.params.id"
                      :max-file-size="35"
                      @file-uploaded="insertDownloadFile"
                      @file-removed="removeDownloadFile"
                      :max-files="1"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.name,
                      'is-focused': activeField == 'name'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.download.fields.name')
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
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.categories_id !== null,
                      'is-focused': activeField == 'categories'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.download.fields.categories')
                    }}</label>
                    <v-select
                      name="categories"
                      label="categories"
                      :key="'categories-field'"
                      :value="entry.categories_id"
                      :options="lists.categories"
                      :reduce="entry => entry.id"
                      @input="updateCategories"
                      @search.focus="focusField('categories')"
                      @search.blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.download.fields.photo')
                    }}</label>
                    <attachment
                      :route="getRoute('downloads')"
                      :collection-name="'download_photo'"
                      :media="entry.photo"
                      :model-id="$route.params.id"
                      :max-file-size="10"
                      :component="'pictures'"
                      :accept="'image/*'"
                      @file-uploaded="insertPhotoFile"
                      @file-removed="removePhotoFile"
                      :max-files="1"
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
import Attachment from '@components/Attachments/Attachment'

export default {
  components: {
    Attachment
  },
  data() {
    return {
      status: '',
      activeField: ''
    }
  },
  computed: {
    ...mapGetters('DownloadsSingle', ['entry', 'loading', 'lists'])
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
    ...mapActions('DownloadsSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'insertDownloadFile',
      'removeDownloadFile',
      'setName',
      'setCategories',
      'insertPhotoFile',
      'removePhotoFile'
    ]),
    updateName(e) {
      this.setName(e.target.value)
    },
    updateCategories(value) {
      this.setCategories(value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'downloads.index' })
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