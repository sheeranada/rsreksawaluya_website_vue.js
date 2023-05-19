<template>
    <div>
        <title-component :pageTitle="Judul" :route="route" />
        <h1>{{ route }}</h1>

    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <p>Dashboard</p>
            </h5>

            <h1>Selamat Datang</h1>

        </div>
    </div>
</template>

<script>
import TitleComponent from '../Title.vue';

export default {
    components: {
        TitleComponent
    },
    data() {
        return {
            Judul: 'Dashboard',
            route: 'Admin'
        };
    }
}
</script>
