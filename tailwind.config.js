module.exports = {
    theme: {
        colors: {
            success: '#00D67D',
            negative: '#CC2E2E',
            pending: '#FFC82C',
            black: '#000000',
            white: '#FFFFFF',
            transparent: 'transparent',
            warning: '#FF7310',
            sky:{
                blue: '#49CBFB',
            },
            blue: {
                default: '#2F4FA7',
                base: '#F6FEFF',
                dark: '#1956b4',
                deep: '#4166B2',
                deeper: '#03045E',
                pale: '#E8F7FF',
                light: '#479BFF',
                bright:'#004DFD',
            },
            yellow: {
                default: '#FFC82C',
                dark: '#F8B700',
                light: '#FFD55F',
                pale: '#FFFADE',
                deep: '#D4CB2C',
            },

            orange: {
                default: '#FF7310',
                light: '#ffd6a5',
            },

            green: {
                default: '#5FCAAF',
                dark: '#188F32',
                deep: '#3D8962',
                light: '#29EB7F',
                pale: '#DEFFE5',
                100: '#C2EBD4',
                500: '#3EA76A'
            },

            red: {
                default: '#EC5757',
                dark: '#A10000',
                light: '#D75C5C',
                pale: '#FFFADE',
            },

            gray: {
                100: '#7a7a7a',
                200: '#f9f9f9',
                300: '#828282',
                400: '#F9F9F9',
                500: '#EEEEEE',
                dark: '#4D575E',
                light: '#A6AAB4;',
                grayer: '#899296',
                default:'#f9f9f9'
            },
            purple:{
                default: '#E964BE',
                dark: '#8765DF'
            },
            pt:'#70CF98',
            fs:'#EB5758',
            sm:'#57CCF629',

            smoke: {
                dark: '#9DA8B6',
                100: '#C0CCDA',
                200: '#D3DCE6',
                300: '#E0E6ED',
            },
            dark: '#7a7a7a',
            snow: {
                100: '#E5E9F2',
                200: '#EEF1F5',
                300: '#FAFAFA',
            },
        },
        letterSpacing: {
            tightest: '-.075em',
            tighter: '-.05em',
            wide: '.025em',
            wider: '.05em',
            widest: '.25em',
        },

        opacity: {
            0: '0',
            10: '0.1',
            20: '0.2',
            30: '0.3',
            40: '0.4',
            50: '0.5',
            60: '0.6',
            70: '0.7',
            80: '0.8',
            90: '0.9',
            100: '1',
        },

        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            '2xl': '1440px',
        },
        backgroundImage: theme => ({
            'hero-pattern': "url('/img/hero-pattern.svg')",
            'footer-texture': "url('/img/footer-texture.png')",
        }),

        fontSize: {
            subtext: '7px',
            default: '16px',
            large: '17px',
            medium: '.85rem',
            small:'.65rem',
            'body-2': '15px',
            h1: '48px',
            h2: '40px',
            h3: '32px',
            h4: '20px',
        },

        lineHeight: {
            22: '22px',
            26: '26px',
            28: '28px',
            33: '33px',
            42: '42px',
            52: '52px',
            62: '62px',
        },

        borderColor: (theme) => ({
            default: theme('color.gray', 'currentColor'),
            gray: {
                default: '#F1F1F1',
                100: '#f9f9f9',
                dark: '#00000',
            },
            blue: {
                default: '#49CBFB',
            },
            lightGrey: '#A6AAB4',
            orange: '#FF7310',
            green: '#5FCAAF',
            yellow: '#FFC82C',
        }),
        borderWidth: {
            default: '1px',
            '0': '0',
            '2': '2px',
            '4': '4px',
        },
        extend: {
            colors: {
                cyan: '#9cdbff',
            },
            spacing: {
                '96': '24rem',
                '128': '32rem',
            }
        },
        linearGradientColors: theme => theme('colors'),
    },
    variants: {
        appearance: ['responsive'],
        backgroundColor: ['responsive', 'hover', 'focus'],
        tableLayout: ['responsive', 'hover', 'focus'],
        fill: [],
    },
    plugins: [
        require('tailwindcss-gradients'),
    ],
}
