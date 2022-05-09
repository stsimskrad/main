const routes = [{
    path: '/home',
    component: () =>
        import ('../Views/Home.vue'),
    name: 'home',
}, {
    path: '/profile',
    component: () =>
        import ('../Views/Profile.vue'),
    name: 'profile',
}, {
    path: '/users',
    component: () =>
        import ('../Views/Users/Index.vue'),
    name: 'users',
    beforeEnter: admin
}, {
    path: '/locations',
    component: () =>
        import ('../Views/Address.vue'),
    name: 'locations',
    beforeEnter: admin
}, {
    path: '/agencies',
    component: () =>
        import ('../Views/Agency.vue'),
    name: 'agencies',
    beforeEnter: admin
}, {
    path: '/programs',
    component: () =>
        import ('../Views/Program.vue'),
    name: 'programs',
    beforeEnter: admin
}, {
    path: '/schools',
    component: () =>
        import ('../Views/School/Index.vue'),
    name: 'schools',
    beforeEnter: admin
}, {
    path: '/school/:id',
    component: () =>
        import ('../Views/School/View.vue'),
    name: 'school/profile'
}, {
    path: '/courses',
    component: () =>
        import ('../Views/Course.vue'),
    name: 'courses',
    beforeEnter: admin
}, {
    path: '/expenses',
    component: () =>
        import ('../Views/Expense.vue'),
    name: 'expenses',
    beforeEnter: admin
}, {
    path: '/logs',
    component: () =>
        import ('../Views/Users/Logs.vue'),
    name: 'logs',
    beforeEnter: admin
}];



function admin(to, from, next) {
    (window.User.role == "Super Administrator") ? next(true): next({
        path: '/home'
    });
}

function coordinator(to, from, next) {
    (window.User.role == "Scholarship Coordinator") ? next(true): next({
        path: '/home'
    });
}

function staff(to, from, next) {
    (window.User.role == "Scholarship Staff") ? next(true): next({
        path: '/home'
    });
}

export default routes;