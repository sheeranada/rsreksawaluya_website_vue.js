<template>
    <sidebar-component />
    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">


                    <router-view></router-view>

                </div>
            </div>
        </section>
    </main>

    <footer-component />
</template>

<script>
import HeaderComponent from './Header/Header.vue'
import SidebarComponent from './Sidebar/Sidebar.vue'
import FooterComponent from '../components/Footer.vue'

export default {
    name: 'App',
    components: {
        SidebarComponent, HeaderComponent, FooterComponent
    }
}
</script>
