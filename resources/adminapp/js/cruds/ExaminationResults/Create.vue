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
                <strong>{{
                  $t('cruds.examinationResult.title_singular')
                }}</strong>
              </h5>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.academic_years,
                      'is-focused': activeField == 'academic_years'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.examinationResult.fields.academic_years')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.academic_years"
                      @input="updateAcademicYears"
                      @focus="focusField('academic_years')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label class="required">{{
                      $t('cruds.examinationResult.fields.examination_result')
                    }}</label>
                    <attachment
                      :route="getRoute('examination-results')"
                      :collection-name="'examination_result_examination_result'"
                      :media="entry.examination_result"
                      :max-file-size="35"
                      @file-uploaded="insertExaminationResultFile"
                      @file-removed="removeExaminationResultFile"
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
                      $t('cruds.examinationResult.fields.name')
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
    ...mapGetters('ExaminationResultsSingle', ['entry', 'loading'])
  },
  beforeDestroy() {
    this.resetState()
  },
  methods: {
    ...mapActions('ExaminationResultsSingle', [
      'storeData',
      'resetState',
      'setAcademicYears',
      'insertExaminationResultFile',
      'removeExaminationResultFile',
      'setName'
    ]),
    updateAcademicYears(e) {
      this.setAcademicYears(e.target.value)
    },
    updateName(e) {
      this.setName(e.target.value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: 'examination_results.index' })
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