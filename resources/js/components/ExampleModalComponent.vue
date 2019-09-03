<template>
  <div class="text-xs-center">
    <v-dialog v-model="localShow" width="700">
      <v-card>
        <v-card-title class="headline grey lighten-2" primary-title>
          Titulo del modal
        </v-card-title>

        <v-container fluid grid-list-sm>
          <div class="layout wrap">
            <v-flex xs12 sm6 md3>
              <v-text-field
                v-model="text"
                label="Nombre*"
              ></v-text-field>
              <v-text-field
                v-model="nombre"
                label="Nombre 2*"
              ></v-text-field>
            </v-flex>
          </div>
        </v-container>

        <v-card-actions>
          <v-switch 
          v-model="keepAdding" 
          class="mt-0" 
          color="purple lighten-1" 
          hide-details label="Agregar más">
          </v-switch>
          <v-spacer></v-spacer>
          <v-btn flat v-on:click="localShow = false">
            Cancelar
          </v-btn>
          <v-btn color="primary" flat 
          v-on:click="returnData">
            Agregar
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<style>
</style>

<script>
  export default {
    mounted() {
    },
    data() {
      return {
        text: '',
        nombre: '',
        localShow: undefined,
        keepAdding: false,
      }
    },
    props: {
      show : Boolean 
    },
    watch: {
      show: function (value) {
        this.localShow = value;
      },
      localShow: function (value) {
        this.$emit('update:show', value)
      },
    },
    methods: {
      returnData: function(){
        this.$emit('dataSended', this.text);
        if(!this.keepAdding) this.localShow = false;
        this.finallyCleanAll();
      },
      finallyCleanAll: function (){
        this.text = '';
        this.nombre = '';
      },
    },
    computed: {

    },
    created(){
      this.localShow = this.show;
    }
  }
</script>
