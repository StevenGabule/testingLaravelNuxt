<template>
    <div>
        <div v-for="user in data">
            <h3>Hello {{ user.name }}!</h3>
            <p>Email: {{ user.email}}</p>
            <p>Email: {{ user.created_at}}</p>
        </div>
    </div>
</template>

<script>

    export default {
        async asyncData({app}) {
            return await app.$axios.$get("api/user");
        },
    }
</script>
