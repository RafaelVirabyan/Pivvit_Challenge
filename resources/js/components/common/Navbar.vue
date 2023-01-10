<template>
    <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
        <b-navbar-nav>
            <b-nav-item to="/donations">Donations</b-nav-item>
            <b-nav-item to="/donations/create">Create Donation</b-nav-item>
        </b-navbar-nav>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    </b-navbar>
    </div>
</template>

<script>
    export default {
        name: 'Navbar'
    }
</script>
