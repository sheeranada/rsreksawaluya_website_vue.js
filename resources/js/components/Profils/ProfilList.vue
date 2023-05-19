<template>
    <div>
        <title-component :pageTitle="Judul" :route="route" />
        <h1>{{ route }}</h1>

    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title d-flex w-90 justify-content-between">
                <p>Data Profil RS</p>
                <router-link to="/profils/create">
                    <button class="btn btn-success btn-sm" type="button"><i class="fas fa-plus"></i> Tambah</button>
                </router-link>
            </h5>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kepemilikan</th>
                            <th scope="col">Direktur</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="profil in profil" :key="profil.id">
                            <td>{{ profil.alamat }}</td>
                            <td>{{ profil.telp }}</td>
                            <td>{{ profil.email }}</td>
                            <td>{{ profil.kepemilikan }}</td>
                            <td>{{ profil.direktur }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-3">
                                    <router-link :to="`/profils/${profil.id}`">
                                        <button class="btn btn-info btn-sm" type="button">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </router-link>
                                    <router-link :to="`/profils/${profil.id}/edit`">
                                        <button class="btn btn-warning btn-sm" type="button">
                                            <i class="fas fa-pencil"></i>
                                        </button>
                                    </router-link>
                                    <button @click="deleteProfil(profil.id)" type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>

<script>
import TitleComponent from '../Title.vue'
import axios from 'axios';

export default {
    components: {
        TitleComponent
    },
    data() {
        return {
            profil: [],
            Judul: 'Profil',
            route: 'profil'
        }
    },
    async created() {
        try {
            const response = await axios.get('/api/profils');
            this.profil = response.data;
        } catch (error) {
            console.error(error);
        }
    },
    methods: {
        async deleteProfil(id) {
            try {
                await axios.delete(`/api/profils/${id}`);
                this.profil = this.profil.filter(profil => profil.id !== id);
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>
