<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h5 class="card-title">
              {{ $t('global.view') }}
              <strong>{{ $t('cruds.home.title') }}</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                {{ message }}
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

export default {
  data() {
    return {}
  },
  created() {
    this.fetchIndexData()
  },
  beforeDestroy() {
    this.resetState()
  },
  computed: {
    ...mapGetters('Homes', ['message'])
  },
  methods: {
    ...mapActions('Homes', ['fetchIndexData', 'resetState'])
  }
}
</script>
