<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <script src="{{ asset('javascript/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/7bd77678ec.js" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>

<body>
    <!--BOTÃO UP-->
    <div class="scroll-up-btn">
        <i class="fas fa-arrow-circle-up"></i>
    </div>

    <!--CABEÇALHO-->
    <nav class="d-flex navbar navbar-expand-lg navbar-dark justify-content-center">
        <a class="navbar-brand d-inline" href="/">
            <img src="imagens/logotipo.png" alt="">
            <!--NAVBAR LOGOTIPO-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
            <!--BOTÃO DROPDOWN-->
            <div class="d-inline dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mr-2"
                        src="imagens/Perfil/profile-icon.png" /><span
                        class="backluser">Olá,</span> <span class="bacluser">Nome de Usuario</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa-solid fa-user-pen pr-2"></i>Editar Perfil</a>
                    <a class="dropdown-item" href="#"><i class="fa-solid fa-user pr-2"></i>Meus Dados</a>
                    <a class="dropdown-item" href="#"><i class="fa-solid fa-bag-shopping pr-2"></i>Serviços</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/"><i
                            class="fa-solid fa-arrow-up-right-from-square pr-2"></i>Sair</a>
                </div>
            </div>
        </div>
    </nav>

    <!--INFORMAÇÕES DO CLIENTE-->
    <div class="informacoes">
        <div class="container">
            <h1 class="titulo">Minha Conta</h1>
            <hr>
            <!--CARD DE INFORMAÇÕES (HEADER)-->
            <div class="card dadclient">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs text-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="backend-tab" data-toggle="tab" href="#Dados" role="tab"
                                aria-controls="Dados" aria-selected="true"><i class="fa-solid fa-user pr-1"></i>
                                <p>Meus Dados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Servicos" role="tab"
                                aria-controls="Servicos" aria-selected="false"><i
                                    class="fa-solid fa-bag-shopping pr-1"></i>
                                <p>Serviços Contratados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Produtos" role="tab"
                                aria-controls="Produtos" aria-selected="false"><i class="fa-solid fa-box-open pr-1"></i>
                                <p>Produtos Contratados</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--CARD DE INFORMAÇÕES (CONTEUDO MEUS DADOS)-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Dados" role="tabpanel" aria-labelledby="Dados-tab">
                        <form>
                            <div class="container">
                                <div class="profilediv">
                                    <img src="imagens/Perfil/UserProfile.png" alt="..."
                                        class="img-thumbnail img-fluid profile1">
                                </div>

                                <div class="form-group pt-3">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Seu email">
                                    <small id="emailHelp" class="form-text text-muted mb-4">Não é você? <a
                                            href="#">Clique aqui</a> para sair!</small>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="password" class="form-control mr-3" id="exampleInputPassword1"
                                                placeholder="Senha">
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputPassword1">Confirme Senha</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="hrdados">
                            <div class="container">
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <img src="imagens/Perfil/UserProfile.png" alt="..."
                                            class="img-thumbnail img-fluid profile">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" id="exampleInputNome">
                                        </div>
                                        <div class="col">
                                            <label class="ml-3" for="exampleInputEmail1">Sobrenome</label>
                                            <input type="text" class="form-control" id="exampleInputSNome">
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="salvarinf d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-lg salvbtn"><i
                                class="fa-solid fa-floppy-disk"></i> SALVAR</button>
                    </div>
                </div>
                <!--CARD DE INFORMAÇÕES (CONTEUDO SERVIÇOS CONTRATADOS)-->
                <div class="tab-pane fade" id="Servicos" role="tabpanel" aria-labelledby="Servicos-tab">
                    <div class="container">
                        <h2 class="titulo2">Serviços</h2>
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CARD DE INFORMAÇÕES (CONTEUDO PRODUTOS CONTRATADOS)-->
                <div class="tab-pane fade" id="Produtos" role="tabpanel" aria-labelledby="Produtos-tab">
                    <div class="container">
                        <h2 class="titulo2">Produtos</h2>
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Cabeçalho</div>
                                <div class="card-body">
                                    <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que
                                        funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco
                                        maior.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="button" class="d-inline btn btn-primary btn-sm suport mr-3"><i
                                            class="fa-solid fa-headset"></i> Suporte</button>
                                    <button type="button" class="d-inline btn btn-primary btn-sm cancel"><i
                                            class="fa-solid fa-ban"></i> Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CARD DE SUGESTÕES-->
    <div class="sugestoes">
        <div class="container">
            <div class="card-deck">
                <a href="/" target="_blank" class="point">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fa-solid fa-circle-info"></i></h2>
                            <p class="card-text">Sobre a UniSoft</p>
                        </div>
                    </div>
                </a>
                <a href="https://wa.me/+5511974551685" target="_blank" class="point">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fa-solid fa-headphones-simple"></i></h2>
                            <p class="card-text">Central do Cliente</p>
                        </div>
                    </div>
                </a>
                <a href="#" target="_blank" class="point">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"><i class="fa-solid fa-cart-shopping"></i></h2>
                            <p class="card-text">Contrate um Serviço</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>