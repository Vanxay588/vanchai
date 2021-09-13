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
              <h5 class="card-title">
                {{ $t('global.create') }}
                <strong>{{ $t('cruds.policy.title_singular') }}</strong>
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
                      $t('cruds.policy.fields.policy')
                    }}</label>
                    <attachment
                      :route="getRoute('policies')"
                      :collection-name="'policy_policy'"
                      :media="entry.policy"
                      :max-file-size="35"
                      @file-uploaded="insertPolicyFile"
                      @file-removed="removePolicyFile"
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
                      $t('cruds.policy.fields.name')
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
                      $t('cruds.policy.fields.categories')
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
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.level_no,
                      'is-focused': activeField == 'level_no'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.policy.fields.level_no')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.level_no"
                      @input="updateLevelNo"
                      @focus="focusField('level_no')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.allow_date,
                      'is-focused': activeField == 'allow_date'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.policy.fields.allow_date')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      picker="date"
                      :value="entry.allow_date"
                      @input="updateAllowDate"
                      @focus="focusField('allow_date')"
                      @blur="clearFocus"
                      required
                    >
                    </datetime-picker>
                  </div>
                  <div class="form-group">
                    <label>{{ $t('cruds.policy.fields.description') }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.description"
                      @input="updateDescription"
                    >
                    </ckeditor>
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
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

export default {
  components: {
    Attachment,
    ClassicEditor
  },
  data() {
    return {
      status: '',
      activeField: '',
      editor: ClassicEditor
    }
  },
  computed: {
    ...mapGetters('PoliciesSingle', ['entry', 'loading', 'lists'])
  },
  mounted() {
    this.fetchCreateData()
  },
  beforeDestroy() {
    this.resetState()
  },
  methods: {
    ...mapActions('PoliciesSingle', [
      'storeData',
      'resetState',
      'insertPolicyFile',
      'removePolicyFile',
      'setName',
      'setCategories',
      'setLevelNo',
      'setAllowDate',
      'setDescription',
      'fetchCreateData'
    ]),
    updateName(e) {
      this.setName(e.target.value)
    },
    updateCategories(value) {
      this.setCategories(value)
    },
    updateLevelNo(e) {
      this.setLevelNo(e.target.value)
    },
    updateAllowDate(e) {
      this.setAllowDate(e.target.value)
    },
    updateDescription(value) {
      this.setDescription(value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: 'policies.index' })
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
  }
}
</script>
