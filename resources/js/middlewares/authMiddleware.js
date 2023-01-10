export default function(to, from, next) {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        
        if (!auth.loggedIn()) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else {
        next() // make sure to always call next()!
    }
}