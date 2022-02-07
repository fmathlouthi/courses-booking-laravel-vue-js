import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const View = { template: '<router-view></router-view>' }

const routes = [{
    path: '/',
    component: () =>
        import ('@pages/Layout/DashboardLayout.vue'),
    redirect: 'dashboard',
    children: [{
            path: 'dashboard',
            name: 'dashboard',
            component: () =>
                import ('@pages/Dashboard.vue'),
            meta: { title: 'global.dashboard' }
        },
        {
            path: 'user-management',
            name: 'user_management',
            component: View,
            redirect: { name: 'permissions.index' },
            children: [{
                    path: 'permissions',
                    name: 'permissions.index',
                    component: () =>
                        import ('@cruds/Permissions/Index.vue'),
                    meta: { title: 'cruds.permission.title' }
                },
                {
                    path: 'permissions/create',
                    name: 'permissions.create',
                    component: () =>
                        import ('@cruds/Permissions/Create.vue'),
                    meta: { title: 'cruds.permission.title' }
                },
                {
                    path: 'permissions/:id',
                    name: 'permissions.show',
                    component: () =>
                        import ('@cruds/Permissions/Show.vue'),
                    meta: { title: 'cruds.permission.title' }
                },
                {
                    path: 'permissions/:id/edit',
                    name: 'permissions.edit',
                    component: () =>
                        import ('@cruds/Permissions/Edit.vue'),
                    meta: { title: 'cruds.permission.title' }
                },
                {
                    path: 'roles',
                    name: 'roles.index',
                    component: () =>
                        import ('@cruds/Roles/Index.vue'),
                    meta: { title: 'cruds.role.title' }
                },
                {
                    path: 'roles/create',
                    name: 'roles.create',
                    component: () =>
                        import ('@cruds/Roles/Create.vue'),
                    meta: { title: 'cruds.role.title' }
                },
                {
                    path: 'roles/:id',
                    name: 'roles.show',
                    component: () =>
                        import ('@cruds/Roles/Show.vue'),
                    meta: { title: 'cruds.role.title' }
                },
                {
                    path: 'roles/:id/edit',
                    name: 'roles.edit',
                    component: () =>
                        import ('@cruds/Roles/Edit.vue'),
                    meta: { title: 'cruds.role.title' }
                },
                {
                    path: 'users',
                    name: 'users.index',
                    component: () =>
                        import ('@cruds/Users/Index.vue'),
                    meta: { title: 'cruds.user.title' }
                },
                {
                    path: 'users/create',
                    name: 'users.create',
                    component: () =>
                        import ('@cruds/Users/Create.vue'),
                    meta: { title: 'cruds.user.title' }
                },
                {
                    path: 'users/:id',
                    name: 'users.show',
                    component: () =>
                        import ('@cruds/Users/Show.vue'),
                    meta: { title: 'cruds.user.title' }
                },
                {
                    path: 'users/:id/edit',
                    name: 'users.edit',
                    component: () =>
                        import ('@cruds/Users/Edit.vue'),
                    meta: { title: 'cruds.user.title' }
                }
            ]
        },
        {
            path: 'contact-management',
            name: 'contact_management',
            component: View,
            redirect: { name: 'contact_companies.index' },
            children: [{
                    path: 'contact-companies',
                    name: 'contact_companies.index',
                    component: () =>
                        import ('@cruds/ContactCompanies/Index.vue'),
                    meta: { title: 'cruds.contactCompany.title' }
                },
                {
                    path: 'contact-companies/create',
                    name: 'contact_companies.create',
                    component: () =>
                        import ('@cruds/ContactCompanies/Create.vue'),
                    meta: { title: 'cruds.contactCompany.title' }
                },
                {
                    path: 'contact-companies/:id',
                    name: 'contact_companies.show',
                    component: () =>
                        import ('@cruds/ContactCompanies/Show.vue'),
                    meta: { title: 'cruds.contactCompany.title' }
                },
                {
                    path: 'contact-companies/:id/edit',
                    name: 'contact_companies.edit',
                    component: () =>
                        import ('@cruds/ContactCompanies/Edit.vue'),
                    meta: { title: 'cruds.contactCompany.title' }
                },
                {
                    path: 'contact-contacts',
                    name: 'contact_contacts.index',
                    component: () =>
                        import ('@cruds/ContactContacts/Index.vue'),
                    meta: { title: 'cruds.contactContact.title' }
                },
                {
                    path: 'contact-contacts/create',
                    name: 'contact_contacts.create',
                    component: () =>
                        import ('@cruds/ContactContacts/Create.vue'),
                    meta: { title: 'cruds.contactContact.title' }
                },
                {
                    path: 'contact-contacts/:id',
                    name: 'contact_contacts.show',
                    component: () =>
                        import ('@cruds/ContactContacts/Show.vue'),
                    meta: { title: 'cruds.contactContact.title' }
                },
                {
                    path: 'contact-contacts/:id/edit',
                    name: 'contact_contacts.edit',
                    component: () =>
                        import ('@cruds/ContactContacts/Edit.vue'),
                    meta: { title: 'cruds.contactContact.title' }
                }
            ]
        },
        {
            path: 'transactions',
            name: 'transactions.index',
            component: () =>
                import ('@cruds/Transactions/Index.vue'),
            meta: { title: 'cruds.transaction.title' }
        },
        {
            path: 'transactions/create',
            name: 'transactions.create',
            component: () =>
                import ('@cruds/Transactions/Create.vue'),
            meta: { title: 'cruds.transaction.title' }
        },
        {
            path: 'transactions/:id',
            name: 'transactions.show',
            component: () =>
                import ('@cruds/Transactions/Show.vue'),
            meta: { title: 'cruds.transaction.title' }
        },
        {
            path: 'transactions/:id/edit',
            name: 'transactions.edit',
            component: () =>
                import ('@cruds/Transactions/Edit.vue'),
            meta: { title: 'cruds.transaction.title' }
        },
        {
            path: 'globale-data',
            name: 'globale_data',
            component: View,
            redirect: { name: 'coupons.index' },
            children: [{
                    path: 'coupons',
                    name: 'coupons.index',
                    component: () =>
                        import ('@cruds/Coupons/Index.vue'),
                    meta: { title: 'cruds.coupon.title' }
                },
                {
                    path: 'coupons/create',
                    name: 'coupons.create',
                    component: () =>
                        import ('@cruds/Coupons/Create.vue'),
                    meta: { title: 'cruds.coupon.title' }
                },
                {
                    path: 'coupons/:id',
                    name: 'coupons.show',
                    component: () =>
                        import ('@cruds/Coupons/Show.vue'),
                    meta: { title: 'cruds.coupon.title' }
                },
                {
                    path: 'coupons/:id/edit',
                    name: 'coupons.edit',
                    component: () =>
                        import ('@cruds/Coupons/Edit.vue'),
                    meta: { title: 'cruds.coupon.title' }
                },
                {
                    path: 'languages',
                    name: 'languages.index',
                    component: () =>
                        import ('@cruds/Languages/Index.vue'),
                    meta: { title: 'cruds.language.title' }
                },
                {
                    path: 'languages/create',
                    name: 'languages.create',
                    component: () =>
                        import ('@cruds/Languages/Create.vue'),
                    meta: { title: 'cruds.language.title' }
                },
                {
                    path: 'languages/:id',
                    name: 'languages.show',
                    component: () =>
                        import ('@cruds/Languages/Show.vue'),
                    meta: { title: 'cruds.language.title' }
                },
                {
                    path: 'languages/:id/edit',
                    name: 'languages.edit',
                    component: () =>
                        import ('@cruds/Languages/Edit.vue'),
                    meta: { title: 'cruds.language.title' }
                },
                {
                    path: 'countries',
                    name: 'countries.index',
                    component: () =>
                        import ('@cruds/Countries/Index.vue'),
                    meta: { title: 'cruds.country.title' }
                },
                {
                    path: 'countries/create',
                    name: 'countries.create',
                    component: () =>
                        import ('@cruds/Countries/Create.vue'),
                    meta: { title: 'cruds.country.title' }
                },
                {
                    path: 'countries/:id',
                    name: 'countries.show',
                    component: () =>
                        import ('@cruds/Countries/Show.vue'),
                    meta: { title: 'cruds.country.title' }
                },
                {
                    path: 'countries/:id/edit',
                    name: 'countries.edit',
                    component: () =>
                        import ('@cruds/Countries/Edit.vue'),
                    meta: { title: 'cruds.country.title' }
                },
                {
                    path: 'cities',
                    name: 'cities.index',
                    component: () =>
                        import ('@cruds/Cities/Index.vue'),
                    meta: { title: 'cruds.city.title' }
                },
                {
                    path: 'cities/create',
                    name: 'cities.create',
                    component: () =>
                        import ('@cruds/Cities/Create.vue'),
                    meta: { title: 'cruds.city.title' }
                },
                {
                    path: 'cities/:id',
                    name: 'cities.show',
                    component: () =>
                        import ('@cruds/Cities/Show.vue'),
                    meta: { title: 'cruds.city.title' }
                },
                {
                    path: 'cities/:id/edit',
                    name: 'cities.edit',
                    component: () =>
                        import ('@cruds/Cities/Edit.vue'),
                    meta: { title: 'cruds.city.title' }
                },
                {
                    path: 'features',
                    name: 'features.index',
                    component: () =>
                        import ('@cruds/Features/Index.vue'),
                    meta: { title: 'cruds.feature.title' }
                },
                {
                    path: 'features/create',
                    name: 'features.create',
                    component: () =>
                        import ('@cruds/Features/Create.vue'),
                    meta: { title: 'cruds.feature.title' }
                },
                {
                    path: 'features/:id',
                    name: 'features.show',
                    component: () =>
                        import ('@cruds/Features/Show.vue'),
                    meta: { title: 'cruds.feature.title' }
                },
                {
                    path: 'features/:id/edit',
                    name: 'features.edit',
                    component: () =>
                        import ('@cruds/Features/Edit.vue'),
                    meta: { title: 'cruds.feature.title' }
                }
            ]
        },
        {
            path: 'university-course',
            name: 'university_course',
            component: View,
            redirect: { name: 'course_orders.index' },
            children: [{
                    path: 'course-orders',
                    name: 'course_orders.index',
                    component: () =>
                        import ('@cruds/CourseOrders/Index.vue'),
                    meta: { title: 'cruds.courseOrder.title' }
                },
                {
                    path: 'course-orders/create',
                    name: 'course_orders.create',
                    component: () =>
                        import ('@cruds/CourseOrders/Create.vue'),
                    meta: { title: 'cruds.courseOrder.title' }
                },
                {
                    path: 'course-orders/:id',
                    name: 'course_orders.show',
                    component: () =>
                        import ('@cruds/CourseOrders/Show.vue'),
                    meta: { title: 'cruds.courseOrder.title' }
                },
                {
                    path: 'course-orders/:id/edit',
                    name: 'course_orders.edit',
                    component: () =>
                        import ('@cruds/CourseOrders/Edit.vue'),
                    meta: { title: 'cruds.courseOrder.title' }
                },
                {
                    path: 'availabilities',
                    name: 'availabilities.index',
                    component: () =>
                        import ('@cruds/Availabilities/Index.vue'),
                    meta: { title: 'cruds.availability.title' }
                },
                {
                    path: 'availabilities/create',
                    name: 'availabilities.create',
                    component: () =>
                        import ('@cruds/Availabilities/Create.vue'),
                    meta: { title: 'cruds.availability.title' }
                },
                {
                    path: 'availabilities/:id',
                    name: 'availabilities.show',
                    component: () =>
                        import ('@cruds/Availabilities/Show.vue'),
                    meta: { title: 'cruds.availability.title' }
                },
                {
                    path: 'availabilities/:id/edit',
                    name: 'availabilities.edit',
                    component: () =>
                        import ('@cruds/Availabilities/Edit.vue'),
                    meta: { title: 'cruds.availability.title' }
                },
                {
                    path: 'extras',
                    name: 'extras.index',
                    component: () =>
                        import ('@cruds/Extras/Index.vue'),
                    meta: { title: 'cruds.extra.title' }
                },
                {
                    path: 'extras/create',
                    name: 'extras.create',
                    component: () =>
                        import ('@cruds/Extras/Create.vue'),
                    meta: { title: 'cruds.extra.title' }
                },
                {
                    path: 'extras/:id',
                    name: 'extras.show',
                    component: () =>
                        import ('@cruds/Extras/Show.vue'),
                    meta: { title: 'cruds.extra.title' }
                },
                {
                    path: 'extras/:id/edit',
                    name: 'extras.edit',
                    component: () =>
                        import ('@cruds/Extras/Edit.vue'),
                    meta: { title: 'cruds.extra.title' }
                },
                {
                    path: 'accommodations',
                    name: 'accommodations.index',
                    component: () =>
                        import ('@cruds/Accommodations/Index.vue'),
                    meta: { title: 'cruds.accommodation.title' }
                },
                {
                    path: 'accommodations/create',
                    name: 'accommodations.create',
                    component: () =>
                        import ('@cruds/Accommodations/Create.vue'),
                    meta: { title: 'cruds.accommodation.title' }
                },
                {
                    path: 'accommodations/:id',
                    name: 'accommodations.show',
                    component: () =>
                        import ('@cruds/Accommodations/Show.vue'),
                    meta: { title: 'cruds.accommodation.title' }
                },
                {
                    path: 'accommodations/:id/edit',
                    name: 'accommodations.edit',
                    component: () =>
                        import ('@cruds/Accommodations/Edit.vue'),
                    meta: { title: 'cruds.accommodation.title' }
                },
                {
                    path: 'univercity-courses',
                    name: 'univercity_courses.index',
                    component: () =>
                        import ('@cruds/UnivercityCourses/Index.vue'),
                    meta: { title: 'cruds.univercityCourse.title' }
                },
                {
                    path: 'univercity-courses/create',
                    name: 'univercity_courses.create',
                    component: () =>
                        import ('@cruds/UnivercityCourses/Create.vue'),
                    meta: { title: 'cruds.univercityCourse.title' }
                },
                {
                    path: 'univercity-courses/:id',
                    name: 'univercity_courses.show',
                    component: () =>
                        import ('@cruds/UnivercityCourses/Show.vue'),
                    meta: { title: 'cruds.univercityCourse.title' }
                },
                {
                    path: 'univercity-courses/:id/edit',
                    name: 'univercity_courses.edit',
                    component: () =>
                        import ('@cruds/UnivercityCourses/Edit.vue'),
                    meta: { title: 'cruds.univercityCourse.title' }
                },
                {
                    path: 'weekly-courses',
                    name: 'weekly_courses.index',
                    component: () =>
                        import ('@cruds/WeeklyCourses/Index.vue'),
                    meta: { title: 'cruds.weeklyCourse.title' }
                },
                {
                    path: 'weekly-courses/create',
                    name: 'weekly_courses.create',
                    component: () =>
                        import ('@cruds/WeeklyCourses/Create.vue'),
                    meta: { title: 'cruds.weeklyCourse.title' }
                },
                {
                    path: 'weekly-courses/:id',
                    name: 'weekly_courses.show',
                    component: () =>
                        import ('@cruds/WeeklyCourses/Show.vue'),
                    meta: { title: 'cruds.weeklyCourse.title' }
                },
                {
                    path: 'weekly-courses/:id/edit',
                    name: 'weekly_courses.edit',
                    component: () =>
                        import ('@cruds/WeeklyCourses/Edit.vue'),
                    meta: { title: 'cruds.weeklyCourse.title' }
                },
                {
                    path: 'semester-courses',
                    name: 'semester_courses.index',
                    component: () =>
                        import ('@cruds/SemesterCourses/Index.vue'),
                    meta: { title: 'cruds.semesterCourse.title' }
                },
                {
                    path: 'semester-courses/create',
                    name: 'semester_courses.create',
                    component: () =>
                        import ('@cruds/SemesterCourses/Create.vue'),
                    meta: { title: 'cruds.semesterCourse.title' }
                },
                {
                    path: 'semester-courses/:id',
                    name: 'semester_courses.show',
                    component: () =>
                        import ('@cruds/SemesterCourses/Show.vue'),
                    meta: { title: 'cruds.semesterCourse.title' }
                },
                {
                    path: 'semester-courses/:id/edit',
                    name: 'semester_courses.edit',
                    component: () =>
                        import ('@cruds/SemesterCourses/Edit.vue'),
                    meta: { title: 'cruds.semesterCourse.title' }
                },
                {
                    path: 'semester-course-variantes',
                    name: 'semester_course_variantes.index',
                    component: () =>
                        import ('@cruds/SemesterCourseVariantes/Index.vue'),
                    meta: { title: 'cruds.semesterCourseVariante.title' }
                },
                {
                    path: 'semester-course-variantes/create',
                    name: 'semester_course_variantes.create',
                    component: () =>
                        import ('@cruds/SemesterCourseVariantes/Create.vue'),
                    meta: { title: 'cruds.semesterCourseVariante.title' }
                },
                {
                    path: 'semester-course-variantes/:id',
                    name: 'semester_course_variantes.show',
                    component: () =>
                        import ('@cruds/SemesterCourseVariantes/Show.vue'),
                    meta: { title: 'cruds.semesterCourseVariante.title' }
                },
                {
                    path: 'semester-course-variantes/:id/edit',
                    name: 'semester_course_variantes.edit',
                    component: () =>
                        import ('@cruds/SemesterCourseVariantes/Edit.vue'),
                    meta: { title: 'cruds.semesterCourseVariante.title' }
                }
            ]
        },
        {
            path: 'accommodations-section',
            name: 'accommodations_section',
            component: View,
            redirect: { name: 'weekly_accommodations.index' },
            children: [{
                    path: 'weekly-accommodations',
                    name: 'weekly_accommodations.index',
                    component: () =>
                        import ('@cruds/WeeklyAccommodations/Index.vue'),
                    meta: { title: 'cruds.weeklyAccommodation.title' }
                },
                {
                    path: 'weekly-accommodations/create',
                    name: 'weekly_accommodations.create',
                    component: () =>
                        import ('@cruds/WeeklyAccommodations/Create.vue'),
                    meta: { title: 'cruds.weeklyAccommodation.title' }
                },
                {
                    path: 'weekly-accommodations/:id',
                    name: 'weekly_accommodations.show',
                    component: () =>
                        import ('@cruds/WeeklyAccommodations/Show.vue'),
                    meta: { title: 'cruds.weeklyAccommodation.title' }
                },
                {
                    path: 'weekly-accommodations/:id/edit',
                    name: 'weekly_accommodations.edit',
                    component: () =>
                        import ('@cruds/WeeklyAccommodations/Edit.vue'),
                    meta: { title: 'cruds.weeklyAccommodation.title' }
                },
                {
                    path: 'semester-accommodations',
                    name: 'semester_accommodations.index',
                    component: () =>
                        import ('@cruds/SemesterAccommodations/Index.vue'),
                    meta: { title: 'cruds.semesterAccommodation.title' }
                },
                {
                    path: 'semester-accommodations/create',
                    name: 'semester_accommodations.create',
                    component: () =>
                        import ('@cruds/SemesterAccommodations/Create.vue'),
                    meta: { title: 'cruds.semesterAccommodation.title' }
                },
                {
                    path: 'semester-accommodations/:id',
                    name: 'semester_accommodations.show',
                    component: () =>
                        import ('@cruds/SemesterAccommodations/Show.vue'),
                    meta: { title: 'cruds.semesterAccommodation.title' }
                },
                {
                    path: 'semester-accommodations/:id/edit',
                    name: 'semester_accommodations.edit',
                    component: () =>
                        import ('@cruds/SemesterAccommodations/Edit.vue'),
                    meta: { title: 'cruds.semesterAccommodation.title' }
                },
                {
                    path: 'semester-accomm-variantes',
                    name: 'semester_accomm_variantes.index',
                    component: () =>
                        import ('@cruds/SemesterAccommVariantes/Index.vue'),
                    meta: { title: 'cruds.semesterAccommVariante.title' }
                },
                {
                    path: 'semester-accomm-variantes/create',
                    name: 'semester_accomm_variantes.create',
                    component: () =>
                        import ('@cruds/SemesterAccommVariantes/Create.vue'),
                    meta: { title: 'cruds.semesterAccommVariante.title' }
                },
                {
                    path: 'semester-accomm-variantes/:id',
                    name: 'semester_accomm_variantes.show',
                    component: () =>
                        import ('@cruds/SemesterAccommVariantes/Show.vue'),
                    meta: { title: 'cruds.semesterAccommVariante.title' }
                },
                {
                    path: 'semester-accomm-variantes/:id/edit',
                    name: 'semester_accomm_variantes.edit',
                    component: () =>
                        import ('@cruds/SemesterAccommVariantes/Edit.vue'),
                    meta: { title: 'cruds.semesterAccommVariante.title' }
                }
            ]
        },
        {
            path: 'pathway-program',
            name: 'pathway_program',
            component: View,
            redirect: { name: 'pathway_universities.index' },
            children: [{
                    path: 'pathway-universities',
                    name: 'pathway_universities.index',
                    component: () =>
                        import ('@cruds/PathwayUniversities/Index.vue'),
                    meta: { title: 'cruds.pathwayUniversity.title' }
                },
                {
                    path: 'pathway-universities/create',
                    name: 'pathway_universities.create',
                    component: () =>
                        import ('@cruds/PathwayUniversities/Create.vue'),
                    meta: { title: 'cruds.pathwayUniversity.title' }
                },
                {
                    path: 'pathway-universities/:id',
                    name: 'pathway_universities.show',
                    component: () =>
                        import ('@cruds/PathwayUniversities/Show.vue'),
                    meta: { title: 'cruds.pathwayUniversity.title' }
                },
                {
                    path: 'pathway-universities/:id/edit',
                    name: 'pathway_universities.edit',
                    component: () =>
                        import ('@cruds/PathwayUniversities/Edit.vue'),
                    meta: { title: 'cruds.pathwayUniversity.title' }
                },
                {
                    path: 'pathways',
                    name: 'pathways.index',
                    component: () =>
                        import ('@cruds/Pathways/Index.vue'),
                    meta: { title: 'cruds.pathway.title' }
                },
                {
                    path: 'pathways/create',
                    name: 'pathways.create',
                    component: () =>
                        import ('@cruds/Pathways/Create.vue'),
                    meta: { title: 'cruds.pathway.title' }
                },
                {
                    path: 'pathways/:id',
                    name: 'pathways.show',
                    component: () =>
                        import ('@cruds/Pathways/Show.vue'),
                    meta: { title: 'cruds.pathway.title' }
                },
                {
                    path: 'pathways/:id/edit',
                    name: 'pathways.edit',
                    component: () =>
                        import ('@cruds/Pathways/Edit.vue'),
                    meta: { title: 'cruds.pathway.title' }
                }
            ]
        },
        {
            path: 'universities-program',
            name: 'universities_program',
            component: View,
            redirect: { name: 'university_subjects.index' },
            children: [{
                    path: 'university-subjects',
                    name: 'university_subjects.index',
                    component: () =>
                        import ('@cruds/UniversitySubjects/Index.vue'),
                    meta: { title: 'cruds.universitySubject.title' }
                },
                {
                    path: 'university-subjects/create',
                    name: 'university_subjects.create',
                    component: () =>
                        import ('@cruds/UniversitySubjects/Create.vue'),
                    meta: { title: 'cruds.universitySubject.title' }
                },
                {
                    path: 'university-subjects/:id',
                    name: 'university_subjects.show',
                    component: () =>
                        import ('@cruds/UniversitySubjects/Show.vue'),
                    meta: { title: 'cruds.universitySubject.title' }
                },
                {
                    path: 'university-subjects/:id/edit',
                    name: 'university_subjects.edit',
                    component: () =>
                        import ('@cruds/UniversitySubjects/Edit.vue'),
                    meta: { title: 'cruds.universitySubject.title' }
                },
                {
                    path: 'subject-programs',
                    name: 'subject_programs.index',
                    component: () =>
                        import ('@cruds/SubjectPrograms/Index.vue'),
                    meta: { title: 'cruds.subjectProgram.title' }
                },
                {
                    path: 'subject-programs/create',
                    name: 'subject_programs.create',
                    component: () =>
                        import ('@cruds/SubjectPrograms/Create.vue'),
                    meta: { title: 'cruds.subjectProgram.title' }
                },
                {
                    path: 'subject-programs/:id',
                    name: 'subject_programs.show',
                    component: () =>
                        import ('@cruds/SubjectPrograms/Show.vue'),
                    meta: { title: 'cruds.subjectProgram.title' }
                },
                {
                    path: 'subject-programs/:id/edit',
                    name: 'subject_programs.edit',
                    component: () =>
                        import ('@cruds/SubjectPrograms/Edit.vue'),
                    meta: { title: 'cruds.subjectProgram.title' }
                }
            ]
        }
    ]
}]

export default new VueRouter({
    mode: 'history',
    base: '/admin',
    routes
})