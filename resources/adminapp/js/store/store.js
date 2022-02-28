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
import ContactCompaniesIndex from './cruds/ContactCompanies'
import ContactCompaniesSingle from './cruds/ContactCompanies/single'
import ContactContactsIndex from './cruds/ContactContacts'
import ContactContactsSingle from './cruds/ContactContacts/single'
import TransactionsIndex from './cruds/Transactions'
import TransactionsSingle from './cruds/Transactions/single'
import CouponsIndex from './cruds/Coupons'
import CouponsSingle from './cruds/Coupons/single'
import CourseOrdersIndex from './cruds/CourseOrders'
import CourseOrdersSingle from './cruds/CourseOrders/single'
import LanguagesIndex from './cruds/Languages'
import LanguagesSingle from './cruds/Languages/single'
import AvailabilitiesIndex from './cruds/Availabilities'
import AvailabilitiesSingle from './cruds/Availabilities/single'
import CountriesIndex from './cruds/Countries'
import CountriesSingle from './cruds/Countries/single'
import CitiesIndex from './cruds/Cities'
import CitiesSingle from './cruds/Cities/single'
import ExtrasIndex from './cruds/Extras'
import ExtrasSingle from './cruds/Extras/single'
import AccommodationsIndex from './cruds/Accommodations'
import AccommodationsSingle from './cruds/Accommodations/single'
import UnivercityCoursesIndex from './cruds/UnivercityCourses'
import UnivercityCoursesSingle from './cruds/UnivercityCourses/single'
import FeaturesIndex from './cruds/Features'
import FeaturesSingle from './cruds/Features/single'
import WeeklyCoursesIndex from './cruds/WeeklyCourses'
import WeeklyCoursesSingle from './cruds/WeeklyCourses/single'
import SemesterCoursesIndex from './cruds/SemesterCourses'
import SemesterCoursesSingle from './cruds/SemesterCourses/single'
import SemesterCourseVariantesIndex from './cruds/SemesterCourseVariantes'
import SemesterCourseVariantesSingle from './cruds/SemesterCourseVariantes/single'
import WeeklyAccommodationsIndex from './cruds/WeeklyAccommodations'
import WeeklyAccommodationsSingle from './cruds/WeeklyAccommodations/single'
import SemesterAccommodationsIndex from './cruds/SemesterAccommodations'
import SemesterAccommodationsSingle from './cruds/SemesterAccommodations/single'
import SemesterAccommVariantesIndex from './cruds/SemesterAccommVariantes'
import SemesterAccommVariantesSingle from './cruds/SemesterAccommVariantes/single'
import PathwayUniversitiesIndex from './cruds/PathwayUniversities'
import PathwayUniversitiesSingle from './cruds/PathwayUniversities/single'
import PathwaysIndex from './cruds/Pathways'
import PathwaysSingle from './cruds/Pathways/single'
import UniversitySubjectsIndex from './cruds/UniversitySubjects'
import UniversitySubjectsSingle from './cruds/UniversitySubjects/single'
import SubjectProgramsIndex from './cruds/SubjectPrograms'
import SubjectProgramsSingle from './cruds/SubjectPrograms/single'
import SubjectsIndex from './cruds/Subjects'
import SubjectsSingle from './cruds/Subjects/single'

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
        ContactCompaniesIndex,
        ContactCompaniesSingle,
        ContactContactsIndex,
        ContactContactsSingle,
        TransactionsIndex,
        TransactionsSingle,
        CouponsIndex,
        CouponsSingle,
        CourseOrdersIndex,
        CourseOrdersSingle,
        LanguagesIndex,
        LanguagesSingle,
        AvailabilitiesIndex,
        AvailabilitiesSingle,
        CountriesIndex,
        CountriesSingle,
        CitiesIndex,
        CitiesSingle,
        ExtrasIndex,
        ExtrasSingle,
        AccommodationsIndex,
        AccommodationsSingle,
        UnivercityCoursesIndex,
        UnivercityCoursesSingle,
        FeaturesIndex,
        FeaturesSingle,
        WeeklyCoursesIndex,
        WeeklyCoursesSingle,
        SemesterCoursesIndex,
        SemesterCoursesSingle,
        SemesterCourseVariantesIndex,
        SemesterCourseVariantesSingle,
        WeeklyAccommodationsIndex,
        WeeklyAccommodationsSingle,
        SemesterAccommodationsIndex,
        SemesterAccommodationsSingle,
        SemesterAccommVariantesIndex,
        SemesterAccommVariantesSingle,
        PathwayUniversitiesIndex,
        PathwayUniversitiesSingle,
        PathwaysIndex,
        PathwaysSingle,
        UniversitySubjectsIndex,
        UniversitySubjectsSingle,
        SubjectProgramsIndex,
        SubjectProgramsSingle,
        SubjectsIndex,
        SubjectsSingle
    },
    strict: debug
})
