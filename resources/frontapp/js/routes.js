import Welcome from './pages/Welcome.vue';
import Login from './pages/Login.vue';
import Aboutus from './pages/Aboutus.vue';
import Contactus from './pages/Contactus.vue';
import searchcourses from './pages/searchcourses.vue';
import searchaccommodation from './pages/searchaccommodation.vue';
import SingleCourse from './pages/SingleCourse.vue';
import Checkoutcourseweekly from './pages/Checkoutcourseweekly.vue';
import MultiSteps from './pages/MultiSteps.vue';


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
            path: '/multiSteps',
            name: 'Multi-Steps',
            component: MultiSteps
        },

        {
            path: '*',
            redirect: "/"
        }
    ]
};