module.exports = {
  prefix: '',
  important: true,
  content: ['*.php'],
  theme: {
    container:{
      screens:{
         sm: "100%",
         md: "100%",
         lg: "1280px",
         xl: "1280px"
      }
    },
    colors:{
      white:'#fff',
      black:'#333',
      blue:{
        DEFAULT:'#00a7df',
        dark:'#005098',
      },
      gray:{
        DEFAULT:'#40555c',
        light:'#eaeaea',
      },
    },
    fontFamily:{
      'sans':['Lato', 'sans-serif'],
    },
  },
  variants: {},
  plugins: []
}
