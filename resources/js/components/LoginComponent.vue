<template>
    <div class="container">
        <div class="mx-auto mt-5 text-center">
            <h5>ALL<strong>BLACK</strong></h5>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-5 mx-auto">
                <div class="form-group has-feedback">
                    <label class="label">Informe o seu login</label>
                    <input type="text" class="form-control" autocomplete="off"
                           name="login" placeholder="Ex: vitinho" v-model="input.login"/>
                </div>

                <div class="form-group has-feedback">
                    <label class="label">Informe sua senha</label>
                    <input type="password" class="form-control" autocomplete="off" name="senha"
                           placeholder="Informe sua senha" v-model="input.senha"/>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4 col-lg-5 col-xs-12 mx-auto ">
                <button type="submit" class="btn btn-success btn-block" v-on:click="login">Entrar</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                input: {
                    usuario: "",
                    senha: ""
                }
            }
        },
        methods: {
            login(){
                axios.post("/auth", {usuario: this.usuario, senha: this.senha})
                .then(res => {
                    console.log(res)
                })
            }
        }
    }
</script>
