import Welcome from './pages/Welcome.vue';
import Login from './pages/Login.vue';
import Aboutus from './pages/Aboutus.vue';
import Contactus from './pages/Contactus.vue';
import searchcourses from './pages/searchcourses.vue';
import searchaccommodation from './pages/searchaccommodation.vue';
import searchsubjects from './pages/searchsubjects.vue';
import searchpathways from './pages/searchpathways.vue';
import SingleCourse from './pages/SingleCourse.vue';
import SingleAcommodation from './pages/SingleAccommodation.vue';
import SingleSubjectProgram from './pages/SingleSubjectProgram.vue';
import Singlepathway from './pages/Singlepathway.vue';
import Checkoutcourseweekly from './pages/Checkoutcourseweekly.vue';
import MultiSteps from './pages/MultiSteps.vue';
import MultiStepspathway from './pages/MultiStepspathway.vue';



export default {
    mode: 'history',
    routes: [{
            path: '/',
            component: Welcome,
            name: 'welocome'
        },
        {
            path: '/login',
            component: Login,
            name: 'login'
        },
        {
            path: '/aboutus',
            component: Aboutus,
            name: 'About us'
        },
        {
            path: '/contactus',
            component: Contactus,
            name: 'Contactus'
        },
        {
            path: '/searchcourses',
            component: searchcourses,
            name: 'search courses'
        },
        {
            path: '/searchaccommodation',
            component: searchaccommodation,
            name: ' search accommodation'
        },
        {
            path: '/searchsubjects',
            component: searchsubjects,
            name: ' search subjects'
        },
        {
            path: '/searchpathways',
            component: searchpathways,
            name: 'search pathways'
        },
        {
            path: '/checkoutcourseweekly',
            name: 'Checkout-course-weekly',
            component: Checkoutcourseweekly
        },
        {
            path: '/courses-weekly/:id',
            name: 'single-course',
            component: SingleCourse
        },
        {
            path: '/singleacommodation/:id',
            name: 'single-acommodation',
            component: SingleAcommodation
        },
        {
            path: '/singlesubjectprogram/:id',
            name: 'single-subject-program',
            component: SingleSubjectProgram
        },
        {
            path: '/Singlepathway/:id',
            name: 'single-pathway',
            component: Singlepathway
        },
        {
            path: '/universityrequests/:id',
            name: 'Multi-Steps',
            component: MultiSteps
        },
        {
            path: '/pathwayrequests/:id',
            name: 'Multi-Steps-pathway',
            component: MultiStepspathway
        },

        {
            path: '*',
            redirect: "/"
        }
    ]
};