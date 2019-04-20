new Vue({
    el: '#app',
    data: {
      show_utensils: false,
      show_shopping: false,
      show_gifts: false,
      show_truck: false,
      name: '',
      surname: '',
      nemail: '',
      email: '',
      cp: '',
      ci: '',
      nickname: '',
      age: '',
      number: '',
      address: '',
      password: '',
      search: '',
      color: 'bg-dark navbar-dark',
      color1: 'bg-dark text-white',
      navcolor: 'Color 1',
      },

    methods: {
        utensils: function(){
            this.show_utensils = !this.show_utensils;
        },

        shopping: function(){
            this.show_shopping = !this.show_shopping;
        },

        gifts: function(){
            this.show_gifts = !this.show_gifts;
        },

        truck: function(){
            this.show_truck = !this.show_truck;
        },

        request: function(){
            toastr.success('Se ah enviado con exito');
            this.name = "";
            this.surname= '';
            this.nemail= '';
            this.email= '';
            this.cp= '';
        },

        register: function(){
          
            toastr.success('Se ah creado con exito');
            this.ci = "";
            this.nickname= '';
            this.name= '';
            this.surname= '';
            this.age= '';
            this.number = "";
            this.address= '';
            this.email= '';
            this.password= '';
        },

        login: function(){
          
            toastr.info('Welcome ' + this.email);
            this.email= '';
            this.password= '';
        },

        searchs: function(){
            toastr.error('Su busqueda de ' + this.search + ' no existe');
            this.search= '';
        },

        change: function(){
            if (this.number == 'Color 1') {
              this.color = 'bg-light navbar-light';
              this.color1 = 'bg-light text-black';
              this.navcolor = 'Color 2';
              toastr.success('Se ah actualizado su color');
            }else{
              this.color = 'bg-dark navbar-dark';
              this.color1 = 'bg-dark text-white';
              this.navcolor = 'Color 1';
              toastr.success('Se ah actualizado su color');
            }
        },

    }

  });
