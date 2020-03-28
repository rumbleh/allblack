<template>
    <div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a id="ddCadastros" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Cadastros</a>
                <ul aria-labelledby="ddCadastros" class="dropdown-menu border-0 shadow">
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="ddProdutos" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Produtos</a>
                        <ul aria-labelledby="ddProdutos" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="BASE/produto/incluir" class="dropdown-item">Incluir novo produto</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="BASE/produto/listagem" class="dropdown-item">Listagem todos os produtos</a>
                            </li>
                        </ul>
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="ddClientes" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Clientes</a>
                        <ul aria-labelledby="ddClientes" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="BASE/dashboard/clientes" class="dropdown-item">Listar todos os clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="ddRepresentantes" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Representantes</a>
                        <ul aria-labelledby="ddRepresentantes" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="BASE/representante/incluir" class="dropdown-item">Incluir novo representante</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="BASE/representante/listagem" class="dropdown-item">Listar todos os representantes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="ddComunidade" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Comunidades</a>
                        <ul aria-labelledby="ddComunidade" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="BASE/comunidade/incluir" class="dropdown-item">Incluir uma comunidade</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="BASE/dashboard/comunidades" class="dropdown-item">Listar todas as comunidades</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="BASE/catalogo/incluir" class="dropdown-item">Produtos por comunidade</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="BASE/dashboard/precos" class="dropdown-item">Preços por comunidade</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="ddSegmento" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Segmentos</a>
                        <ul aria-labelledby="ddSegmento" class="dropdown-menu border-0 shadow">
                            <li>
                                <a tabindex="-1" href="BASE/segmento/incluir" class="dropdown-item">Incluir novo segmento</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#" class="dropdown-item">Listar todos os segmentos</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<style scoped>

</style>
