<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Detail Profil</h2>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <input class="form-control" type="text" id="alamat" v-model="profil.alamat" readonly />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="telp" class="form-label">Telp:</label>
                    <input class="form-control" id="telp" v-model="profil.telp" readonly />
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email:</label>
                    <input class="form-control" type="email" id="email" v-model="profil.email" readonly />
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="kepemilikan" class="form-label">Kepemilikan:</label>
                    <input class="form-control" type="text" id="kepemilikan" v-model="profil.kepemilikan" readonly />
                </div>
                <div class="mb-3 col-6">
                    <label for="direktur" class="form-label">Direktur:</label>
                    <input class="form-control" type="text" id="direktur" v-model="profil.direktur" readonly />
                </div>
            </div>
            <div class="d-flex justify-content-center gap-2 mt-5">
                <router-link to="/profil">
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left-long"></i>
                        Kembali</button>
                </router-link>
                <router-link :to="`/profils/${profil.id}/edit`">
                    <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i>
                        Edit</button>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            profil: {}
        }
    },
    async created() {
        try {
            const response = await axios.get(`/api/profils/${this.$route.params.id}`);
            this.profil = response.data;
        } catch (error) {
            console.error(error);
        }
    }
}
</script>
