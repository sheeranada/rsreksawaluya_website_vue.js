<template>
    <div class="pagetitle">
        <h1>{{ pageTitle }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                <li class="breadcrumb-item active">{{ route }}</li>
            </ol>
        </nav>
    </div>
</template>

<script>
export default {
    props: {
        pageTitle: {
            type: String,
            required: true
        },
        route: {
            type: String,
            required: true
        }
    }
}
</script>
