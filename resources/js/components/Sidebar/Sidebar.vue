<template>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <router-link to="/" v-slot="{ href, navigate, isActive, isExactActive }">
                <li class="nav-item">
                    <a :class="[isActive && 'nav-link', isExactActive && 'nav-link collapsed']" :href="href"
                        @click="navigate">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </router-link>
            <router-link to="/profil" v-slot="{ href, navigate, isActive, isExactActive }">
                <li class="nav-item">
                    <a :class="[isActive && 'nav-link', isExactActive && 'nav-link collapsed']" :href="href"
                        @click="navigate">
                        <i class="bi bi-grid"></i>
                        <span>Profil</span>
                    </a>
                </li>
            </router-link>
            <!-- End Dashboard Nav -->
            <!-- <router-link to="/profil">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="">
                        <i class="bi bi-grid"></i>
                        <span>Profil</span>
                    </a>
                </li>
            </router-link> -->
            <!-- End Dashboard Nav -->



            <li class="nav-heading">Pages</li>


        </ul>

    </aside>
    <!-- End Sidebar-->
</template>

