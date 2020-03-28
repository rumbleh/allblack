<template>
        <div class="content">
            <div class="container">
                <h5 class="mb-2"></h5>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-md-6 col-sm-6 col-12">
                        <a href=" BASE /comunidade/incluir">
                            <div class="info-box">
                                <span class="info-box-icon bg-gradient-warning"><i class="fa fa-map-signs"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Nova comunidade</span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <a href="  @BASE /representante/incluir">
                            <div class="info-box">
                                <span class="info-box-icon bg-gradient-danger"><i class="fa fa-user-plus"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Novo representante</span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12">
                        <a href="@BASE/dashboard/pedidos/pendentes">
                            <div class="info-box">
                                <span class="info-box-icon bg-gradient-info"><i class="fa fa-clock"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Pedidos pendentes</span>
                                    <span class="info-box-number">@pendentes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-success"><i class="fa fa-boxes"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Estoque mínimo</span>
                                <span class="info-box-number">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props : [
            'action'
        ],
        mounted() {
        },
        data(){
            return {
                username: "",
                password: "",
                erro: ""
            }
        },
        methods: {
            login(){
                axios.post(this.action, {username: this.username, password: this.password})
                .then(res => {
                    location.href = '/public/home'
                })
                .catch(error => {
                    this.erro = error.response.data.errors.username[0]
                })
            }
        }
    }
</script>
