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
      black:{
        DEFAULT:'#333',
        alternative:'#666',
      },
      blue:{
        DEFAULT:'#00a7df',
        dark:'#005098',
        light:'#c2ebed',
      },
      green:{
        DEFAULT:'#30b829',
      },
      red:{
        DEFAULT:'#CC4230',
      },
      gray:{
        DEFAULT:'#40555c',
        light:'#eaeaea',
        medium:'#333',
      },
      whatsapp : '#25d366',
    },
    fontFamily:{
      'sans':['Lato', 'sans-serif'],
    },
  },
  variants: {},
  plugins: []
}
