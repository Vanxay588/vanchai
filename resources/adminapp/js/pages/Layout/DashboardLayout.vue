<template>
  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    <event-hub></event-hub>
    <side-bar :sidebarLinks="sidebarLinks">
      <mobile-menu slot="content"></mobile-menu>
    </side-bar>
    <div class="main-panel">
      <top-navbar></top-navbar>
      <div class="content">
        <dashboard-content></dashboard-content>
      </div>
    </div>
  </div>
</template>

<script>
import DashboardContent from './Content.vue'
import TopNavbar from './TopNavbar.vue'
import MobileMenu from './MobileMenu.vue'

export default {
  components: {
    DashboardContent,
    TopNavbar,
    MobileMenu
  },
  data() {
    return {
      sidebarLinks: [
        {
          title: 'global.dashboard',
          icon: 'dashboard',
          path: { name: 'dashboard' }
        },
        {
          title: 'cruds.annoucement.title',
          icon: 'announcement',
          path: { name: 'annoucements.index' },
          gate: 'annoucement_access'
        },
        {
          title: 'cruds.policyManagement.title',
          icon: 'campaign',
          path: { name: 'policy_management' },
          gate: 'policy_management_access',
          children: [
            {
              title: 'cruds.policyCategory.title',
              icon: 'table_view',
              path: { name: 'policy_categories.index' },
              gate: 'policy_category_access'
            },
            {
              title: 'cruds.policy.title',
              icon: 'table_view',
              path: { name: 'policies.index' },
              gate: 'policy_access'
            }
          ]
        },
        {
          title: 'cruds.downloadManagement.title',
          icon: 'download',
          path: { name: 'download_management' },
          gate: 'download_management_access',
          children: [
            {
              title: 'cruds.downloadCategory.title',
              icon: 'table_view',
              path: { name: 'download_categories.index' },
              gate: 'download_category_access'
            },
            {
              title: 'cruds.download.title',
              icon: 'table_view',
              path: { name: 'downloads.index' },
              gate: 'download_access'
            }
          ]
        },
         {
          title: 'cruds.examinationResult.title',
          icon: 'assignment',
          path: { name: 'examination_results.index' },
          gate: 'examination_result_access'
        },
        {
          title: 'cruds.statisticManagement.title',
          icon: 'trending_up',
          path: { name: 'statistic_management' },
          gate: 'statistic_management_access',
          children: [
            {
              title: 'cruds.statisticCategory.title',
              icon: 'table_view',
              path: { name: 'statistic_categories.index' },
              gate: 'statistic_category_access'
            },
            {
              title: 'cruds.statistic.title',
              icon: 'table_view',
              path: { name: 'statistics.index' },
              gate: 'statistic_access'
            }
          ]
        },
        {
          title: 'cruds.userManagement.title',
          icon: 'person',
          path: { name: 'user_management' },
          gate: 'user_management_access',
          children: [
            {
              title: 'cruds.permission.title',
              icon: 'perm_data_setting',
              path: { name: 'permissions.index' },
              gate: 'permission_access'
            },
            {
              title: 'cruds.role.title',
              icon: 'group',
              path: { name: 'roles.index' },
              gate: 'role_access'
            },
            {
              title: 'cruds.user.title',
              icon: 'person',
              path: { name: 'users.index' },
              gate: 'user_access'
            }
          ]
        },
      ]
    }
  }
}
</script>
