import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const View = { template: '<router-view></router-view>' }

const routes = [
  {
    path: '/admin',
    component: () => import('@pages/Layout/DashboardLayout.vue'),
    redirect: 'dashboard',
    children: [
      {
        path: 'dashboard',
        name: 'dashboard',
        component: () => import('@pages/Dashboard.vue'),
        meta: { title: 'global.dashboard' }
      },
      {
        path: 'annoucements',
        name: 'annoucements.index',
        component: () => import('@cruds/Annoucements/Index.vue'),
        meta: { title: 'cruds.annoucement.title' }
      },
      {
        path: 'annoucements/create',
        name: 'annoucements.create',
        component: () => import('@cruds/Annoucements/Create.vue'),
        meta: { title: 'cruds.annoucement.title' }
      },
      {
        path: 'annoucements/:id',
        name: 'annoucements.show',
        component: () => import('@cruds/Annoucements/Show.vue'),
        meta: { title: 'cruds.annoucement.title' }
      },
      {
        path: 'annoucements/:id/edit',
        name: 'annoucements.edit',
        component: () => import('@cruds/Annoucements/Edit.vue'),
        meta: { title: 'cruds.annoucement.title' }
      },
      {
        path: 'policy-management',
        name: 'policy_management',
        component: View,
        redirect: { name: 'policy_categories.index' },
        children: [
          {
            path: 'policy-categories',
            name: 'policy_categories.index',
            component: () => import('@cruds/PolicyCategories/Index.vue'),
            meta: { title: 'cruds.policyCategory.title' }
          },
          {
            path: 'policy-categories/create',
            name: 'policy_categories.create',
            component: () => import('@cruds/PolicyCategories/Create.vue'),
            meta: { title: 'cruds.policyCategory.title' }
          },
          {
            path: 'policy-categories/:id',
            name: 'policy_categories.show',
            component: () => import('@cruds/PolicyCategories/Show.vue'),
            meta: { title: 'cruds.policyCategory.title' }
          },
          {
            path: 'policy-categories/:id/edit',
            name: 'policy_categories.edit',
            component: () => import('@cruds/PolicyCategories/Edit.vue'),
            meta: { title: 'cruds.policyCategory.title' }
          },
          {
            path: 'policies',
            name: 'policies.index',
            component: () => import('@cruds/Policies/Index.vue'),
            meta: { title: 'cruds.policy.title' }
          },
          {
            path: 'policies/create',
            name: 'policies.create',
            component: () => import('@cruds/Policies/Create.vue'),
            meta: { title: 'cruds.policy.title' }
          },
          {
            path: 'policies/:id',
            name: 'policies.show',
            component: () => import('@cruds/Policies/Show.vue'),
            meta: { title: 'cruds.policy.title' }
          },
          {
            path: 'policies/:id/edit',
            name: 'policies.edit',
            component: () => import('@cruds/Policies/Edit.vue'),
            meta: { title: 'cruds.policy.title' }
          }
        ]
      },
      {
        path: 'download-management',
        name: 'download_management',
        component: View,
        redirect: { name: 'download_categories.index' },
        children: [
          {
            path: 'download-categories',
            name: 'download_categories.index',
            component: () => import('@cruds/DownloadCategories/Index.vue'),
            meta: { title: 'cruds.downloadCategory.title' }
          },
          {
            path: 'download-categories/create',
            name: 'download_categories.create',
            component: () => import('@cruds/DownloadCategories/Create.vue'),
            meta: { title: 'cruds.downloadCategory.title' }
          },
          {
            path: 'download-categories/:id',
            name: 'download_categories.show',
            component: () => import('@cruds/DownloadCategories/Show.vue'),
            meta: { title: 'cruds.downloadCategory.title' }
          },
          {
            path: 'download-categories/:id/edit',
            name: 'download_categories.edit',
            component: () => import('@cruds/DownloadCategories/Edit.vue'),
            meta: { title: 'cruds.downloadCategory.title' }
          },
          {
            path: 'downloads',
            name: 'downloads.index',
            component: () => import('@cruds/Downloads/Index.vue'),
            meta: { title: 'cruds.download.title' }
          },
          {
            path: 'downloads/create',
            name: 'downloads.create',
            component: () => import('@cruds/Downloads/Create.vue'),
            meta: { title: 'cruds.download.title' }
          },
          {
            path: 'downloads/:id',
            name: 'downloads.show',
            component: () => import('@cruds/Downloads/Show.vue'),
            meta: { title: 'cruds.download.title' }
          },
          {
            path: 'downloads/:id/edit',
            name: 'downloads.edit',
            component: () => import('@cruds/Downloads/Edit.vue'),
            meta: { title: 'cruds.download.title' }
          }
        ]
      },
      {
        path: 'examination-results',
        name: 'examination_results.index',
        component: () => import('@cruds/ExaminationResults/Index.vue'),
        meta: { title: 'cruds.examinationResult.title' }
      },
      {
        path: 'examination-results/create',
        name: 'examination_results.create',
        component: () => import('@cruds/ExaminationResults/Create.vue'),
        meta: { title: 'cruds.examinationResult.title' }
      },
      {
        path: 'examination-results/:id',
        name: 'examination_results.show',
        component: () => import('@cruds/ExaminationResults/Show.vue'),
        meta: { title: 'cruds.examinationResult.title' }
      },
      {
        path: 'examination-results/:id/edit',
        name: 'examination_results.edit',
        component: () => import('@cruds/ExaminationResults/Edit.vue'),
        meta: { title: 'cruds.examinationResult.title' }
      },
      {
        path: 'statistic-management',
        name: 'statistic_management',
        component: View,
        redirect: { name: 'statistic_categories.index' },
        children: [
          {
            path: 'statistic-categories',
            name: 'statistic_categories.index',
            component: () => import('@cruds/StatisticCategories/Index.vue'),
            meta: { title: 'cruds.statisticCategory.title' }
          },
          {
            path: 'statistic-categories/create',
            name: 'statistic_categories.create',
            component: () => import('@cruds/StatisticCategories/Create.vue'),
            meta: { title: 'cruds.statisticCategory.title' }
          },
          {
            path: 'statistic-categories/:id',
            name: 'statistic_categories.show',
            component: () => import('@cruds/StatisticCategories/Show.vue'),
            meta: { title: 'cruds.statisticCategory.title' }
          },
          {
            path: 'statistic-categories/:id/edit',
            name: 'statistic_categories.edit',
            component: () => import('@cruds/StatisticCategories/Edit.vue'),
            meta: { title: 'cruds.statisticCategory.title' }
          },
          {
            path: 'statistics',
            name: 'statistics.index',
            component: () => import('@cruds/Statistics/Index.vue'),
            meta: { title: 'cruds.statistic.title' }
          },
          {
            path: 'statistics/create',
            name: 'statistics.create',
            component: () => import('@cruds/Statistics/Create.vue'),
            meta: { title: 'cruds.statistic.title' }
          },
          {
            path: 'statistics/:id',
            name: 'statistics.show',
            component: () => import('@cruds/Statistics/Show.vue'),
            meta: { title: 'cruds.statistic.title' }
          },
          {
            path: 'statistics/:id/edit',
            name: 'statistics.edit',
            component: () => import('@cruds/Statistics/Edit.vue'),
            meta: { title: 'cruds.statistic.title' }
          }
        ]
      },
      {
        path: 'user-management',
        name: 'user_management',
        component: View,
        redirect: { name: 'permissions.index' },
        children: [
          {
            path: 'permissions',
            name: 'permissions.index',
            component: () => import('@cruds/Permissions/Index.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/create',
            name: 'permissions.create',
            component: () => import('@cruds/Permissions/Create.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/:id',
            name: 'permissions.show',
            component: () => import('@cruds/Permissions/Show.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/:id/edit',
            name: 'permissions.edit',
            component: () => import('@cruds/Permissions/Edit.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'roles',
            name: 'roles.index',
            component: () => import('@cruds/Roles/Index.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/create',
            name: 'roles.create',
            component: () => import('@cruds/Roles/Create.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/:id',
            name: 'roles.show',
            component: () => import('@cruds/Roles/Show.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/:id/edit',
            name: 'roles.edit',
            component: () => import('@cruds/Roles/Edit.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'users',
            name: 'users.index',
            component: () => import('@cruds/Users/Index.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/create',
            name: 'users.create',
            component: () => import('@cruds/Users/Create.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/:id',
            name: 'users.show',
            component: () => import('@cruds/Users/Show.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/:id/edit',
            name: 'users.edit',
            component: () => import('@cruds/Users/Edit.vue'),
            meta: { title: 'cruds.user.title' }
          }
        ]
      }
    ]
  },
  {
    path: '/',
    component: () => import('@pages/Layout/Home.vue'),
    redirect: 'home',
    children: [
      {
        path: 'home',
        name: 'home.index',
        component: () => import('@cruds/Homes/Index.vue'),
        meta: { title: 'cruds.home.title' }
      }
    ]
  }
]

export default new VueRouter({
  mode: 'history',
  base: '/',
  routes
})
