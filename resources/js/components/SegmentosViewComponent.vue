<template>
    <div>
        <div class="content">
            <div class="container">
                <h2 class="mb-2">Segmentos</h2>

                <div class="alert alert-info" v-if="this.mensagem != ''">
                    {{ mensagem }}
                </div>

                <button class="btn btn-success mb-3"><span class="fa fa-plus"> </span> Incluir</button>

                <table class="table table-striped table-bordered">

                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Descrição</td>
                        <td>Ações</td>
                    </tr>
                    </thead>

                    <tbody v-for="segmento in segmentos" :key="segmento.id">
                    <tr>
                        <td>{{ segmento.id }}</td>
                        <td>{{ segmento.descricao }}</td>
                        <td>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" :href="segmento.id">Exibir</a>
                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" :href="segmento.id + '/editar'">Alterar</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <transition name="fade" appear>
                    <div v-if="isLoading" class="d-flex justify-content-center">
                        <span class="fa fa-spin fa-cog fa-3x text-center"></span>
                    </div>
                </transition>
            </div>
        </div>
    </div>
</template>

<style>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.2s;
    }

    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }

    .list-enter, .list-leave-to /* .list-leave-active below version 2.1.8 */
    {
        opacity: 0;
        transform: translateY(30px);
    }

</style>
<script>
    import ModalComponent from './ModalComponent.vue' ;

    export default {
        props: {
            mensagem: "",
            token: "",
        },
        components: {
            ModalComponent,
        },
        mounted() {
            axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`;
            this.getSegmentos()
        },
        data() {
            return {
                segmentos: [],
                isLoading: true,
                isModalVisible: false,
                titulo: "",
            }
        },
        methods: {
            getSegmentos() {
                axios.get("api/v1/segmentos").then(res => {
                    this.segmentos = res.data;
                    this.isLoading = false;
                }).catch(error => {
                    this.erro = error.response.data.errors.username[0]
                })
            },
            showModal(segmento) {
                this.titulo = segmento.titulo;
                this.isModalVisible = true;
            },
            closeModal() {
                this.isModalVisible = false;
            }
        }
    }
</script>
