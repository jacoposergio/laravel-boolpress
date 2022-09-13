<template>
    <header>
        <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav">
                            <li v-for="link, index in menuLinks" :key="index" class="nav-items">
                                <router-link class="nav-link" :to="{name : link.name}"  exact-path>{{link.label}} </router-link> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            menuLinks: [
                {
                    name: 'home',
                    label: 'Home',
                },
                {
                    name: 'about',
                    label: 'About',
                },
                {
                    name: 'blog',
                    label: 'Blog',
                },
            ],
        };
    },
}
</script>