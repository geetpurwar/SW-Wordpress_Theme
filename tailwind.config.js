module.exports = {
    purge: ["./**/*.php"],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            textShadow: {
                'default': '0 2px 8px #000',
                'sm': '0px 2px 4px rgba(0, 0, 0, 0.24)',
                'md': '0px 4px 4px rgba(0, 0, 0, 0.25)',
                'lg': '0px 2px 8px rgba(0, 0, 0, 0.32)',
                'xl': '0px 4px 20px rgba(62, 68, 128, 0.08)',
            },
            borderWidth: {
                '10': '10px',
            },
            minWidth:{
                '115' : '7.1875rem',
            },
            maxWidth: {
                '1120': '70rem', // 1120
                'lg-xl': '71.5rem', // 928
                'lg-c': '58.5rem', // 936
                '960': '60rem', // 960
                '928': '58rem', // 928
                '864': '54rem', // 864
                '736': '46rem', // 736
                '608': '38rem', // 608
                'md-c': '37rem', // 580
                'xs-c': '34rem', // 543
                '480': '30rem', // 580
                '464': '29rem', // 464
                '438': '27.375rem', // 416
                '416': '26rem', // 416
                '352': '22rem', // 352
                '72': '18rem', // 288
                '64': '16rem', // 256
                '192': '12rem', // 192
                '224': '14rem', // 224
                '228': '14.25rem', // 228
                '210': '13.125rem', // 210
                '208': '13rem', // 208
                '186': '11.626rem', // 186
                '11': '11rem', // 176
                '324': '20.25rem', // 176
                '1/2': '50%',
                '70p': '70%',
            },
            maxHeight: {
                '464': '29rem',
            },
            width: {
                '167': '167px',
                '186': '186px',
                '30': '7.5rem',
                // '52': '13rem',
                '288': '18rem',
            },
            minHeight: {
                '8': '2rem',
                '68': '4.25rem',
                '96': '6rem',
                '180': '11.25rem',
                '352': '22rem',
                '464': '29rem',
            },
            height: {
                '4.5': '1.125rem',
                '27': '6.75rem', 
                '68': '4.25rem',
                '6.75': '6.75rem',
                '50': '13.5rem',
                '200': '200px',
            },
            margin: {
                '6px': '6px',
                '7': '1.75rem',
                '18': '4.5rem',
                '22': '5.5rem',
                '100': '100px',
            },
            padding: {
                '15': '3.75rem',
                '17': '4.25rem',
                '18': '4.5rem',
                '25': '6.25rem',
                '72': '18rem',
                '112': '112px',
                '156': '156px',
            },
            spacing: {
                '10px': '10px',
                // '10': '3.25rem',
                '18': '4.5rem',
                '56': '3.25rem',
                '72': '4.5rem',
                '96': '6rem',
                '100': '6.25rem',
                '106': '6.625rem',
                '112': '7rem',
                '116': '7rem',
                '124': '7.75rem',
            },
            fontSize: {
                '28xl': '1.75rem',
                '32xl': '2rem',
                '38xl': '2.375rem',
                '44xl': '2.75rem'
            },
            colors: {
                stars: {
                    DEFAULT: "#FFC100",
                    'gray': "#DFDFE0",
                },
                gray2: {
                    DEFAULT: "#4F4F4F",
                },
                gray: {
                    800: '#3B414B',
                    700: '#797D82',
                    // 600: '#c0ccda',
                    600: '#A6AAB4',
                    400: '#DFDFE0',
                    200: '#F3F4F5',
                    100: '#FAFBFC',
                },
                primary: {
                    light: "#DDF9C1",
                    DEFAULT: "#7AB800",
                    dark: "#6CA300",
                },
                brand: {
                    light: "#FAE7E6",
                    DEFAULT: "#EB3F33",
                    dark: "#D6392E",
                },
                info: {
                    light: "#eff9ff",
                    DEFAULT: "#49A9FF",
                    dark: "#439BEB",
                },
                warning: {
                    light: "#FFF5EB",
                    DEFAULT: "#EE9036",
                    dark: "#DE8632",
                },
                secondary: {
                    light: "#F1F9FF",
                    DEFAULT: "#49A9FF",
                },
            },
            fontFamily: {
                proxima: "Proxima Nova, san-serif",
                roboto: "Roboto, sans-serif",
                opensans: "Open Sans, sans-serif",
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['odd', 'even', 'checked', 'first'],
            borderColor: ['checked'],
        },
    },
    plugins: [
    require('tailwindcss-textshadow'),
        // require('postcss-nested'),
        ],
    }