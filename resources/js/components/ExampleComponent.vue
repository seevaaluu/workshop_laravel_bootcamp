<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.

                    </div>


                    <v-btn 
                    outline 
                    small 
                    color="green darken-2" 
                    slot="activator" 
                    v-on:click="exampleOk">
                        ejemplo alertify 
                    </v-btn>


                    <v-btn outline small color="green darken-2" slot="activator" v-on:click="showExampleModal = true">
                        Ejemplo modal 
                    </v-btn>

                    <v-flex xs12 sm12 md12>
                        <v-text-field label="Nombre del libro" v-model="nombreLibro"></v-text-field>
                    </v-flex>
                    <v-flex xs12 sm12 md12>
                        <v-text-field label="Nombre del autor" v-model="nombreAutor"></v-text-field>
                    </v-flex>

                     <v-btn outline small color="green darken-2" slot="activator" v-on:click="storeBook">
                        Registrar libro 
                    </v-btn>
                    

                    <example-modal-component 
                    v-bind:show.sync="showExampleModal" 
                    v-on:dataSended="showText" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import alertify from 'alertifyjs';
    alertify.success('kjashjahs');
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        methods: {

        },
        data() {
            return {
                showExampleModal: false,
                nombreLibro: null,
                nombreAutor: null,
            }
        },
        props: [
    
        ],
        watch: {

        },
        methods: {
            exampleOk: function(){
                alertify.success('mounted');
            },
            showText: function (textValue){
                alertify.success(textValue);
            },
            storeBook: function () {
                return axios.post('http://127.0.0.1:8001/api/books',{
                    nombre: this.newRoleName,
                    descripcion: this.selected
                })
                .then(response => { 
                    alertify.success(response.data);
                })
            },
        },
        computed: {

        },
    }
</script>
