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
                           name="login" placeholder="Ex: vitinho" v-model="username"/>
                </div>

                <div class="form-group has-feedback">
                    <label class="label">Informe sua senha</label>
                    <input type="password" class="form-control" autocomplete="off" name="password"
                           placeholder="Informe sua password" v-model="password"/>
                </div>
            </div>
        </div>

        <div class="row" v-if="this.erro != ''">
            <div class="col-md-6 col-lg-5 mx-auto">
                <span class="text-danger">{{ erro }}</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4 col-lg-5 col-xs-12 mx-auto ">
                <button type="submit" class="btn btn-success btn-block" v-on:click="login"><span class="fa fa-save"></span> Entrar</button>
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
