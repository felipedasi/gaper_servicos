new Vue({
  el: "#app",
  data: {
    todos: [],
    salao1: "Clube de Caça e Pesca",
    //  salao2: "G2",
    //salao
    salao4: "El Maestro",
    salao5: "Bia Buffet",
    salao6: "Gabriels",
    //fotografo
    salao7: "Foto Eventos",
    salao8: "Fog Filmes",
    salao9: "Bitencourt",
    //som e luz
    salao10: "Delta Eventos",
    //  salao11: "Fog Filmes",
    // salao12: "Bitencourt",
    salao13: "Bia Buffet",
    salao14: "Rosane Machado",
    salao15: "Raquel Almeida",

    //  salao15: "Raquel Almeida",
    //  salao16: "Raquel Almeida",

    salao17: "Secret Segurança",
    //cerimonialista
    salao18: "Difere Eventos"
    //salao19: "Secret Segurança",
    //  salao20: "Secret Segurança",
  },
  methods: {
    servico1: function() {
      this.todos.push(this.salao1);
    },
    servico2: function() {
      this.todos.push(this.salao2);
    },
    servico4: function() {
      this.todos.push(this.salao4);
    },
    servico5: function() {
      this.todos.push(this.salao5);
    },
    servico6: function() {
      this.todos.push(this.salao6);
    },
    servico7: function() {
      this.todos.push(this.salao7);
    },
    servico8: function() {
      this.todos.push(this.salao8);
    },
    servico9: function() {
      this.todos.push(this.salao9);
    },
    servico10: function() {
      this.todos.push(this.salao10);
    },
    servico11: function() {
      this.todos.push(this.salao11);
    },
    servico12: function() {
      this.todos.push(this.salao12);
    },
    servico13: function() {
      this.todos.push(this.salao13);
    },
    servico14: function() {
      this.todos.push(this.salao14);
    },
    servico15: function() {
      this.todos.push(this.salao15);
    },
    servico16: function() {
      this.todos.push(this.salao16);
    },
    servico17: function() {
      this.todos.push(this.salao17);
    },
    /*   servico14: function () {
              this.todos.push(this.salao14);
            },
            servico15: function () {
              this.todos.push(this.salao15);
            },
              servico15: function () {
              this.todos.push(this.salao16);
            }
            */
    servico18: function() {
      this.todos.push(this.salao18);
    },
    deleteItem: function(index) {
      this.todos.splice(index, 1);
    }
  }
});
