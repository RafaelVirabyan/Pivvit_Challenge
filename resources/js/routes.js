import Donation from './components/views/Donation'
import CreateDonation from './components/views/CreateDonation'
import Login from './components/views/Login'

const routes = [
    { 
        path: '/donations',
        component: Donation
    },
    { 
        path: '/donations/create',
        component: CreateDonation
    },
    {
        path: '/login',
        component: Login
    }
];
    
export default routes