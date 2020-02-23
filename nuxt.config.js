const laravelNuxt = require("laravel-nuxt");

module.exports = laravelNuxt({
    // Options such as mode, srcDir and generate.dir are already handled for you.
    modules: [
        '@nuxtjs/axios',
    ],

    axios: {
        baseURL: "http://127.0.0.1:8001/api"
    },
    plugins: [],
});
