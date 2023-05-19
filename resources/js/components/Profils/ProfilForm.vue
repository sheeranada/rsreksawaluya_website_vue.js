<template>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2 v-if="isNewProfil">Tambah Data</h2>
                <h2 v-else>Edit Profil</h2>
            </div>
            <form @submit.prevent="submitForm">
                <div class="row">
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input class="form-control" type="text" id="alamat" v-model="profil.alamat" required />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="telp" class="form-label">Telp:</label>
                        <input class="form-control" id="telp" v-model="profil.telp" required />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="email" class="form-label">Email:</label>
                        <input class="form-control" type="email" id="email" v-model="profil.email" required />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="kepemilikan" class="form-label">Kepemilikan:</label>
                        <input class="form-control" type="text" id="kepemilikan" v-model="profil.kepemilikan" required />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="direktur" class="form-label">Direktur:</label>
                        <input class="form-control" type="text" id="direktur" v-model="profil.direktur" required />
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-2 mt-5">
                    <router-link to="/profil">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left-long"></i>
                            Kembali</button>
                    </router-link>
                    <button type="submit" v-if="isNewProfil" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                        Tambah Profil</button>
                    <button type="submit" v-else class="btn btn-warning btn-sm"><i class="fas fa-sd-card"></i> Update
                        Profil</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            profil: {
                alamat: '',
                telp: '',
                email: '',
                kepemilikan: '',
                direktur: ''
            }
        }
    },
    computed: {
        isNewProfil() {
            return !this.$route.path.includes('edit');
        }
    },
    async created() {
        if (!this.isNewProfil) {
            const response = await axios.get(`/api/profils/${this.$route.params.id}`);
            this.profil = response.data;
        }
    },
    methods: {
        async submitForm() {
            try {
                if (this.isNewProfil) {
                    await axios.post('/api/profils', this.profil);
                } else {
                    await axios.put(`/api/profils/${this.$route.params.id}`, this.profil);
                }
                this.$router.push('/profil');
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>
