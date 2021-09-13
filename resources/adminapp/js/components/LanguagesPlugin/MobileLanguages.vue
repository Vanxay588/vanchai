<template>
      <div class="select">
               <select v-model="selected" @change="setLocale(selected)">
                  <option selected disabled value="" >{{ $t('panel.Choose_language') }}</option>
                  <option v-for="language in languages" :value="language.short_code" :key="language.short_code" 
                  :selected="language.short_code === locale ? 'selected':'none'">
                    {{ language.title }}
                  </option>
                </select>

       </div> 
</template>
<style scoped>
    
/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 18em;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
  margin-top:  20px ;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #34495e;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

</style>

<script>
  import { mapGetters, mapActions } from 'vuex'
  export default {
    data() 
    {
      return { 
        selected:""
      }
    },
    computed: {
      ...mapGetters('I18NStore', ['locale', 'languages'])
    },
    methods: {
      ...mapActions('I18NStore', ['setLocale'])
    }
  }
</script>