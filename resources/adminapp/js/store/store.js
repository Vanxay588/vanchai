import Vue from 'vue'
import Vuex from 'vuex'

import Alert from './modules/alert'
import I18NStore from './modules/i18n'

import PermissionsIndex from './cruds/Permissions'
import PermissionsSingle from './cruds/Permissions/single'
import RolesIndex from './cruds/Roles'
import RolesSingle from './cruds/Roles/single'
import UsersIndex from './cruds/Users'
import UsersSingle from './cruds/Users/single'
import Homes from './cruds/Homes'
import AnnoucementsIndex from './cruds/Annoucements'
import AnnoucementsSingle from './cruds/Annoucements/single'
import PolicyCategoriesIndex from './cruds/PolicyCategories'
import PolicyCategoriesSingle from './cruds/PolicyCategories/single'
import PoliciesIndex from './cruds/Policies'
import PoliciesSingle from './cruds/Policies/single'
import DownloadCategoriesIndex from './cruds/DownloadCategories'
import DownloadCategoriesSingle from './cruds/DownloadCategories/single'
import DownloadsIndex from './cruds/Downloads'
import DownloadsSingle from './cruds/Downloads/single'
import ExaminationResultsIndex from './cruds/ExaminationResults'
import ExaminationResultsSingle from './cruds/ExaminationResults/single'
import StatisticCategoriesIndex from './cruds/StatisticCategories'
import StatisticCategoriesSingle from './cruds/StatisticCategories/single'
import StatisticsIndex from './cruds/Statistics'
import StatisticsSingle from './cruds/Statistics/single'
Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    Alert,
    I18NStore,
    PermissionsIndex,
    PermissionsSingle,
    RolesIndex,
    RolesSingle,
    UsersIndex,
    UsersSingle,
    Homes,
    AnnoucementsIndex,
    AnnoucementsSingle,
    PolicyCategoriesIndex,
    PolicyCategoriesSingle,
    PoliciesIndex,
    PoliciesSingle,
    DownloadCategoriesIndex,
    DownloadCategoriesSingle,
    DownloadsIndex,
    DownloadsSingle,
    ExaminationResultsIndex,
    ExaminationResultsSingle,
    StatisticCategoriesIndex,
    StatisticCategoriesSingle,
    StatisticsIndex,
    StatisticsSingle
  },
  strict: debug
})
