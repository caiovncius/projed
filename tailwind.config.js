module.exports = {
    purge: [],
    theme: {
        container: {
            center: true,
        },
        fontFamily: {
            'sans': ['Montserrat']
        },
        extend: {},
    },
    variants: {},
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
    ]
}
