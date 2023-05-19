import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";

// Import components
import App from "./components/App.vue";
import Index from "./components/Dashboard/Index.vue";
import ProfilList from "./components/profils/ProfilList.vue";
import ProfilForm from "./components/profils/ProfilForm.vue";
import Profil from "./components/profils/Profil.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: "/", component: Index },
        { path: "/profil", component: ProfilList },
        { path: "/profils/create", component: ProfilForm },
        { path: "/profils/:id", component: Profil },
        { path: "/profils/:id/edit", component: ProfilForm },
    ],
});

const app = createApp(App);
app.use(router);
app.mount("#app");
