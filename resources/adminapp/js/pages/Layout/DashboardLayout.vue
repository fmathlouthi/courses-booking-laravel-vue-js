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
          path: { name: 'dashboard' },
          gate: 'user_management_access',
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
        {
          title: 'cruds.globaleData.title',
          icon: 'table_view',
          path: { name: 'globale_data' },
          gate: 'globale_data_access',
          children: [
            {
              title: 'cruds.coupon.title',
              icon: 'table_view',
              path: { name: 'coupons.index' },
              gate: 'coupon_access'
            },
            {
              title: 'cruds.language.title',
              icon: 'table_view',
              path: { name: 'languages.index' },
              gate: 'language_access'
            },
            {
              title: 'cruds.country.title',
              icon: 'table_view',
              path: { name: 'countries.index' },
              gate: 'country_access'
            },
            {
              title: 'cruds.city.title',
              icon: 'table_view',
              path: { name: 'cities.index' },
              gate: 'city_access'
            },
            {
              title: 'cruds.feature.title',
              icon: 'table_view',
              path: { name: 'features.index' },
              gate: 'feature_access'
            }
          ]
        },
        {
          title: 'cruds.universityCourse.title',
          icon: 'table_view',
          path: { name: 'university_course' },
          gate: 'university_course_access',
          children: [
            {
              title: 'cruds.courseOrder.title',
              icon: 'table_view',
              path: { name: 'course_orders.index' },
              gate: 'course_order_access'
            },
            {
              title: 'cruds.availability.title',
              icon: 'table_view',
              path: { name: 'availabilities.index' },
              gate: 'availability_access'
            },
            {
              title: 'cruds.extra.title',
              icon: 'table_view',
              path: { name: 'extras.index' },
              gate: 'extra_access'
            },
            {
              title: 'cruds.accommodation.title',
              icon: 'table_view',
              path: { name: 'accommodations.index' },
              gate: 'accommodation_access'
            },
            {
              title: 'cruds.univercityCourse.title',
              icon: 'table_view',
              path: { name: 'univercity_courses.index' },
              gate: 'univercity_course_access'
            },
            {
              title: 'cruds.weeklyCourse.title',
              icon: 'table_view',
              path: { name: 'weekly_courses.index' },
              gate: 'weekly_course_access'
            },
            {
              title: 'cruds.semesterCourse.title',
              icon: 'table_view',
              path: { name: 'semester_courses.index' },
              gate: 'semester_course_access'
            },
            /*{
              title: 'cruds.semesterCourseVariante.title',
              icon: 'table_view',
              path: { name: 'semester_course_variantes.index' },
              gate: 'semester_course_variante_access'
            }*/
          ]
        },
        {
          title: 'cruds.accommodationsSection.title',
          icon: 'table_view',
          path: { name: 'accommodations_section' },
          gate: 'accommodations_section_access',
          children: [
            {
              title: 'cruds.weeklyAccommodation.title',
              icon: 'table_view',
              path: { name: 'weekly_accommodations.index' },
              gate: 'weekly_accommodation_access'
            },
            {
              title: 'cruds.semesterAccommodation.title',
              icon: 'table_view',
              path: { name: 'semester_accommodations.index' },
              gate: 'semester_accommodation_access'
            },
           /* {
              title: 'cruds.semesterAccommVariante.title',
              icon: 'table_view',
              path: { name: 'semester_accomm_variantes.index' },
              gate: 'semester_accomm_variante_access'
            }*/
          ]
        },
        {
          title: 'cruds.pathwayProgram.title',
          icon: 'table_view',
          path: { name: 'pathway_program' },
          gate: 'pathway_program_access',
          children: [
            {
              title: 'cruds.pathwayUniversity.title',
              icon: 'table_view',
              path: { name: 'pathway_universities.index' },
              gate: 'pathway_university_access'
            },
            {
              title: 'cruds.pathway.title',
              icon: 'table_view',
              path: { name: 'pathways.index' },
              gate: 'pathway_access'
            }
          ]
        },
        {
          title: 'cruds.universitiesProgram.title',
          icon: 'table_view',
          path: { name: 'universities_program' },
          gate: 'universities_program_access',
          children: [
            {
              title: 'cruds.universitySubject.title',
              icon: 'table_view',
              path: { name: 'university_subjects.index' },
              gate: 'university_subject_access'
            },
            {
              title: 'cruds.subjectProgram.title',
              icon: 'table_view',
              path: { name: 'subject_programs.index' },
              gate: 'subject_program_access'
            }
          ]
        },
        {
              title: 'cruds.courseOrder.title',
              icon: 'table_view',
              path: { name: 'course_orders.index' },
              gate: 'course_order_user_access'
            }

       /* {
          title: 'cruds.contactManagement.title',
          icon: 'import_contacts',
          path: { name: 'contact_management' },
          gate: 'contact_management_access',
          children: [
            {
              title: 'cruds.contactCompany.title',
              icon: 'fas fa-building',
              path: { name: 'contact_companies.index' },
              gate: 'contact_company_access'
            },
            {
              title: 'cruds.contactContact.title',
              icon: 'fas fa-user-plus',
              path: { name: 'contact_contacts.index' },
              gate: 'contact_contact_access'
            }
          ]
        },
        {
          title: 'cruds.transaction.title',
          icon: 'table_view',
          path: { name: 'transactions.index' },
          gate: 'transaction_access'
        }*/
      ]
    }
  }
}
</script>
