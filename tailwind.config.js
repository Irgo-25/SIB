module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"  ,
    ],
    theme: {
        extend: {
            backgroundImage: {
                "bg-ncf": "url('/public/assets/bg-ncf.jpg')",
            },
            fontFamily: {
                Sen: ["Sen"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
