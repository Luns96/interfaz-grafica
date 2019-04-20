new Vue({
    el: '#service-utensils',
    data: {
      show_utensils: false
      },

      methods: {
        utensils: function(){
            this.show_utensils = !this.show_utensils;
        }
    }
  });

  new Vue({
    el: '#service-shopping',
    data: {
      show_shopping: false
      },

      methods: {
        shopping: function(){
            this.show_shopping = !this.show_shopping;
        }
    }
  });

  new Vue({
    el: '#service-gifts',
    data: {
      show_gifts: false
      },

      methods: {
        gifts: function(){
            this.show_gifts = !this.show_gifts;
        }
    }
  });

  new Vue({
    el: '#service-truck',
    data: {
      show_truck: false
      },

      methods: {
        truck: function(){
            this.show_truck = !this.show_truck;
        }
    }
  });


  new Vue({
    el: '#request',
    data: {
      name: '',
      surname: '',
      nemail: '',
      email: '',
      cp: '',
      },
      
      
      
      methods: {
        
        request: function(){
          
          toastr.success('Se ah enviado con exito');
          this.name = "";
          this.surname= '';
          this.nemail= '';
          this.email= '';
          this.cp= '';
        }
    }
  });


  new Vue({
    el: '#register',
    data: {
      ci: '',
      nickname: '',
      name: '',
      surname: '',
      age: '',
      number: '',
      address: '',
      email: '',
      password: '',
      },
      
      
      
      methods: {
        
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
          return ;
        }
    }
  });

  new Vue({
    el: '#login',
    data: {
      email: '',
      password: '',
      },
      
      
      
      methods: {
        
        login: function(){
          
          toastr.info('Welcome ' + this.email);
          this.email= '';
          this.password= '';
        }
    }
  });

  new Vue({
    el: '#nav',
    data: {
      color: 'bg-dark navbar-dark',
      color1: 'bg-dark text-white',
      number: '1',
      },

    methods: {
      change: function(){
        if (this.number == 1) {
          this.color = 'bg-light navbar-light';
          this.color1 = 'bg-light text-black';
          this.number = 2;
          toastr.success('Se ah actualizado su color');
        }else{
          this.color = 'bg-dark navbar-dark';
          this.color1 = 'bg-dark text-white';
          this.number = 1;
          toastr.success('Se ah actualizado su color');
        }
      }
    }
      
  });

// new Vue({
//     el: '#crud',
//     created: function(){
//         this.getKeeps();
//     },

//     data: {
//         keeps: [],
//         newKeep: '',
//         fillKeep: {'id': '', 'keep': ''},
//         errors: [],
//     },

//     methods: {
//         getKeeps: function() {
//             var urlKeeps  = 'tasks';
//             axios.get(urlKeeps).then(response => {
//                 this.keeps = response.data
//             });
//         },

//         editKeep: function(keep) {
//             this.fillKeep.id = keep.id;
//             this.fillKeep.keep = keep.keep;
//             $('#edit').modal('show');
//         },

//         updateKeep: function(id) {
//             var url = 'tasks/' + id;
//             axios.put(url, this.fillKeep).then(response => {
//                 this.getKeeps();
//                 this.fillKeep = {'id': '', 'keep': ''};
//                 this.errors = [];
//                 $('#edit').modal('hide');
//                 toastr.success('Tarea actualizada con exito');
//             }).catch(error => {
//                 this.errors = error.response.data
//             });
//         },


//         deleteKeep: function(keep) {
//             var url = 'tasks/' + keep.id;
//             axios.delete(url).then(response => {
//                 this.getKeeps();
//                 toastr.success('Eleminado correctamente');
//             });
//         },
//         createKeep: function() {
//             var url = "tasks";
//             axios.post(url, {
//                 keep: this.newKeep
//             }).then(response => {
//                 this.getKeeps();
//                 this.newKeep = '';
//                 this.errors = [];
//                 $('#create').modal('hide');
//                 toastr.success('Nueva tarea creada con exito');
//             }).catch(error => {
//                 this.errors = error.response.data
//             });
//         }
//     }
// });