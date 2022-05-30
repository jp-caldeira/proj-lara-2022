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
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
    <title>UniSoft | Segurança Cibernética</title>
</head>

<body>

    <!--BOTÃO UP-->

    <div class="scroll-up-btn">
        <i class="fas fa-arrow-circle-up"></i>
    </div>

    <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="imagens/logotipo.png" alt="">
            <!--NAVBAR LOGOTIPO-->
        </a>


        <!--NAVBAR BOTÃO-->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!--NAVEGAÇÃO-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#empresa">QUEM SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#produtos1">PRODUTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">SERVIÇOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ciberseguranca">CIBERSEGURANÇA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">CONTATO</a>
                </li>
            </ul>
        </div>

        <!--BOTÃO LOGIN / CADASTRO-->

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                    data-target="#ExemploModalCentralizado">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="25" viewBox="0 0 172 172"
                        style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M86,17.2c-19.00027,0 -34.4,15.39973 -34.4,34.4v5.73333c0,19.00027 15.39973,34.4 34.4,34.4c19.00027,0 34.4,-15.39973 34.4,-34.4v-5.73333c0,-19.00027 -15.39973,-34.4 -34.4,-34.4zM85.9888,108.93333c-22.96773,0 -52.43707,12.42324 -60.91667,23.44844c-5.24027,6.81693 -0.25182,16.68489 8.34245,16.68489h105.15964c8.59427,0 13.58271,-9.86796 8.34245,-16.68489c-8.4796,-11.01947 -37.96013,-23.44844 -60.92786,-23.44844z">
                                </path>
                            </g>
                        </g>
                    </svg> Login / Cadastro
                </button>
            </li>
        </ul>
    </nav>

    <!--MODAL LOGIN-->

    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action={{ route('login')}}>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu
                                email.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="font-weight-bold">Senha</label>
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group form-check">
                            <a href="#contato"><small id="emailHelp" class="form-text text-right">Esqueceu sua
                                    senha?</small></a>
                        </div>
                        <div class="btnsub">
                                <button type="submit" class="btn btn-primary">ENTRAR</button></div>
                        </div>
                    </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastromodal"
                        class="close" data-dismiss="modal" aria-label="Fechar">
                        CADASTRA-SE
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL CADASTRO-->

    <div class="modal fade" id="cadastromodal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu
                                email.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="font-weight-bold">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="font-weight-bold">Nome completo</label>
                            <input type="text" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="font-weight-bold">Empresa</label>
                            <input type="text" class="form-control" placeholder="Sua empresa">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="font-weight-bold">Telefone</label>
                            <input type="number" class="form-control" placeholder="Telefone">
                        </div>
                    </form>
                    <div class="btnsub">
                        <button type="submit" class="btn btn-primary" class="close" data-dismiss="modal"
                            aria-label="Fechar" onclick="funcao1()" value="Exibir Alert">
                            CADASTRA-SE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--CAROUSEL BANNER-->

    <div id="carouselExampleSlidesOnly" class="carousel slide banner1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="imagens/Banner/BannerInicial.png" alt="Primeiro Slide">
                <div class="carousel-caption d-block h-50 align-items-center justify-content-center">
                    <h1 class="titi">ALWAYS SAFE ALWAYS SOFT</h1>
                    <p class="pipi">A maior empresa especializada em cibersegurança do Brasil</p>
                    <a href="#empresa"><button type="button" class="btn btn-primary btn-lg">SAIBA MAIS</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--QUEM SOMOS-->

    <div id="empresa">
        <div class="container">
            <div class="row">
                <div class="col-7 mb-5 qms">
                    <h1 class="titulo">QUEM SOMOS</h1>
                    <div class="scrollcard">
                        <p>A Unisoft é uma agência de desenvolvimento de software crescente no Brasil fundada em janeiro
                            de 2016 atuando em todo o território nacional, foi criada a partir da necessidade de
                            segurança nas empresas com relação aos dados expostos na internet sem nenhum gerenciamento
                            ou amparo adequado, em virtude disso, a UniSoft surgiu usando a mais alta tecnologia de
                            proteção com profissionais especializados em segurança da informação, atualmente com demanda
                            de 300 colaboradores. A sede da agência é localizada na capital de São Paulo tendo
                            escritórios e filiais em outros estados, como Rio de Janeiro, Maranhão e Rio Grande do
                            Sul.<br><br>Temos um foco inovador com a segurança de dados, nosso forte está empenhado no
                            resguardo e proteção não somente de empresas, mas de pessoas autônomas desenvolvendo um
                            sistema único e ao nível de suas necessidades, assim tendo total certeza que nossos clientes
                            estarão praticando o uso adequado com os melhores preços podendo optar por pacotes e anos de
                            garantia, evitando ataques de Ransomware, Backdoor, Spoofing ou sequestros de dados que são
                            crescentes no mundo independente do cuidado que tomamos hoje.</p>
                    </div>
                </div>
                <div class="col-5 teste mt-5 qmss">
                    <img class="img-fluid" src="imagens/QuemSomos.png" alt="">
                </div>
            </div>
        </div>
    </div>



    <!--ESSENCIA-->

    <div id="essencia">
        <div class="container">
            <h1 class="titulo-essencia">NOSSA ESSÊNCIA</h1>
            <p>Nós da Unisoft, temos como objetivo, prover para os nossos clientes que procuram softwares de proteção,
                uma solução confiável e de qualidade, para sempre garantir que tenham o conforte de estar protegidos em
                qualquer ambiente online, assim desenvolvendo antivírus e proteções de dados.<br><br>Embora a Internet
                tenha se tornado um lugar mais seguro ao passar dos anos, pois, as pessoas sabem mais sobre hábitos de
                navegação seguros e os navegadores estão sempre tentando ficar à frente dos programadores maliciosos,
                ainda não há desculpa para navegar na web sem um programa antivírus. O software antivírus é uma das
                linhas de defesa contra os muitos programas prejudiciais que podem prejudicar o seu computador e
                segurança.</p>
            <div class="card-deck">
                <div class="card text-white">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90"
                        viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M168.6675,3.3325l-3.655,0.1075c-1.04812,0.01344 -25.6925,0.5375 -49.665,12.47c-8.66719,4.32688 -16.32656,9.87656 -22.79,16.34c-19.6725,19.6725 -58.25156,68.65219 -59.8775,70.735l-0.43,0.43l-0.215,0.645c-0.55094,1.80063 -1.29,8.80156 12.9,23.005c10.8575,10.8575 17.58969,13.115 21.285,13.115c0.83313,0 1.38406,-0.1075 1.72,-0.215l0.645,-0.215l0.5375,-0.43c2.09625,-1.65281 51.51938,-40.76937 70.6275,-59.8775c6.43656,-6.45 11.91906,-14.12281 16.2325,-22.79c11.87875,-23.93219 12.55063,-48.61687 12.5775,-49.665zM116.96,41.28c7.60563,0 13.76,6.15438 13.76,13.76c0,7.60563 -6.15437,13.76 -13.76,13.76c-7.60562,0 -13.76,-6.15437 -13.76,-13.76c0,-7.60562 6.15438,-13.76 13.76,-13.76zM30.96,68.8c-1.02125,0 -2.02906,0.40313 -2.6875,1.1825l-17.2,20.64c-0.7525,0.91375 -0.90031,2.20375 -0.5375,3.3325c0.36281,1.12875 1.20938,1.97531 2.365,2.2575l13.545,3.44l0.43,-0.43l0.3225,-0.5375c0.83313,-1.06156 11.34125,-14.41844 24.08,-29.885zM27.52,115.5625l-2.9025,4.8375c-1.94844,3.44 1.26313,9.32563 9.46,17.5225c6.69188,6.69188 11.69063,9.9975 15.265,9.9975c1.075,0 1.77375,-0.25531 2.2575,-0.5375l4.8375,-2.9025c-4.945,-2.43219 -10.34687,-6.58437 -16.34,-12.5775c-6.43656,-6.45 -10.34687,-11.825 -12.5775,-16.34zM103.2,120.615c-15.42625,12.72531 -28.81,23.34094 -29.885,24.1875l-0.43,0.3225l-0.5375,0.43l3.44,13.545c0.28219,1.15563 1.12875,2.00219 2.2575,2.365c0.34938,0.1075 0.71219,0.215 1.075,0.215c0.79281,0 1.51844,-0.22844 2.15,-0.7525l20.64,-17.2c0.77938,-0.65844 1.29,-1.66625 1.29,-2.6875zM22.0375,131.4725c-5.61687,4.31344 -10.69625,4.86438 -15.265,9.3525c-2.28437,2.24406 -4.09844,5.42875 -5.16,9.7825c-1.06156,4.35375 -1.505,9.97063 -1.505,17.845v3.44h3.44c15.8025,0 23.52906,-2.49937 28.165,-7.2025c4.63594,-4.70312 5.40188,-9.94375 8.9225,-14.7275l-5.59,-4.085c-4.46125,6.07375 -5.45562,11.11281 -8.2775,13.975c-2.48594,2.52625 -8.02219,4.38063 -19.4575,4.8375c0.17469,-4.99875 0.41656,-9.79594 1.075,-12.47c0.86,-3.48031 1.90813,-5.16 3.225,-6.45c2.62031,-2.58 7.75344,-3.73562 14.5125,-8.9225z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h6 class="card-title">MISSÃO</h6>
                        <div class="scrollcard">
                            <p class="card-text">A UniSoft é uma empresa socialmente responsável, aqui a nossa missão é
                                ajudar pessoas autônomas e empresas a manter sua integridade e segurança na internet,
                                além disso, proteger usuários contra todo tipo de ameaça digital e ataques cibernéticos
                                de dados através de serviços de segurança e capacitação constante, assim auxiliando
                                empresas a manter estabilidade e proteção podendo agir de forma confiante em seus
                                segmentos sem sofrer danos ou grandes perdas.</p>
                        </div>
                    </div>
                </div>

                <div class="card text-white">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90"
                        viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M86,28.66667c-57.33333,0 -78.83333,57.33333 -78.83333,57.33333c0,0 20.26364,53.61439 73.6123,57.01139c-1.247,-4.43617 -1.94564,-9.12373 -1.94564,-14.01139c0,-2.67317 0.25688,-5.27321 0.64388,-7.82455c-16.66967,-3.0745 -29.31055,-17.61712 -29.31055,-35.17545c0,-19.79433 16.039,-35.83333 35.83333,-35.83333c17.55833,0 32.10095,12.64088 35.17545,29.31055c2.55133,-0.387 5.15138,-0.64388 7.82455,-0.64388c12.97167,0 24.60361,4.72317 33.42578,12.52767c1.62684,-3.31817 2.40756,-5.361 2.40756,-5.361c0,0 -21.5,-57.33333 -78.83333,-57.33333zM86,64.5c-11.868,0 -21.5,9.632 -21.5,21.5c0,11.0725 8.4121,20.09388 19.17643,21.26205c4.88767,-10.39167 13.19395,-18.69795 23.58561,-23.58561c-1.16817,-10.76433 -10.18955,-19.17643 -21.26205,-19.17643zM129,93.16667c-20.06667,0 -35.83333,15.76667 -35.83333,35.83333c0,20.06667 15.76667,35.83333 35.83333,35.83333c7.138,0 14.27611,-2.13511 20.00228,-5.69694l10.764,10.764c1.3975,1.3975 3.23239,2.09961 5.06706,2.09961c1.83467,0 3.66956,-0.70211 5.06706,-2.09961c2.80217,-2.80217 2.80217,-7.33194 0,-10.13411l-10.764,-10.764c3.56183,-5.72617 5.69694,-12.86428 5.69694,-20.00228c0,-20.06667 -15.76667,-35.83333 -35.83333,-35.83333zM129,107.5c12.18333,0 21.5,9.31667 21.5,21.5c0,12.18333 -9.31667,21.5 -21.5,21.5c-12.18333,0 -21.5,-9.31667 -21.5,-21.5c0,-12.18333 9.31667,-21.5 21.5,-21.5z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h6 class="card-title">VISÃO</h6>
                        <div class="scrollcard">
                            <p class="card-text">A visão da UniSoft é ser uma agência nacionalmente conhecida e
                                considerada em segurança e proteção contra ataques cibernéticos e sequestro de dados
                                dando todo suporte necessário para empresas de grandes à pequeno porte, ou usuários com
                                grande necessidade de nossos serviços, tendo como objetivo para 5 anos se estender
                                mundialmente se tornando referência por nossa tecnologia, serviços, funcionários e
                                melhor preço para que assim atenda todas as necessidades trazendo soluções inovadoras e
                                constantes</p>
                        </div>
                    </div>
                </div>

                <div class="card text-white">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90"
                        viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path
                                    d="M126.07734,28.4987c-0.42672,0.00872 -0.85114,0.06506 -1.26536,0.16797h-38.52083h-0.57109h-38.97995c-0.28503,-0.04782 -0.57326,-0.07402 -0.86224,-0.07839c-1.98041,-0.01091 -3.82625,1.00091 -4.88229,2.6763l-33.40338,38.97995c-1.28457,1.13863 -1.99144,2.79288 -1.92638,4.50821c0.06506,1.71533 0.8952,3.31129 2.26232,4.34934l73.88385,73.88386c0.01849,0.02254 0.03716,0.04493 0.05599,0.06718l0.07839,0.06719c0.26984,0.27154 0.5662,0.51538 0.88464,0.72786c0.0149,0.00753 0.02983,0.015 0.04479,0.0224c0.13805,0.09196 0.28002,0.17789 0.42552,0.25755c0.02977,0.01145 0.05963,0.02265 0.08958,0.0336c0.659,0.34024 1.37774,0.54939 2.1164,0.61589c0.19359,0.01733 0.38794,0.0248 0.58229,0.02239c0.07472,-0.00227 0.14939,-0.00601 0.22396,-0.0112c0.09722,-0.00499 0.1943,-0.01246 0.29114,-0.02239c0.01866,0.00009 0.03732,0.00009 0.05599,0c0.03366,-0.00716 0.06725,-0.01463 0.10078,-0.0224c0.15404,-0.0199 0.3072,-0.04605 0.45912,-0.07839c0.15075,-0.0313 0.30018,-0.06865 0.44792,-0.11198c0.03744,-0.01082 0.07477,-0.02201 0.11198,-0.03359c0.04123,-0.01446 0.08229,-0.02939 0.12317,-0.04479c0.31764,-0.1109 0.6249,-0.24954 0.91823,-0.41432c0.00374,-0.00373 0.00747,-0.00746 0.0112,-0.0112c0.12992,-0.0734 0.25693,-0.15185 0.38073,-0.23516c0.03008,-0.0221 0.05994,-0.0445 0.08958,-0.06719c0.26749,-0.18728 0.51848,-0.39707 0.75026,-0.62708l0.04479,-0.03359c0.02644,-0.02959 0.05257,-0.05945 0.07839,-0.08958l73.90625,-73.90625c1.36166,-1.03995 2.18691,-2.63434 2.24976,-4.34655c0.06285,-1.71221 -0.64328,-3.36281 -1.92502,-4.4998l-33.15703,-38.6776c-1.0066,-1.91774 -3.00788,-3.10465 -5.17344,-3.06823zM53.45885,40.13333h21.38802l-15.27396,21.38802zM97.15312,40.13333h21.38802l-6.11406,21.38802zM86,44.27656l17.51354,24.52344h-35.02709zM43.27995,46.2138l6.45,22.5862h-25.8zM128.72005,46.2138l19.35,22.5862h-25.8zM25.30729,80.26667h28.08438l17.55833,45.64271zM65.68698,80.26667h40.62604l-20.31302,52.82058zM118.60833,80.26667h28.08438l-45.64271,45.64271z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h6 class="card-title">VALORES</h6>
                        <div class="scrollcard">
                            <p class="card-text">Inovação<br>Integridade<br>Responsabilidade
                                Social<br>Diversidade<br>Segurança<br>Ética<br>Transparência<br>Desafios<br>Comprometimento<br>Respeito
                                e Sustentabilidade</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--PARCEIROS E CLIENTES-->

    <div id="parceiros">
        <div class="container espaço">
            <h1 class="titulo-parceiros">PARCEIROS E CLIENTES</h1>
            <p class="text-parceiros">No processo de nossa trajetória, aproximadamente 20 grandes e renomadas empresas
                necessitadas de preservação utilizam nossos softwares e pacotes de segurança, entre elas empresas da
                área de contabilidade, tecnologia, saúde, comercial e financeiro. Nossos futuros projetos estão em
                desenvolvimento para prezar a segurança e proteção do mundo empresarial aumentando nossa equipe e
                filiais trazendo futuras possíveis soluções.</p>
            <div class="lala">
                <h3>Parceiros</h3>
                <div class="imagem-parceiro">
                    <abbr title="Deloitte"><a href="https://www2.deloitte.com/br/pt.html" target="blank"><img
                                src="imagens/ClientesParceiros/deloitte.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Absolute"><a href="https://www.absolute.com" target="blank"><img
                                src="imagens/ClientesParceiros/absolute.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Idwall"><a href="https://idwall.co" target="blank"><img
                                src="imagens/ClientesParceiros/idwall.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="TOVS"><a href="https://www.totvs.com" target="blank"><img
                                src="imagens/ClientesParceiros/TOTVSSA.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                </div>
                <h3>Clientes</h3>
                <div class="imagem-clientes">
                    <abbr title="JP Morgan"><a href="https://www.jpmorgan.com/us/en/home" target="blank"><img
                                src="imagens/ClientesParceiros/jpmorgan.png" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Souzamaas"><a href="https://souzamaas.com.br" target="blank"><img
                                src="imagens/ClientesParceiros/souzamaas.jpg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="NotreDame"><a href="https://www.gndi.com.br" target="blank"><img
                                src="imagens/ClientesParceiros/notredame.png" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                    <abbr title="Rockcontent"><a href="https://rockcontent.com/br/" target="blank"><img
                                src="imagens/ClientesParceiros/rockcontent.jpeg" alt="..."
                                class="img-thumbnail img-fluid"></a></abbr>
                </div>
            </div>
        </div>
    </div>

    <!--TRABALHE CONOSCO-->

    <div id="trabalhe">
        <div class="container">
            <div class="row align-items-center linha">
                <div class="col-8">
                    <div class="text-trabalhe">FAÇA PARTE DO NOSSO COLETIVO DE
                        PROTAGONISTAS<br><span>#TimeUniSoft</span></div>
                </div>
                <div class="col">
                    <a href="https://forms.gle/ZK4Cx8Qqi5qiiyfU7" target="blank"><button type="button"
                            class="btn btn-secondary btn-lg trabalhebtn">TRABALHE CONOSCO</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--PRODUTOS-->

    <div id="produtos1">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagens/Banner/BannerServicos.png" alt="Primeiro Slide">
                    <div class="carousel-caption d-block h-75">
                        <h1>UNISOFT SOLUÇÕES <br> DE SEGURANÇA</h1>
                        <p>Obtenha proteção adaptativa contra ameaças <br> avançadas direcionadas aos seus negócios</p>
                        <a href="#produtoscard"><button type="button"
                                class="btn btn-primary btn-lg">CONHECER</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!--CARD PRODUTOS-->

        <div id="produtoscard">
            <div class="card-deck">
                <div class="card mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                        height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#1c3ccd">
                                <path
                                    d="M113,7.04871c-2.33118,0 -4.66235,0.77246 -6.62109,2.33118l-4.93823,3.95886c-16.4148,13.13184 -36.18152,20.81506 -57.16211,22.20825l-12.7732,0.85523c-5.80725,0.38623 -10.23511,5.42102 -9.87646,11.21448l2.42773,40.80249c2.78638,38.44372 20.31848,73.54932 49.40991,98.84741l32.5813,28.31897c1.98633,1.72425 4.46924,2.57947 6.95215,2.57947c2.48291,0 4.96582,-0.85522 6.95215,-2.57947l32.5675,-28.31897c29.09143,-25.29809 46.65112,-60.40369 49.42371,-98.88879l2.42773,-40.74732c0.35864,-5.80725 -4.06921,-10.84204 -9.87646,-11.22827l-12.77319,-0.85523c-20.98059,-1.39319 -40.74732,-9.07641 -57.16211,-22.20825l-4.93823,-3.95886c-1.94495,-1.55871 -4.28992,-2.33118 -6.62109,-2.33118zM113,14.125c0.77246,0 1.55871,0.26209 2.20703,0.77246l4.93823,3.95886c17.5459,14.04223 38.67822,22.24963 61.10718,23.73938l12.7732,0.85523c1.93115,0.12414 3.4209,1.807 3.29675,3.75195l-2.44153,40.70593c-1.84839,25.7395 -10.69031,49.87891 -25.38086,70.32153v-1.31043c0,-1.94495 -1.5863,-3.53125 -3.53125,-3.53125c-1.94495,0 -3.53125,1.5863 -3.53125,3.53125v7.0625c0,0.86902 0.34485,1.62769 0.85523,2.23462c-4.67615,5.57275 -9.7937,10.84204 -15.39404,15.7113l-32.5813,28.33277c-1.32422,1.1449 -3.31055,1.1449 -4.63477,0l-32.5813,-28.33277c-5.60034,-4.86926 -10.7179,-10.13855 -15.39404,-15.7113c0.51038,-0.62073 0.85522,-1.37939 0.85522,-2.23462v-7.0625c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v1.31043c-14.69055,-20.44263 -23.53247,-44.56824 -25.38086,-70.28015l-2.44153,-40.76111c-0.12414,-1.93115 1.3656,-3.61401 3.29675,-3.73816l12.77319,-0.85523c22.44275,-1.50354 43.56128,-9.71094 61.10718,-23.75317l4.93823,-3.94507c0.66211,-0.51038 1.43457,-0.77246 2.20703,-0.77246zM113,24.22217c-1.42078,0 -2.84155,0.42761 -4.04163,1.26904l-9.09021,6.35901c-15.31128,10.7179 -33.2572,17.03552 -51.92041,18.29077l-2.276,0.13794c-1.95874,0.13794 -3.4209,1.8346 -3.29675,3.77954c0.13794,1.86218 1.68286,3.28296 3.53125,3.28296c0.06897,0 0.15173,0 0.2345,-0.01379l2.2898,-0.15173c19.93225,-1.32422 39.11963,-8.08325 55.49304,-19.54602l9.07641,-6.34521l9.07642,6.34521c9.80749,6.86939 20.59436,12.04211 32.05713,15.39404c1.86218,0.53796 3.83472,-0.52417 4.38647,-2.40014c0.53796,-1.87598 -0.53796,-3.83472 -2.41394,-4.38648c-10.71789,-3.13123 -20.81506,-7.9729 -29.97424,-14.38709l-9.09021,-6.35901c-1.20007,-0.84143 -2.62085,-1.26904 -4.04163,-1.26904zM169.98279,49.27197c-1.91736,-0.30347 -3.72437,1.06213 -4.01404,2.99329c-0.27588,1.93115 1.04834,3.72437 2.97949,4.00025c2.85535,0.41382 5.75207,0.71729 8.60742,0.9104l2.09668,0.15173c0.06897,0 0.16553,0 0.2345,0c1.84839,0 3.39331,-1.42078 3.51746,-3.29675c0.13794,-1.94495 -1.32422,-3.6278 -3.26916,-3.76575l-2.09668,-0.12414c-2.67603,-0.17932 -5.39343,-0.469 -8.05566,-0.86902zM74.15625,77.6875c-5.83484,0 -10.59375,4.75891 -10.59375,10.59375v7.0625c0,5.83484 4.75891,10.59375 10.59375,10.59375h10.59375c1.94495,0 3.53125,1.5863 3.53125,3.53125v7.0625c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-10.59375c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125c0,5.83484 4.75891,10.59375 10.59375,10.59375h10.59375c5.83484,0 10.59375,-4.75891 10.59375,-10.59375v-7.0625c0,-5.83484 -4.75891,-10.59375 -10.59375,-10.59375h-10.59375c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-7.0625c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125h10.59375c1.94495,0 3.53125,1.5863 3.53125,3.53125c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125c0,-5.83484 -4.75891,-10.59375 -10.59375,-10.59375zM116.53125,77.6875c-5.83484,0 -10.59375,4.75891 -10.59375,10.59375v7.0625c0,5.83484 4.75891,10.59375 10.59375,10.59375h10.59375c1.94495,0 3.53125,1.5863 3.53125,3.53125v7.0625c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-10.59375c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125c0,5.83484 4.75891,10.59375 10.59375,10.59375h10.59375c5.83484,0 10.59375,-4.75891 10.59375,-10.59375v-7.0625c0,-5.83484 -4.75891,-10.59375 -10.59375,-10.59375h-10.59375c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-7.0625c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125h10.59375c1.94495,0 3.53125,1.5863 3.53125,3.53125c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125c0,-5.83484 -4.75891,-10.59375 -10.59375,-10.59375zM151.84375,77.6875c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v42.375c0,1.95874 1.5863,3.53125 3.53125,3.53125h17.65625c1.94495,0 3.53125,-1.57251 3.53125,-3.53125c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125h-14.125v-38.84375c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125zM77.6875,153.38867c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.94495 -1.5863,-3.53125 -3.53125,-3.53125zM95.34375,153.38867c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.94495 -1.5863,-3.53125 -3.53125,-3.53125zM113,153.38867c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.94495 -1.5863,-3.53125 -3.53125,-3.53125zM130.65625,153.38867c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.94495 -1.5863,-3.53125 -3.53125,-3.53125zM148.3125,153.38867c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.94495 -1.5863,-3.53125 -3.53125,-3.53125z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Convergent Firewall</h5>
                        <p class="card-text mb-3">Thunder® CFW combina data center e firewall Gi / SGi, gateway de web
                            seguro e VPN IPsec em uma única solução com todos os recursos Thunder ADC, CGN e SSLi.</p>
                    </div>
                    <div class="card-footer">
                        <a class="producard" href="#" type="button" data-toggle="modal" data-target="#produto1">Ler Mais
                            <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="card mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                        height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#1c3ccd">
                                <path
                                    d="M17.65625,14.125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v21.1875c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-17.65625h17.65625c1.94495,0 3.53125,-1.57251 3.53125,-3.53125c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125zM187.15625,14.125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125c0,1.95874 1.5863,3.53125 3.53125,3.53125h17.65625v17.65625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-21.1875c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125zM138.56018,18.81494c-1.93115,-0.31726 -3.72436,1.00696 -4.04163,2.92432l-1.11731,6.97974c-0.30347,1.93115 1.00696,3.73816 2.93811,4.05542c0.17932,0.02759 0.37244,0.04138 0.55176,0.04138c1.71045,0 3.21399,-1.24146 3.48987,-2.9657l1.11731,-6.97973c0.30347,-1.93115 -1.00696,-3.73816 -2.93811,-4.05542zM108.58594,21.24268c-1.93115,-0.11035 -3.60022,1.43457 -3.68298,3.39331c-0.06897,1.94495 1.44837,3.58643 3.39331,3.66919c3.54504,0.13794 7.15906,0.51038 10.74548,1.10352c0.19311,0.02759 0.38623,0.04138 0.57934,0.04138c1.69666,0 3.2002,-1.22766 3.47607,-2.95191c0.33105,-1.93115 -0.97937,-3.75195 -2.91052,-4.06921c-3.8623,-0.63452 -7.76599,-1.03455 -11.60071,-1.18628zM96.21277,21.60132c-12.09729,1.18628 -23.50488,4.82788 -33.89172,10.82825c-19.17359,11.07654 -33.35376,29.6156 -39.94727,52.21008c-0.53796,1.86218 0.53796,3.83472 2.40014,4.37268c0.33105,0.09656 0.66211,0.13794 0.99316,0.13794c1.53113,0 2.93811,-0.99316 3.39331,-2.53809c6.06934,-20.84265 19.10461,-37.90576 36.69189,-48.05811c9.51782,-5.50379 19.95984,-8.84192 31.03638,-9.93164c1.94495,-0.19312 3.36572,-1.91736 3.1864,-3.8623c-0.19312,-1.94495 -1.91736,-3.32434 -3.8623,-3.15881zM155.76123,24.05664c-1.37939,-0.01379 -2.71741,0.75867 -3.31055,2.09668l-2.88293,6.42798c-0.80005,1.79321 0,3.8761 1.77942,4.67614c0.469,0.20691 0.95178,0.31726 1.43457,0.31726c1.35181,0 2.64844,-0.78625 3.22778,-2.09668l2.88293,-6.44177c0.80005,-1.77942 0,-3.8761 -1.77942,-4.67614c-0.44141,-0.19312 -0.89661,-0.28968 -1.35181,-0.30347zM171.00354,33.73999c-0.89661,0.09655 -1.75183,0.53796 -2.37256,1.29663l-4.45544,5.4762c-1.22766,1.51734 -0.99316,3.73816 0.52417,4.96582c0.64832,0.52417 1.43457,0.78626 2.22082,0.78626c1.02075,0 2.0415,-0.44141 2.745,-1.29663l4.45545,-5.4762c1.22766,-1.51734 0.99316,-3.75195 -0.52417,-4.97961c-0.74487,-0.60693 -1.68286,-0.85523 -2.59326,-0.77246zM110.35156,36.94019c-4.15198,-0.15173 -8.23498,0.01379 -12.18005,0.46899c-1.93115,0.2207 -3.32434,1.97254 -3.10364,3.91748c0.2345,1.93115 1.95874,3.35193 3.91748,3.08984c28.80176,-3.28296 65.8523,10.40064 79.10828,48.33398c0.49658,1.46216 1.86218,2.37256 3.32434,2.37256c0.38623,0 0.78625,-0.05518 1.15869,-0.19311c1.84839,-0.64832 2.81396,-2.66223 2.16565,-4.49683c-12.70422,-36.40222 -45.31311,-52.47217 -74.39075,-53.49292zM87.46741,39.72656c-0.4552,-0.04138 -0.93799,-0.01379 -1.40698,0.12414c-5.43482,1.5863 -10.67652,3.83472 -15.60095,6.67627c-20.00122,11.54553 -33.39514,32.44336 -36.77466,57.32764c-0.27588,1.93115 1.07593,3.72437 3.00708,3.97266c0.16553,0.02759 0.33105,0.04138 0.49658,0.04138c1.72424,0 3.24158,-1.28284 3.47607,-3.04846c3.08984,-22.71863 15.24231,-41.74048 33.32617,-52.1825c4.44165,-2.55188 9.15918,-4.57959 14.05603,-6.01416c1.87598,-0.53796 2.9519,-2.4967 2.40014,-4.37268c-0.41382,-1.40698 -1.61389,-2.35877 -2.97949,-2.52429zM184.60437,47.17529c-0.89661,-0.15173 -1.83459,0.05518 -2.63464,0.62073l-5.72449,4.13818c-1.5863,1.1449 -1.93115,3.35193 -0.78625,4.93823c0.6897,0.95178 1.76563,1.44836 2.86914,1.44836c0.70349,0 1.43457,-0.20691 2.0553,-0.66211l5.72449,-4.13818c1.5863,-1.1449 1.94495,-3.35193 0.80005,-4.92444c-0.56555,-0.80005 -1.40698,-1.28284 -2.30359,-1.42078zM107.10998,52.51355c-9.69714,0.35864 -19.40808,3.00708 -28.30518,8.15222c-22.48413,12.9801 -34.08484,38.19543 -30.92602,66.45923h-7.297c-0.37244,-3.11743 -0.63452,-6.23486 -0.67591,-9.32471c-0.02759,-1.93115 -1.6001,-3.47607 -3.53125,-3.47607h-0.05518c-1.94495,0.04138 -3.50366,1.64148 -3.47607,3.58643c0.05518,3.04846 0.28968,6.1383 0.63452,9.21436h-29.94666c-1.46216,0 -2.71741,0.89661 -3.25537,2.15186c-0.17932,0.42761 -0.27588,0.89661 -0.27588,1.37939c0,0.48279 0.09656,0.95178 0.27588,1.37939c0.53796,1.25525 1.79321,2.15186 3.25537,2.15186h218.9375c1.46216,0 2.71741,-0.89661 3.25537,-2.15186c0.17932,-0.42761 0.27588,-0.89661 0.27588,-1.37939c0,-0.48279 -0.09656,-0.95178 -0.27588,-1.37939c-0.53796,-1.25525 -1.79321,-2.15186 -3.25537,-2.15186h-84.79138c-5.31067,-5.22791 -9.1178,-11.57312 -11.22827,-18.96668c-0.30347,-1.04834 -0.6897,-2.08288 -1.18628,-3.04846c-3.32434,-6.64868 -10.30407,-10.56616 -17.38037,-9.75232c-5.55896,0.64832 -10.2489,3.47607 -13.2008,7.9867c-2.88293,4.41406 -3.6416,9.82129 -2.11047,14.78711c0.88281,3.03467 1.98633,6.02795 3.2002,8.99365h-7.62805c-0.85523,-2.31738 -1.66907,-4.67615 -2.37256,-7.09009c-2.12427,-6.88318 -1.03455,-14.37329 3.00708,-20.55298c4.05542,-6.20727 10.71789,-10.2627 18.30457,-11.14551c9.98682,-1.11731 19.84949,4.3175 24.49805,13.60083c0.6897,1.39319 1.25525,2.84155 1.66907,4.3175c1.72424,6.01416 4.71753,11.24207 8.92468,15.51819c1.3656,1.37939 3.60022,1.39319 4.97961,0.04138c1.39319,-1.37939 1.42078,-3.61402 0.05518,-5.0072c-3.36572,-3.40711 -5.77966,-7.61426 -7.17285,-12.48352c-0.52417,-1.88977 -1.24145,-3.75195 -2.13806,-5.53137c-5.97278,-11.93177 -18.677,-18.95288 -31.61572,-17.46314c-9.66955,1.11731 -18.20801,6.31763 -23.40832,14.29053c-5.18652,7.94531 -6.5935,17.61487 -3.8623,26.44299c0.49658,1.69666 1.03455,3.39331 1.6001,5.07617h-8.17981c-3.03467,-13.18701 -1.43457,-26.24988 4.52441,-35.38147c1.06213,-1.64148 0.60693,-3.82092 -1.03455,-4.88305c-1.62768,-1.07593 -3.82092,-0.60693 -4.88305,1.02075c-6.74524,10.33166 -8.80054,24.73254 -5.83484,39.22998h-10.20752c-3.14502,-25.7395 7.14526,-48.69263 27.3396,-60.34851c25.24292,-14.5802 57.8656,-6.53833 74.2666,18.30457c1.07593,1.64148 3.26917,2.08289 4.89685,1.00696c1.62769,-1.07593 2.06909,-3.25537 0.99316,-4.88305c-12.67664,-19.22876 -34.01587,-29.50525 -55.38269,-28.69141zM192.92212,63.3418c-0.4552,-0.01379 -0.93799,0.05518 -1.39319,0.2345l-6.5935,2.52429c-1.8208,0.6897 -2.7312,2.7312 -2.02771,4.552c0.52417,1.40698 1.86218,2.276 3.29675,2.276c0.41382,0 0.84143,-0.06897 1.24145,-0.2207l6.6073,-2.52429c1.83459,-0.70349 2.7312,-2.745 2.0415,-4.5658c-0.52417,-1.3656 -1.79321,-2.22082 -3.17261,-2.276zM108.19971,67.03857c-1.17248,0.02759 -2.35877,0.12414 -3.53125,0.26209c-8.92468,1.00696 -17.27002,4.49682 -24.1394,10.06958c-1.51734,1.22766 -1.75183,3.44849 -0.52417,4.96582c1.22766,1.51734 3.44849,1.75183 4.96582,0.52417c5.83484,-4.73132 12.92493,-7.68323 20.5116,-8.55225c15.87683,-1.8208 31.4364,6.74524 38.7334,21.29785c1.08972,2.17944 1.95874,4.46924 2.62085,6.78662c2.48291,8.69018 9.22815,14.48364 19.50464,16.74585c2.06909,0.4552 4.40027,0.6897 6.96594,0.6897c1.65527,0 3.4209,-0.09656 5.25549,-0.28967l12.51111,-1.32422c1.94495,-0.20691 3.35193,-1.94495 3.14502,-3.88989c-0.20691,-1.93115 -1.91736,-3.35193 -3.8761,-3.14502l-12.51111,1.32422c-3.91748,0.41382 -7.2832,0.34485 -9.97302,-0.26209c-7.79358,-1.71045 -12.45593,-5.55896 -14.23535,-11.76623c-0.77246,-2.745 -1.807,-5.43481 -3.10364,-8.01428c-8.06946,-16.12512 -24.76013,-26.02918 -42.31982,-25.42224zM165.70666,91.34351c-0.4552,-0.0138 -0.92419,0.05518 -1.37939,0.2345c-1.8208,0.70349 -2.71741,2.745 -2.01391,4.5658c0.9104,2.33118 1.66907,4.7727 2.26221,7.21423c0.38623,1.61389 1.83459,2.68982 3.43469,2.68982c0.26209,0 0.55176,-0.02759 0.82764,-0.09656c1.88977,-0.4552 3.06226,-2.35876 2.59326,-4.26233c-0.66211,-2.745 -1.51733,-5.4762 -2.53809,-8.09705c-0.52417,-1.3656 -1.80701,-2.20703 -3.1864,-2.24841zM110.24121,102.33728c3.57263,0.19311 6.95215,2.42773 8.70398,5.93139c0.28967,0.57935 0.52417,1.20007 0.71729,1.8346c1.80701,6.33142 4.68994,12.01452 8.55225,17.02173h-24.76013c-1.6001,-3.58643 -3.02087,-7.25561 -4.11059,-11.02136c-0.9242,-3.00708 -0.469,-6.24866 1.25525,-8.89709c1.77942,-2.71741 4.64856,-4.42786 8.09705,-4.82788c0.51038,-0.05518 1.02075,-0.06897 1.54492,-0.04138zM110.97229,112.93103c-0.42761,-0.05518 -0.88281,-0.02759 -1.32422,0.08276c-1.98633,0.53796 -3.10364,2.64844 -2.44153,4.57959c0.49658,1.43457 1.03455,2.84155 1.6001,4.22095c0.56555,1.3656 1.88977,2.17944 3.26916,2.17944c0.4552,0 0.9104,-0.08276 1.35181,-0.27588c1.80701,-0.74487 2.66223,-2.81396 1.90356,-4.60718c-0.52417,-1.26904 -1.00696,-2.56568 -1.44836,-3.84851c-0.4552,-1.31043 -1.6001,-2.17944 -2.91052,-2.33118zM151.71961,136.9187c-1.37939,0.02759 -2.66223,0.85522 -3.2002,2.22082c-0.73108,1.80701 0.13794,3.8623 1.94495,4.59338c3.13123,1.24146 6.42798,2.26221 9.7937,3.00708c4.08301,0.89661 8.48327,1.3518 13.09045,1.3518c0.56555,0 1.15869,0 1.72424,-0.01379c1.95874,-0.05518 3.50366,-1.66907 3.44849,-3.62781c-0.05518,-1.94495 -1.68286,-3.44848 -3.61402,-3.43469c-4.68994,0.11035 -9.09021,-0.28967 -13.13184,-1.17248c-2.99329,-0.66211 -5.9176,-1.55872 -8.6626,-2.67603c-0.4552,-0.17932 -0.93799,-0.26209 -1.39319,-0.24829zM194.38428,139.16711l-7.15906,0.75867c-1.93115,0.20691 -3.33813,1.94495 -3.13122,3.88989c0.19311,1.8208 1.72424,3.15881 3.50366,3.15881c0.13794,0 0.24829,0 0.38623,-0.02759l7.13147,-0.74487c1.94495,-0.20691 3.35193,-1.94495 3.14502,-3.88989c-0.20691,-1.94495 -1.95874,-3.33813 -3.8761,-3.14502zM55.67236,141.22241c-0.4552,-0.02759 -0.9242,0.02759 -1.37939,0.19311c-1.84839,0.63452 -2.82776,2.64844 -2.19324,4.48303c2.0415,5.89002 6.35901,13.84912 11.55933,21.28406c0.6897,0.99316 1.77942,1.53113 2.89673,1.53113c0.6897,0 1.40698,-0.2207 2.02771,-0.64832c1.5863,-1.10352 1.98633,-3.31055 0.86902,-4.91064c-4.77271,-6.8418 -8.85571,-14.33191 -10.67652,-19.57361c-0.46899,-1.37939 -1.72424,-2.26221 -3.10364,-2.35876zM129.04236,141.25c-0.89661,0.04138 -1.79321,0.42761 -2.44153,1.1449c-1.31043,1.44836 -1.20007,3.68298 0.24829,4.99341c13.2146,11.98694 30.31909,18.58045 48.15466,18.58045c1.94495,0 3.53125,-1.57251 3.53125,-3.53125c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125c-16.08374,0 -31.49158,-5.94519 -43.40955,-16.75964c-0.73108,-0.64831 -1.65527,-0.95178 -2.55188,-0.89661zM41.11975,141.59485c-0.4552,-0.04138 -0.93799,0 -1.39319,0.13794c-1.87598,0.57934 -2.91052,2.55188 -2.33118,4.41406c2.34497,7.55908 5.57275,14.91125 9.58679,21.8634c7.00732,12.13867 16.01477,22.51172 26.77405,30.80188c0.64832,0.49658 1.39319,0.73108 2.15186,0.73108c1.06213,0 2.11047,-0.469 2.80017,-1.37939c1.18628,-1.54492 0.9104,-3.75195 -0.63452,-4.93823c-10.0282,-7.7384 -18.4425,-17.40796 -24.98084,-28.74658c-3.75195,-6.49695 -6.77282,-13.36633 -8.95227,-20.41504c-0.42761,-1.40698 -1.65527,-2.33118 -3.02087,-2.46912zM92.32288,141.59485c-0.44141,0.05518 -0.89661,0.2207 -1.32422,0.469c-1.66907,0.99316 -2.22082,3.15881 -1.22766,4.82788c10.74548,18.13904 26.87061,32.93994 45.39587,41.71289c0.48279,0.2345 0.99316,0.34485 1.50354,0.34485c1.32422,0 2.59326,-0.74487 3.2002,-2.01392c0.82764,-1.76562 0.08277,-3.8761 -1.68286,-4.70373c-17.27002,-8.17981 -32.30542,-22.00134 -42.34741,-38.94031c-0.74487,-1.25525 -2.15186,-1.87598 -3.51746,-1.69666zM110.35156,141.62244c-0.89661,-0.13794 -1.84839,0.05518 -2.63464,0.63452c-1.57251,1.15869 -1.90356,3.36572 -0.74487,4.93823c2.52429,3.43469 5.29688,6.73145 8.24878,9.77991c0.6897,0.71729 1.61389,1.08972 2.53809,1.08972c0.88281,0 1.76563,-0.34485 2.45532,-0.99316c1.40698,-1.3656 1.43457,-3.60022 0.08276,-5.0072c-2.7312,-2.82776 -5.29687,-5.86243 -7.64184,-9.04883c-0.57935,-0.78625 -1.42078,-1.26904 -2.30359,-1.39319zM74.92871,141.7052c-0.4552,0.0138 -0.9242,0.12415 -1.3656,0.31726c-1.77942,0.80005 -2.57947,2.88293 -1.77942,4.66236c13.53186,30.22253 37.89197,51.09277 70.44568,60.34851c0.31726,0.09656 0.64832,0.13794 0.96557,0.13794c1.54492,0 2.9657,-1.02075 3.40711,-2.57947c0.52417,-1.86218 -0.56555,-3.82092 -2.44153,-4.35889c-30.48462,-8.6626 -53.27222,-28.16723 -65.93506,-56.43103c-0.59314,-1.33801 -1.91736,-2.12427 -3.29675,-2.09668zM126.06287,158.92004c-0.89661,0.11035 -1.76562,0.55176 -2.35877,1.31043c-1.22766,1.53113 -0.96557,3.75195 0.56555,4.96582c13.94568,11.07654 30.0708,17.42175 46.65112,18.31836c0.06897,0.01379 0.12414,0 0.19311,0c1.86218,0 3.4209,-1.44836 3.51746,-3.32434c0.11035,-1.95874 -1.37939,-3.62781 -3.32434,-3.72437c-15.11816,-0.82764 -29.86389,-6.63489 -42.63709,-16.78723c-0.77246,-0.60693 -1.71045,-0.85522 -2.60705,-0.75867zM75.13562,172.16223c-0.89661,-0.02759 -1.8208,0.28968 -2.52429,0.95178c-1.43457,1.32422 -1.51733,3.57263 -0.17932,4.99341c1.40698,1.53113 2.86914,2.97949 4.37268,4.35889c0.6897,0.63452 1.54492,0.95178 2.41394,0.95178c0.93799,0 1.88977,-0.37243 2.57947,-1.1311c1.32422,-1.43457 1.24145,-3.66919 -0.19312,-4.99341c-1.37939,-1.26904 -2.71741,-2.60705 -4.01404,-4.00024c-0.66211,-0.71729 -1.55871,-1.08972 -2.45532,-1.13111zM17.65625,183.625c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v21.1875c0,1.95874 1.5863,3.53125 3.53125,3.53125h21.1875c1.94495,0 3.53125,-1.57251 3.53125,-3.53125c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125h-17.65625v-17.65625c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125zM208.34375,183.625c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v17.65625h-17.65625c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125c0,1.95874 1.5863,3.53125 3.53125,3.53125h21.1875c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-21.1875c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125zM89.15027,184.45264c-0.89661,-0.15173 -1.84839,0.01379 -2.64844,0.56555c-1.61389,1.11731 -2.01392,3.31055 -0.9104,4.91064c3.66919,5.31067 11.24207,10.34546 11.57312,10.55237c0.59314,0.38623 1.26904,0.57934 1.93115,0.57934c1.1449,0 2.276,-0.56555 2.95191,-1.5863c1.07593,-1.64148 0.62073,-3.82092 -1.00696,-4.88305c-1.86218,-1.24146 -7.22803,-5.18652 -9.62817,-8.6626c-0.55176,-0.80005 -1.37939,-1.31043 -2.26221,-1.47595zM155.54053,188.67359c-1.3656,0.24829 -2.4967,1.28284 -2.81396,2.70361c-0.42761,1.90356 0.77246,3.79333 2.67603,4.22095c3.11743,0.6897 6.30383,1.21387 9.46264,1.57251c0.13794,0.01379 0.27588,0.02759 0.40002,0.02759c1.77942,0 3.31055,-1.33801 3.51746,-3.14502c0.2207,-1.93115 -1.17248,-3.68298 -3.11743,-3.90369c-2.91052,-0.33105 -5.84863,-0.81384 -8.73157,-1.44836c-0.48279,-0.11035 -0.95178,-0.11035 -1.39319,-0.02759z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">SSL Insight</h5>
                        <p class="card-text mb-3">Thunder® SSLi® é a solução de descriptografia mais abrangente do
                            mercado. SSLi descriptografa o tráfego e permite que os dispositivos de segurança o analisem
                            sem comprometer o desempenho.</p>
                    </div>
                    <div class="card-footer">
                        <a class="producard" href="#" type="button" data-toggle="modal" data-target="#produto2">Ler Mais
                            <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="card mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                        height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#1c3ccd">
                                <path
                                    d="M113,10.59375c-25.31151,0 -45.90625,20.59476 -45.90625,45.90625c0,19.0548 11.681,35.41988 28.25,42.35431c-0.00002,0.0069 -0.00002,0.01379 0,0.02069v96.17828c-0.00073,0.73978 0.23087,1.46111 0.66211,2.06219l9.53162,13.28357c0.66261,0.92564 1.73078,1.47514 2.86914,1.47595h7.86944c1.06115,0.0011 2.06655,-0.47501 2.7381,-1.29663l10.84894,-13.29046c0.51402,-0.6312 0.7942,-1.4206 0.79315,-2.23462v-14.95953c-0.00018,-0.93648 -0.37231,-1.83455 -1.03455,-2.4967l-4.5658,-4.5658l4.5658,-4.5658c0.66224,-0.66215 1.03437,-1.56022 1.03455,-2.4967v-7.0625c-0.00018,-0.93648 -0.37231,-1.83455 -1.03455,-2.4967l-4.5658,-4.5658l4.5658,-4.5658c0.66224,-0.66215 1.03437,-1.56022 1.03455,-2.4967v-3.53125c-0.00018,-0.93648 -0.37231,-1.83455 -1.03455,-2.4967l-4.5658,-4.5658l4.5658,-4.5658c0.66224,-0.66215 1.03437,-1.56022 1.03455,-2.4967v-28.25c0.00002,-0.0069 0.00002,-0.01379 0,-0.02069c16.569,-6.93429 28.25,-23.29951 28.25,-42.35431c0,-25.31149 -20.59474,-45.90625 -45.90625,-45.90625zM113,17.65625c21.49466,0 38.84375,17.34911 38.84375,38.84375c0,21.49464 -17.34909,38.84375 -38.84375,38.84375c-21.49466,0 -38.84375,-17.34911 -38.84375,-38.84375c0,-21.49464 17.34909,-38.84375 38.84375,-38.84375zM113,31.78125c-4.41406,0 -8.17405,1.78242 -10.58685,4.49683c-2.4128,2.7144 -3.53815,6.19501 -3.53815,9.62817c0,3.43316 1.12534,6.91377 3.53815,9.62817c2.41281,2.71441 6.17279,4.49683 10.58685,4.49683c4.41406,0 8.17405,-1.78242 10.58685,-4.49683c2.4128,-2.7144 3.53815,-6.19501 3.53815,-9.62817c0,-3.43316 -1.12534,-6.91377 -3.53815,-9.62817c-2.41281,-2.71441 -6.17279,-4.49683 -10.58685,-4.49683zM113,38.84375c2.64843,0 4.18533,0.86602 5.30377,2.12427c1.11844,1.25825 1.75873,3.07452 1.75873,4.93823c0,1.86372 -0.64029,3.67998 -1.75873,4.93823c-1.11844,1.25824 -2.65534,2.12427 -5.30377,2.12427c-2.64843,0 -4.18533,-0.86602 -5.30377,-2.12427c-1.11844,-1.25825 -1.75873,-3.07452 -1.75873,-4.93823c0,-1.86372 0.64029,-3.67998 1.75873,-4.93823c1.11844,-1.25824 2.65534,-2.12427 5.30377,-2.12427zM40.60938,77.6875c-3.82552,0 -7.1441,1.56172 -9.26263,3.94507c-2.11854,2.38335 -3.09674,5.42255 -3.09674,8.4143c0,2.99175 0.97821,6.03096 3.09674,8.4143c2.11854,2.38335 5.43711,3.94507 9.26263,3.94507c1.00401,0 1.84427,-0.3639 2.76569,-0.56555l21.06336,24.07733c0.66987,0.76611 1.63766,1.20602 2.65533,1.20697h17.65625c1.2735,0.01801 2.45804,-0.65108 3.10004,-1.75105c0.642,-1.09998 0.642,-2.46042 0,-3.5604c-0.642,-1.09998 -1.82655,-1.76906 -3.10004,-1.75105h-16.05615l-18.87012,-21.56683c0.01271,-0.01448 0.0355,-0.02001 0.04828,-0.03449c2.11854,-2.38323 3.09674,-5.42255 3.09674,-8.4143c0,-2.99175 -0.97821,-6.03096 -3.09674,-8.4143c-2.11853,-2.38335 -5.43712,-3.94507 -9.26263,-3.94507zM185.39063,77.6875c-3.82552,0 -7.1441,1.56172 -9.26263,3.94507c-2.11853,2.38335 -3.09674,5.42255 -3.09674,8.4143c0,2.99175 0.97821,6.03096 3.09674,8.4143c0.01271,0.01448 0.03543,0.02001 0.04828,0.03449l-18.87012,21.56683h-16.05615c-1.2735,-0.01801 -2.45804,0.65108 -3.10004,1.75105c-0.642,1.09998 -0.642,2.46042 0,3.5604c0.642,1.09998 1.82655,1.76906 3.10004,1.75105h17.65625c1.01767,-0.00095 1.98547,-0.44086 2.65533,-1.20697l21.06336,-24.07733c0.92141,0.20166 1.76168,0.56555 2.76569,0.56555c3.82552,0 7.1441,-1.56172 9.26263,-3.94507c2.11853,-2.38335 3.09674,-5.42255 3.09674,-8.4143c0,-2.99175 -0.97821,-6.03096 -3.09674,-8.4143c-2.11853,-2.38335 -5.43712,-3.94507 -9.26263,-3.94507zM40.60938,84.75c2.05989,0 3.15538,0.64531 3.97955,1.57251c0.82417,0.9272 1.31732,2.30206 1.31732,3.72437c0,1.42231 -0.49315,2.79717 -1.31732,3.72437c-0.82417,0.92719 -1.91966,1.57251 -3.97955,1.57251c-2.05989,0 -3.15538,-0.64531 -3.97955,-1.57251c-0.82417,-0.9272 -1.31732,-2.30206 -1.31732,-3.72437c0,-1.42231 0.49315,-2.79717 1.31732,-3.72437c0.82417,-0.92719 1.91966,-1.57251 3.97955,-1.57251zM185.39063,84.75c2.05989,0 3.15538,0.64531 3.97955,1.57251c0.82417,0.9272 1.31732,2.30206 1.31732,3.72437c0,1.42231 -0.49315,2.79717 -1.31732,3.72437c-0.82417,0.92719 -1.91966,1.57251 -3.97955,1.57251c-2.05989,0 -3.15538,-0.64531 -3.97955,-1.57251c-0.82417,-0.9272 -1.31732,-2.30206 -1.31732,-3.72437c0,-1.42231 0.49315,-2.79717 1.31732,-3.72437c0.82417,-0.92719 1.91966,-1.57251 3.97955,-1.57251zM102.40625,101.05445c3.41541,0.81354 6.93298,1.3518 10.59375,1.3518c3.66077,0 7.17834,-0.53826 10.59375,-1.3518v24.6084l-6.02795,6.02795c-1.37849,1.37906 -1.37849,3.61435 0,4.99341l6.02795,6.02795v0.60694l-6.02795,6.02795c-1.37849,1.37906 -1.37849,3.61435 0,4.99341l6.02795,6.02795v4.13819l-6.02795,6.02795c-1.37849,1.37906 -1.37849,3.61435 0,4.99341l6.02795,6.02795v12.24213l-8.99365,11.01447h-4.37958l-7.81427,-10.89032zM26.48438,130.65625c-3.82552,0 -7.1441,1.56172 -9.26263,3.94507c-2.11854,2.38335 -3.09674,5.42255 -3.09674,8.4143c0,2.99175 0.97821,6.03095 3.09674,8.4143c2.11854,2.38335 5.43711,3.94507 9.26263,3.94507c3.82552,0 7.1441,-1.56171 9.26263,-3.94507c0.7847,-0.88279 0.66446,-2.09024 1.1449,-3.11743h47.85809c1.2735,0.01801 2.45804,-0.65108 3.10004,-1.75105c0.642,-1.09998 0.642,-2.46042 0,-3.5604c-0.642,-1.09998 -1.82655,-1.76906 -3.10004,-1.75105h-46.55457c-0.33054,-2.3557 -0.77431,-4.76531 -2.44842,-6.64868c-2.11854,-2.38335 -5.43711,-3.94507 -9.26263,-3.94507zM199.51563,130.65625c-3.82552,0 -7.1441,1.56172 -9.26263,3.94507c-2.11853,2.38335 -3.09674,5.42255 -3.09674,8.4143c0,2.99175 0.97821,6.03095 3.09674,8.4143c2.11853,2.38335 5.43712,3.94507 9.26263,3.94507c3.82552,0 7.1441,-1.56171 9.26263,-3.94507c2.11853,-2.38335 3.09674,-5.42255 3.09674,-8.4143c0,-2.99175 -0.97821,-6.03095 -3.09674,-8.4143c-2.11853,-2.38335 -5.43712,-3.94507 -9.26263,-3.94507zM26.48438,137.71875c2.05989,0 3.15538,0.64531 3.97955,1.57251c0.82417,0.9272 1.31732,2.30206 1.31732,3.72437c0,1.42231 -0.49315,2.79717 -1.31732,3.72437c-0.82417,0.92719 -1.91966,1.57251 -3.97955,1.57251c-2.05989,0 -3.15538,-0.64531 -3.97955,-1.57251c-0.82417,-0.9272 -1.31732,-2.30206 -1.31732,-3.72437c0,-1.42231 0.49315,-2.79717 1.31732,-3.72437c0.82417,-0.92719 1.91966,-1.57251 3.97955,-1.57251zM141.2569,137.71875c-1.95278,0 -3.53815,1.57847 -3.53815,3.53125v7.0625c0,1.95278 1.58537,3.53125 3.53815,3.53125c1.95278,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0.00353,-1.94925 -1.57494,-3.53125 -3.53125,-3.53125zM158.85797,137.71875c-1.95631,0 -3.53815,1.57847 -3.53815,3.53125v7.0625c0,1.95278 1.58537,3.53125 3.53815,3.53125c1.95278,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.94925 -1.57847,-3.53125 -3.53125,-3.53125zM176.53491,137.71875c-1.95632,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.57847,3.53125 3.53125,3.53125c1.95278,0 3.53815,-1.57847 3.53815,-3.53125v-7.0625c0,-1.94925 -1.58183,-3.53125 -3.53815,-3.53125zM199.51563,137.71875c2.05989,0 3.15538,0.64531 3.97955,1.57251c0.82417,0.9272 1.31732,2.30206 1.31732,3.72437c0,1.42231 -0.49315,2.79717 -1.31732,3.72437c-0.82417,0.92719 -1.91966,1.57251 -3.97955,1.57251c-2.05989,0 -3.15538,-0.64531 -3.97955,-1.57251c-0.82417,-0.9272 -1.31732,-2.30206 -1.31732,-3.72437c0,-1.42231 0.49315,-2.79717 1.31732,-3.72437c0.82417,-0.92719 1.91966,-1.57251 3.97955,-1.57251zM67.09375,162.4375c-1.01767,0.00095 -1.98547,0.44086 -2.65533,1.20697l-21.06336,24.07733c-0.92141,-0.20166 -1.76168,-0.56555 -2.76569,-0.56555c-3.82552,0 -7.1441,1.56171 -9.26263,3.94507c-2.11854,2.38335 -3.09674,5.42255 -3.09674,8.4143c0,2.99175 0.97821,6.03095 3.09674,8.4143c2.11854,2.38335 5.43711,3.94507 9.26263,3.94507c3.82552,0 7.1441,-1.56171 9.26263,-3.94507c2.11853,-2.38335 3.09674,-5.42255 3.09674,-8.4143c0,-2.99175 -0.97821,-6.03095 -3.09674,-8.4143c-0.01271,-0.01448 -0.03543,-0.02001 -0.04828,-0.03449l18.87012,-21.56683h16.05615c1.2735,0.01801 2.45804,-0.65108 3.10004,-1.75105c0.642,-1.09998 0.642,-2.46042 0,-3.5604c-0.642,-1.09998 -1.82655,-1.76906 -3.10004,-1.75105zM141.25,162.4375c-1.2735,-0.01801 -2.45804,0.65108 -3.10004,1.75105c-0.642,1.09998 -0.642,2.46042 0,3.5604c0.642,1.09998 1.82655,1.76906 3.10004,1.75105h16.05615l18.87012,21.56683c-0.01271,0.01448 -0.0355,0.02001 -0.04828,0.03449c-2.11854,2.38323 -3.09674,5.42255 -3.09674,8.4143c0,2.99175 0.97821,6.03095 3.09674,8.4143c2.11853,2.38335 5.43712,3.94507 9.26263,3.94507c3.82552,0 7.1441,-1.56171 9.26263,-3.94507c2.11853,-2.38335 3.09674,-5.42255 3.09674,-8.4143c0,-2.99175 -0.97821,-6.03095 -3.09674,-8.4143c-2.11853,-2.38335 -5.43712,-3.94507 -9.26263,-3.94507c-1.00401,0 -1.84427,0.3639 -2.76569,0.56555l-21.06336,-24.07733c-0.66987,-0.76611 -1.63766,-1.20602 -2.65533,-1.20697zM40.60938,194.21875c2.05989,0 3.15538,0.64532 3.97955,1.57251c0.82417,0.9272 1.31732,2.30206 1.31732,3.72437c0,1.42231 -0.49315,2.79717 -1.31732,3.72437c-0.82417,0.92719 -1.91966,1.57251 -3.97955,1.57251c-2.05989,0 -3.15538,-0.64532 -3.97955,-1.57251c-0.82417,-0.9272 -1.31732,-2.30206 -1.31732,-3.72437c0,-1.42231 0.49315,-2.79717 1.31732,-3.72437c0.82417,-0.92719 1.91966,-1.57251 3.97955,-1.57251zM185.39063,194.21875c2.05989,0 3.15538,0.64532 3.97955,1.57251c0.82417,0.9272 1.31732,2.30206 1.31732,3.72437c0,1.42231 -0.49315,2.79717 -1.31732,3.72437c-0.82417,0.92719 -1.91966,1.57251 -3.97955,1.57251c-2.05989,0 -3.15538,-0.64532 -3.97955,-1.57251c-0.82417,-0.9272 -1.31732,-2.30206 -1.31732,-3.72437c0,-1.42231 0.49315,-2.79717 1.31732,-3.72437c0.82417,-0.92719 1.91966,-1.57251 3.97955,-1.57251z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">DDoS Detection & Mitigation</h5>
                        <p class="card-text mb-3">Thunder TPS ™ (Threat Protection System) é a solução de defesa contra
                            DDoS de mais alto desempenho do setor. O TPS oferece detecção e mitigação de ataques DDoS
                            rápida, precisa e escalonável.</p>
                    </div>
                    <div class="card-footer">
                        <a class="producard" href="#" type="button" data-toggle="modal" data-target="#produto3">Ler Mais
                            <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                        height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#1c3ccd">
                                <path
                                    d="M88.28125,7.24182c-37.00916,0 -67.09375,30.12598 -67.09375,67.09375v17.65625h-10.59375c-5.82104,0 -10.59375,4.77271 -10.59375,10.59375v105.9375c0,5.86243 4.77271,10.59375 10.59375,10.59375h162.4375c5.82105,0 10.59375,-4.73132 10.59375,-10.59375v-23.76697c19.35291,-6.85559 34.99524,-25.42224 40.04382,-31.98816c1.94495,-2.5105 1.94495,-6.01416 0,-8.55225c-5.04859,-6.53833 -20.69092,-25.14636 -40.04382,-31.98816v-9.64197c0,-5.82104 -4.7727,-10.59375 -10.59375,-10.59375h-10.59375v-17.65625c0,-36.96777 -30.08459,-67.09375 -67.09375,-67.09375zM88.28125,14.30432h7.0625c1.20007,0 2.37256,0.13794 3.53125,0.20691v14.125c-1.15869,-0.11035 -2.33118,-0.20691 -3.53125,-0.20691h-7.0625c-1.20007,0 -2.37256,0.09656 -3.53125,0.20691v-14.125c1.15869,-0.06897 2.33118,-0.20691 3.53125,-0.20691zM77.6875,15.32507v14.41467c-20.19434,4.80029 -35.3125,22.95313 -35.3125,44.59582v17.65625h-14.125v-17.65625c0,-29.45007 21.36682,-53.9895 49.4375,-59.0105zM105.9375,15.32507c28.07068,5.021 49.4375,29.56043 49.4375,59.0105v17.65625h-14.125v-17.65625c0,-21.6427 -15.11816,-39.79553 -35.3125,-44.59582zM88.28125,35.49182h7.0625c21.43579,0 38.84375,17.44934 38.84375,38.84375v17.65625h-84.75v-17.65625c0,-21.39441 17.40796,-38.84375 38.84375,-38.84375zM10.59375,99.05432h162.4375c1.94495,0 3.53125,1.5863 3.53125,3.53125v7.72461c-2.33118,-0.41382 -4.68994,-0.66211 -7.10388,-0.66211c-23.50488,0 -44.38891,22.49793 -52.26526,32.13989c-1.5863,1.93115 -2.35877,4.3313 -2.35877,6.74524c0,2.35877 0.77246,4.73132 2.35877,6.70386c7.87634,9.64197 28.76038,32.09851 52.26526,32.09851c2.41394,0 4.77271,-0.24829 7.10388,-0.6759v21.8634c0,1.97254 -1.5863,3.53125 -3.53125,3.53125h-162.4375c-1.94495,0 -3.53125,-1.55871 -3.53125,-3.53125v-105.9375c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM169.45862,116.71057c2.41394,0 4.77271,0.27588 7.10388,0.77246c2.40015,0.52417 4.77271,1.31043 7.0625,2.26221c16.38721,6.74524 29.90527,22.91175 34.42969,28.7052c-4.52441,5.86243 -18.04248,22.04272 -34.42969,28.77417c-2.28979,0.96558 -4.66235,1.73804 -7.0625,2.26221c-2.33118,0.49658 -4.68994,0.78625 -7.10388,0.78625c-20.51159,0 -39.54724,-20.62195 -46.78906,-29.53284c-1.04834,-1.29663 -1.04834,-3.17261 0,-4.46924c7.24182,-8.91089 26.27747,-29.56043 46.78906,-29.56043zM169.45862,127.31812c-11.68347,0 -21.1875,9.50403 -21.1875,21.1875c0,11.68347 9.50403,21.1875 21.1875,21.1875c11.69727,0 21.1875,-9.50403 21.1875,-21.1875c0,-11.68347 -9.49023,-21.1875 -21.1875,-21.1875zM169.45862,134.38062c7.79358,0 14.125,6.33142 14.125,14.125c0,7.79358 -6.33142,14.125 -14.125,14.125c-7.77979,0 -14.125,-6.33142 -14.125,-14.125c0,-7.79358 6.34521,-14.125 14.125,-14.125zM35.3125,141.44312c-3.90369,0 -7.0625,3.15881 -7.0625,7.0625c0,3.90368 3.15881,7.0625 7.0625,7.0625c3.90369,0 7.0625,-3.15882 7.0625,-7.0625c0,-3.90369 -3.15881,-7.0625 -7.0625,-7.0625zM67.09375,141.44312c-3.90369,0 -7.0625,3.15881 -7.0625,7.0625c0,3.90368 3.15881,7.0625 7.0625,7.0625c3.90369,0 7.0625,-3.15882 7.0625,-7.0625c0,-3.90369 -3.15881,-7.0625 -7.0625,-7.0625zM98.875,141.44312c-3.90369,0 -7.0625,3.15881 -7.0625,7.0625c0,3.90368 3.15881,7.0625 7.0625,7.0625c3.90369,0 7.0625,-3.15882 7.0625,-7.0625c0,-3.90369 -3.15881,-7.0625 -7.0625,-7.0625zM17.65625,197.94312c-1.95874,0 -3.53125,1.57251 -3.53125,3.53125c0,1.95874 1.57251,3.53125 3.53125,3.53125h120.0625c1.95874,0 3.53125,-1.57251 3.53125,-3.53125c0,-1.95874 -1.57251,-3.53125 -3.53125,-3.53125zM151.84375,197.94312c-1.95874,0 -3.53125,1.57251 -3.53125,3.53125c0,1.95874 1.57251,3.53125 3.53125,3.53125h14.125c1.95874,0 3.53125,-1.57251 3.53125,-3.53125c0,-1.95874 -1.57251,-3.53125 -3.53125,-3.53125z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Application Delivery</h5>
                        <p class="card-text mb-3">Thunder® ADCs (Application Delivery Controllers) são soluções de alto
                            desempenho para acelerar e otimizar aplicativos críticos para garantir entrega e
                            confiabilidade.</p>
                    </div>
                    <div class="card-footer">
                        <a class="producard" href="#" type="button" data-toggle="modal" data-target="#produto4">Ler Mais
                            <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="card mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                        height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#1c3ccd">
                                <path
                                    d="M10.59375,7.0625c-5.82104,0 -10.59375,4.77271 -10.59375,10.59375v148.3125c0,5.82105 4.77271,10.59375 10.59375,10.59375h57.45178l22.34619,30.71912c8.62122,11.8352 22.19446,18.71838 36.81604,18.71838h42.375c13.87671,0 26.92578,-5.40723 36.38843,-15.57336c9.47644,-10.13855 14.13879,-23.33936 13.14563,-37.17468l-2.71741,-37.79541c-0.6759,-8.51086 -7.91772,-15.17334 -16.45618,-15.17334c-4.24854,0 -8.23498,1.61389 -11.26965,4.53821c-2.01392,-5.4624 -6.56592,-9.5592 -12.11109,-11.00757v-96.15759c0,-5.82104 -4.7727,-10.59375 -10.59375,-10.59375zM10.59375,14.125h155.375c1.94495,0 3.53125,1.5863 3.53125,3.53125v95.95068c-3.6416,0.73108 -6.81421,2.57947 -9.25574,5.14514c-1.02075,-2.9657 -2.78638,-5.57275 -5.0072,-7.62805c0.11035,-0.52417 0.13794,-1.08972 0.13794,-1.65527v-14.125c0,-2.71741 -1.06213,-5.18652 -2.75879,-7.0625c1.69666,-1.87598 2.75879,-4.34509 2.75879,-7.0625v-14.125c0,-2.71741 -1.06213,-5.18652 -2.75879,-7.0625c1.69666,-1.87598 2.75879,-4.34509 2.75879,-7.0625v-14.125c0,-5.82104 -4.7727,-10.59375 -10.59375,-10.59375h-28.25c-2.71741,0 -5.18652,1.06213 -7.0625,2.75879c-1.87598,-1.69666 -4.34509,-2.75879 -7.0625,-2.75879h-28.25c-2.71741,0 -5.18652,1.06213 -7.0625,2.75879c-1.87598,-1.69666 -4.34509,-2.75879 -7.0625,-2.75879h-28.25c-5.82104,0 -10.59375,4.77271 -10.59375,10.59375v14.125c0,2.71741 1.06213,5.18652 2.75879,7.0625c-1.69666,1.87598 -2.75879,4.34509 -2.75879,7.0625v14.125c0,2.71741 1.06213,5.18652 2.75879,7.0625c-1.69666,1.87598 -2.75879,4.34509 -2.75879,7.0625v14.125c0,5.82105 4.77271,10.59375 10.59375,10.59375h28.25c2.71741,0 5.18652,-1.06213 7.0625,-2.75879c1.87598,1.69666 4.34509,2.75879 7.0625,2.75879h21.1875v22.00134l-21.1875,-13.6698c-5.72449,-3.66919 -12.71802,-3.91748 -18.71838,-0.66211c-5.97278,3.28296 -9.53162,9.28332 -9.53162,16.09754c0,1.48975 0.4552,2.92432 1.33801,4.13818l2.26221,3.13123v0.04138l0.05518,0.08277c-0.04138,0.20691 -0.12414,0.40002 -0.12414,0.62073v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.46216,0 2.71741,-0.88281 3.25537,-2.15186l6.70386,9.21436h-52.33423c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-148.3125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM31.78125,35.3125h28.25c1.94495,0 3.53125,1.5863 3.53125,3.53125v14.125c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-28.25c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-14.125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM74.15625,35.3125h28.25c1.94495,0 3.53125,1.5863 3.53125,3.53125v5.57275c-4.93823,2.26221 -8.6488,6.71765 -9.89026,12.0835h-21.89099c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-14.125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM116.53125,35.3125h28.25c1.94495,0 3.53125,1.5863 3.53125,3.53125v14.125c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-14.30432c-1.80701,-7.83496 -8.85571,-13.6698 -17.22864,-13.6698h-0.24829v-3.98645c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM113.27588,49.8927c4.41406,0 8.23498,2.71741 9.77991,6.6073c0.53796,1.24146 0.81384,2.57947 0.81384,3.98645l-0.2345,70.3905c0,1.97254 1.5863,3.53125 3.53125,3.53125c1.93115,0 3.53125,-1.55871 3.53125,-3.53125v-5.90381c0,-0.35864 -0.01379,-0.70349 0.02759,-1.06213c0.13794,-0.35864 0.20691,-0.70349 0.20691,-1.08972v-0.15173c0.17932,-0.9104 0.469,-1.79321 0.85523,-2.60705c1.83459,-4.05542 5.93139,-6.8418 10.66272,-6.8418c3.66919,0 6.95215,1.64148 9.14539,4.3313c1.24145,1.51733 2.12427,3.4209 2.46911,5.50378l1.37939,8.41431c0.31726,1.80701 1.97254,3.07605 3.77954,2.93811c1.83459,-0.15173 3.25537,-1.69666 3.25537,-3.53125c0,-4.5658 2.92432,-8.48328 7.02112,-9.97302c0.95178,-0.34485 2.01392,-0.55176 3.07605,-0.59314c1.40698,0.06897 2.78638,0.38623 3.98645,0.97937c2.9657,1.37939 5.22791,4.13818 5.90381,7.5315l1.20007,5.93139v1.8346c0,1.94495 1.5863,3.50366 3.53125,3.50366c1.93115,0 3.53125,-1.55871 3.53125,-3.53125c0,-2.44153 0.95178,-4.7727 2.67602,-6.51074c1.76563,-1.72424 4.05542,-2.70361 6.53833,-2.70361c4.86926,0 9.03504,3.83472 9.42127,8.6488l2.68982,37.74023c0.84143,11.86279 -3.14502,23.20141 -11.22827,31.8916c-8.12463,8.71777 -19.146,13.49048 -31.05017,13.49048h-42.26465c-12.40076,0 -24.11182,-5.97278 -31.42261,-16.00098l-19.32532,-26.55334l-5.11755,-7.0625l-18.677,-25.67053c0,-4.20715 2.19324,-7.87634 5.86243,-9.89026c1.72425,-0.95178 3.55884,-1.40698 5.39343,-1.40698c2.12427,0 4.20715,0.59314 6.12451,1.79321l24.99463,16.08374v8.69019c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-98.6405c0,-1.48975 0.56555,-2.89673 1.13111,-4.17957c0.56555,-1.29663 1.37939,-2.45532 2.40014,-3.44848c1.83459,-1.76562 4.34509,-2.85535 7.0625,-2.89673c0.11035,-0.04138 0.17932,-0.04138 0.27588,-0.04138zM31.78125,63.5625h28.25c1.94495,0 3.53125,1.5863 3.53125,3.53125v14.125c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-28.25c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-14.125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM74.15625,63.5625h21.1875v21.1875h-21.1875c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-14.125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM130.65625,63.5625h14.125c1.94495,0 3.53125,1.5863 3.53125,3.53125v14.125c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-14.125zM31.78125,91.8125h28.25c1.94495,0 3.53125,1.5863 3.53125,3.53125v14.125c0,1.94495 -1.5863,3.53125 -3.53125,3.53125h-28.25c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-14.125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM74.15625,91.8125h21.1875v21.1875h-21.1875c-1.94495,0 -3.53125,-1.5863 -3.53125,-3.53125v-14.125c0,-1.94495 1.5863,-3.53125 3.53125,-3.53125zM130.65625,91.8125h14.125c1.94495,0 3.53125,1.5863 3.53125,3.53125v11.72486c-1.83459,-0.60693 -3.82092,-0.9104 -5.86243,-0.9104c-4.34509,0 -8.62121,0.84143 -11.79382,3.31055zM17.65625,148.3125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125zM35.3125,148.3125c-1.94495,0 -3.53125,1.57251 -3.53125,3.53125v7.0625c0,1.95874 1.5863,3.53125 3.53125,3.53125c1.94495,0 3.53125,-1.57251 3.53125,-3.53125v-7.0625c0,-1.95874 -1.5863,-3.53125 -3.53125,-3.53125z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">CGNAT & IPv6</h5>
                        <p class="card-text mb-3">Thunder® CGN (Carrier-Grade Networking) é uma solução premiada de alto
                            desempenho para CGNAT avançada, preservação de IPv4 e migração de IPv6 com proteção DDoS
                            integrada.</p>
                    </div>
                    <div class="card-footer">
                        <a class="producard" href="#" type="button" data-toggle="modal" data-target="#produto5">Ler Mais
                            <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="card mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="card-img-top" x="0px" y="0px" width="120"
                        height="120" viewBox="0 0 226 226" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#1c3ccd">
                                <path
                                    d="M95.34375,17.65625c-1.94925,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.582,3.53125 3.53125,3.53125c1.94925,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.95278 -1.582,-3.53125 -3.53125,-3.53125zM113,17.65625c-1.94925,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.582,3.53125 3.53125,3.53125c1.94925,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.95278 -1.582,-3.53125 -3.53125,-3.53125zM130.65625,17.65625c-1.94925,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.582,3.53125 3.53125,3.53125c1.94925,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.95278 -1.582,-3.53125 -3.53125,-3.53125zM45.90625,21.1875c-13.61062,0 -24.71875,11.10813 -24.71875,24.71875v28.25c-0.01801,1.2735 0.65108,2.45804 1.75105,3.10004c1.09998,0.642 2.46042,0.642 3.5604,0c1.09998,-0.642 1.76906,-1.82655 1.75105,-3.10004v-28.25c0,-9.79451 7.86174,-17.65625 17.65625,-17.65625h28.25c1.2735,0.01801 2.45804,-0.65108 3.10004,-1.75105c0.642,-1.09998 0.642,-2.46042 0,-3.5604c-0.642,-1.09998 -1.82655,-1.76906 -3.10004,-1.75105zM151.84375,21.1875c-1.2735,-0.01801 -2.45804,0.65108 -3.10004,1.75105c-0.642,1.09998 -0.642,2.46042 0,3.5604c0.642,1.09998 1.82655,1.76906 3.10004,1.75105h28.25c9.79451,0 17.65625,7.86174 17.65625,17.65625v28.25c-0.01801,1.2735 0.65108,2.45804 1.75105,3.10004c1.09998,0.642 2.46042,0.642 3.5604,0c1.09998,-0.642 1.76906,-1.82655 1.75105,-3.10004v-28.25c0,-13.61062 -11.10813,-24.71875 -24.71875,-24.71875zM74.10107,81.17047c-1.94754,0.03044 -3.50274,1.63193 -3.47607,3.57953v14.125c-0.01801,1.2735 0.65108,2.45804 1.75105,3.10004c1.09998,0.642 2.46042,0.642 3.5604,0c1.09998,-0.642 1.76906,-1.82655 1.75105,-3.10004v-14.125c0.01307,-0.9545 -0.36081,-1.87363 -1.03646,-2.54798c-0.67564,-0.67435 -1.5955,-1.04646 -2.54997,-1.03155zM116.47607,81.17047c-1.94754,0.03044 -3.50274,1.63193 -3.47607,3.57953v38.84375c0,3.94323 -3.11927,7.0625 -7.0625,7.0625h-3.53125c-1.2735,-0.01801 -2.45804,0.65108 -3.10004,1.75105c-0.642,1.09998 -0.642,2.46042 0,3.5604c0.642,1.09998 1.82655,1.76906 3.10004,1.75105h3.53125c7.75934,0 14.125,-6.36566 14.125,-14.125v-38.84375c0.01307,-0.9545 -0.36081,-1.87363 -1.03646,-2.54798c-0.67564,-0.67435 -1.5955,-1.04646 -2.54997,-1.03155zM151.78857,81.17047c-1.94754,0.03044 -3.50274,1.63193 -3.47607,3.57953v14.125c-0.01801,1.2735 0.65108,2.45804 1.75105,3.10004c1.09998,0.642 2.46042,0.642 3.5604,0c1.09998,-0.642 1.76906,-1.82655 1.75105,-3.10004v-14.125c0.01307,-0.9545 -0.36081,-1.87363 -1.03646,-2.54798c-0.67564,-0.67435 -1.5955,-1.04646 -2.54997,-1.03155zM24.66357,148.26422c-1.94754,0.03044 -3.50274,1.63193 -3.47607,3.57953v28.25c0,13.61062 11.10813,24.71875 24.71875,24.71875h28.25c1.2735,0.01801 2.45804,-0.65108 3.10004,-1.75105c0.642,-1.09998 0.642,-2.46042 0,-3.5604c-0.642,-1.09998 -1.82655,-1.76906 -3.10004,-1.75105h-28.25c-9.79451,0 -17.65625,-7.86174 -17.65625,-17.65625v-28.25c0.01307,-0.9545 -0.36081,-1.87363 -1.03646,-2.54798c-0.67564,-0.67435 -1.5955,-1.04646 -2.54997,-1.03155zM201.22607,148.26422c-1.94754,0.03044 -3.50274,1.63193 -3.47607,3.57953v28.25c0,9.79451 -7.86174,17.65625 -17.65625,17.65625h-28.25c-1.2735,-0.01801 -2.45804,0.65108 -3.10004,1.75105c-0.642,1.09998 -0.642,2.46042 0,3.5604c0.642,1.09998 1.82655,1.76906 3.10004,1.75105h28.25c13.61062,0 24.71875,-11.10813 24.71875,-24.71875v-28.25c0.01307,-0.9545 -0.36081,-1.87363 -1.03646,-2.54798c-0.67564,-0.67435 -1.5955,-1.04646 -2.54997,-1.03155zM84.57068,148.27801c-1.37202,0.0564 -2.58695,0.90299 -3.115,2.17058c-0.52804,1.26759 -0.27344,2.72634 0.65277,3.74012c0,0 10.73508,11.78003 30.89154,11.78003c20.15646,0 30.89154,-11.78003 30.89154,-11.78003c0.838,-0.9437 1.10883,-2.26281 0.71044,-3.46035c-0.39839,-1.19754 -1.40545,-2.09154 -2.64177,-2.34517c-1.23632,-0.25363 -2.51403,0.17164 -3.35175,1.11559c0,0 -8.1006,9.40747 -25.60846,9.40747c-17.50786,0 -25.60846,-9.40747 -25.60846,-9.40747c-0.70461,-0.81622 -1.74352,-1.26582 -2.82086,-1.22077zM95.34375,194.21875c-1.94925,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.582,3.53125 3.53125,3.53125c1.94925,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.95278 -1.582,-3.53125 -3.53125,-3.53125zM113,194.21875c-1.94925,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.582,3.53125 3.53125,3.53125c1.94925,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.95278 -1.582,-3.53125 -3.53125,-3.53125zM130.65625,194.21875c-1.94925,0 -3.53125,1.57847 -3.53125,3.53125v7.0625c0,1.95278 1.582,3.53125 3.53125,3.53125c1.94925,0 3.53125,-1.57847 3.53125,-3.53125v-7.0625c0,-1.95278 -1.582,-3.53125 -3.53125,-3.53125z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Service Analytics & Management</h5>
                        <p class="card-text mb-3">O Harmony ™ Controller oferece gerenciamento e análise centralizados
                            para serviços de aplicativos seguros em nuvens públicas, privadas e híbridas.</p>
                    </div>
                    <div class="card-footer">
                        <a class="producard" href="#" type="button" data-toggle="modal" data-target="#produto6">Ler Mais
                            <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL PRODUTOS-->

    <div id="modalprod">
        <div class="modal fade" id="produto1" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Convergent Firewall</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            O desempenho ultra-alto e a escala do Thunder CFW permitem que as operadoras móveis se preparem para as demandas emergentes de hiperescala de 5G e IoT.
                            A consolidação de vários recursos de segurança garante proteção contra ameaças 4G/LTE, bem como ameaças de segurança 5G emergentes.
                            A consolidação de funções ajuda a obter uma latência de rede mais baixa em comparação com produtos pontuais individuais.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produto2" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">SSL Insight</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Permita que seus dispositivos de segurança detectem e bloqueiem ameaças ocultas.
                            Aumente toda a sua infraestrutura de segurança, incluindo dispositivos em linha, fora de banda e habilitados para ICAP.
                            Obtenha controle total sobre a seleção de cifras para garantir a segurança contínua.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produto3" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">DDoS Detection & Mitigation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Aprendizagem adaptável em tempo real e descoberta de serviços.
                            Direção de tráfego autônoma com protocolos de roteamento BGP, ISIS e OSFP integrados.
                            Mecanismo de reconhecimento de padrão de ataque de dia zero (ZAPR).
                            Interação de inteligência distribuída com Thunder ADC, Thunder CGN, Thunder CFW.
                            Elimina intervenções manuais, resposta rápida.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produto4" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Application Delivery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Descoberta de serviço automatizada em ambientes Kubernetes usando Thunder Kubernetes Connector (TKC) ou ferramentas de terceiros, como HashiCorp NIA com Consul.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produto5" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">CGNAT & IPv6</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Resolva a exaustão de endereços IPv4 e estenda a vida útil de uma infraestrutura de rede IPv4 com CGNAT para garantir que aplicativos e serviços críticos estejam sempre disponíveis e confiáveis.
                            Gerencie a transição IPv6 com funções de tradução e encapsulamento, como NAT64/DNS64, DS-Lite, Lw4o6, 6rd, 464XLAT, MAP-T e MAP-E.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produto6" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Service Analytics & Management</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Gerenciamento centralizado para o portfólio Thunder da A10 Networks, incluindo produtos ADC, SSLi, CFW e CGN. Simplifique as tarefas de gerenciamento, ao mesmo tempo em que oferece controles abrangentes sobre os dados.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--SERVIÇOS-->

    <div id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" src="imagens/Servicos/servicos.png" alt="">
                </div>
                <div class="col-6 pp">
                    <h1>SERVIÇOS</h1>
                    <p>A UniSoft fornece suporte técnico para produtos e uma variedade de serviços de suporte projetados
                        para garantir que nossas soluções sejam instaladas rapidamente, configuradas facilmente e operem
                        de forma confiável em sua rede. O modelo de suporte follow-the-sun da TAC garante que podemos
                        resolver seus problemas a qualquer hora do dia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col imgserv">
                    <img class="img-fluid" src="imagens/Servicos/ServicosGerenciados.jpg" alt="">
                    <h2>SERVIÇOS GERENCIADOS</h2>
                    <p>Tenha tudo que sua empresa precisa próximo de vocÊ quando for necessário, mantenha-se longe de
                        problemas e ataques cibereticos com a melhor equipe do Brasil e softwares altamente potentes</p>
                </div>
                <div class="col imgserv">
                    <img class="img-fluid" src="imagens/Servicos/ServicosProfissionais.jpg" alt="">
                    <h2>SERVIÇOS PROFISSIONAIS</h2>
                    <p>Serviço e suporte disponíveis 24 horas por dia, 7 dias por semana para todo tipo de problemas
                        inclusos no pacote, tenha treinamnto e uma equipe pronta para agir em situações de riscos</p>
                </div>
            </div>
            <div class="row tipserv mt-5">
                <div class="col mb-5">
                    <a href="#" type="button" data-toggle="modal" data-target="#servico1"><img class="img-fluid mb-1"
                            src="imagens/Servicos/Servicos1.png" alt=""></a>
                    <h4 class="servsubtt">INSTALAÇÃO</h4>
                    <a href="#" type="button" data-toggle="modal" data-target="#servico1"><button type="button"
                            class="btn btn-outline-primary">Saiba mais</button></a>
                </div>
                <div class="col mb-5">
                    <a href="#" type="button" data-toggle="modal" data-target="#servico2"><img class="img-fluid"
                            src="imagens/Servicos/Servico2.png" alt=""></a>
                    <h4 class="servsubtt">MANUTENÇÃO</h4>
                    <ahref="#" type="button" data-toggle="modal" data-target="#servico2"><button type="button"
                            class="btn btn-outline-primary">Saiba mais</button></ahref=>
                </div>
                <div class="col mb-5">
                    <a href="#" type="button" data-toggle="modal" data-target="#servico3"><img class="img-fluid mb-2"
                            src="imagens/Servicos/Servicos3.png" alt=""></a>
                    <h4 class="servsubtt">TREINAMENTOS</h4>
                    <a href="#" type="button" data-toggle="modal" data-target="#servico3"><button type="button"
                            class="btn btn-outline-primary">Saiba mais</button></a>
                </div>
                <div class="col mb-5">
                    <a href="#" type="button" data-toggle="modal" data-target="#servico4"><img class="img-fluid"
                            src="imagens/Servicos/Servico4.png" alt=""></a>
                    <h4 class="servsubtt">RELATÓRIOS</h4>
                    <a href="#" type="button" data-toggle="modal" data-target="#servico4"><button type="button"
                            class="btn btn-outline-primary">Saiba mais</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL SERVIÇOS-->

    <div class="modalservcos">
        <div class="modal fade" id="servico1" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">INSTALAÇÃO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fas fa-long-arrow-alt-right"></i> Implantação de sistemas e ferramentas de Cyber
                            Security, conforme a necessidade de cada cliente. <br><br> <i
                                class="fas fa-long-arrow-alt-right"></i> Encontre a solução mais adequada ao seu
                            ambiente e requisitos de operação da sua empresa.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20serviço,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="servico2" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">MANUTENÇÃO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fas fa-long-arrow-alt-right"></i> Manutenção dos softwares contratados pela IB
                            Tecnologia provendo suporte para otimização, atualizações ou mitigar eventuais problemas.
                            <br><br> <i class="fas fa-long-arrow-alt-right"></i> Os sistemas evoluem constantemente,
                            mantenha suas ferramentas sempre atualizadas e funcionais.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20serviço,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="servico3" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">TREINAMENTOS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fas fa-long-arrow-alt-right"></i> Treinamento de administração e operação das
                            ferramentas, conforme o perfil do usuário. <br><br> <i
                                class="fas fa-long-arrow-alt-right"></i> Os usuários são uma parte importante do Cyber
                            Security, podem ser o elo mais fraco da corrente se não foram bem orientados no uso das
                            aplicações e ferramentas da sua empresa.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20serviço,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="servico4" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">RELATÓRIOS ANALÍTICOS E LAUDOS PERICIAIS
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fas fa-long-arrow-alt-right"></i> Relatórios gerencias analíticos extraídos do uso
                            dos sistemas, bem como sobre incidentes de segurança. <br><br> <i
                                class="fas fa-long-arrow-alt-right"></i> Relatórios devem conter informações úteis, mas
                            muitas vezes são complexos e poluídos. <br><br> <i class="fas fa-long-arrow-alt-right"></i>
                            A aplicação de filtros e classificação de dados permite traduzir dados em informação e
                            conhecimento que trazem significado para os gestores. <br><br> <i
                                class="fas fa-long-arrow-alt-right"></i> Laudos periciais assinados por profissionais
                            legalmente habilitados para fornecer documento com força jurídica.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20serviço,%20por%20favor!"><button type="button" class="btn btn-primary btnsub">CONTRATAR</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--CIBERSEGURANÇA-->

    <div id="ciberseguranca">
        <div class="bannerlgpd">
            <img class="img-fluid" src="imagens/Banner/BannerLgpd.png" alt="">
            <div class="container">
                <h1 class="mb-4 mt-5">A SUA EMPRESA ESTÁ EM CONFORMIDADE COM A LGPD?</h1>
                <p>Descubra se a sua empresa está dentro dos padrões de segurança exigidos pela Lei Geral De Proteção De
                    Dados.</p>
            </div>
        </div>
        <div class="container">
            <div class="introducao">
                <h2 class="mb-3">MAS AFINAL, O QUE É A <span>LEI DE PROTEÇÃO DE DADOS</span> E COMO ELA ME AFETA?</h2>
                <div class="media">
                    <img class="align-self-center mr-3 img-fluid" src="imagens/LgpdIlustracao.png"
                        alt="Imagem de exemplo genérica">
                    <div class="media-body">
                        <p class="mt-5">A Lei Geral de Proteção de Dados (LGPD) – Lei nº 13.709, sancionada no Brasil em
                            Agosto de 2018, tem previsão para entrar em vigor em 14 de Agosto de 2020 e afetará a
                            maneira como as empresas capturam, manipulam e armazenam os dados de seus clientes,
                            funcionários diretos e terceirizados.</p>
                    </div>
                </div>
            </div>
            <div class="row cardlgpd">
                <div class="col">
                    <h4 class="mb-4 titulolgpd1">DADO<br>PESSOAL</h4>
                    <p>Um dado pessoal pode ser definido como qualquer informação sobre uma pessoa que, se em conjunto
                        ou isolada, tornem possível sua identificação.</p>
                </div>
                <div class="col">
                    <h4 class="mb-4 titulolgpd">DADO PESSOAL SENSÍVEL</h4>
                    <p>Está relacionado à origem étnica ou racial, crenças religiosas, filiação sindical, direcionamento
                        político e orientação sexual.</p>
                </div>
                <div class="col">
                    <h4 class="mb-4 titulolgpd">DADO PESSOAL ANONIMIZADO</h4>
                    <p>Dado relacionado ao titular que não possa ser identificado, considerando a utilização de meios
                        técnicos razoáveis e disponíveis na ocasião de seu tratamento.</p>
                </div>
            </div>
        </div>
        <div id="backlgpd">
            <div class="container">
                <div class="fimlgpd">
                    <h1 class="mb-4">GARANTA A PRIVACIDADE DOS DADOS DA SUA EMPRESA</h1>
                    <p class="mb-5">A Unisoft auxilia sua empresa a se adequar à lei e adotar as melhores práticas no
                        controle de informações. Trabalhamos com consultores e parceiros especializados e altamente
                        capacitados para orientar todos os processos para sua organização estar de acordo com a LGPD.
                    </p>
                    <a href="https://wa.me/+5511974551685?text=Olá!%20Gostaria%20de%20contratar%20um%20produto,%20por%20favor!"><button type="button" class="btn btn-primary btn-lg mb-5">ENTRAR EM CONTATO <i
                                class="fas fa-angle-right fa-lg"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <!--CONTATO-->

    <div id="contato">
        <div class="container">
            <div class="cabeca">
                <h1>CONTATO</h1>
                <h3>Fale Conosco</h3>
                <p>Para falar com um de nossos representantes sobre informações de produtos, demonstrações de produtos
                    ou para obter respostas para suas dúvidas, preencha o formulário abaixo e entraremos em contato em
                    até 1 dia útil.</p>
            </div>

            <form class="needs-validation" novalidate method="post">
                <div class="form-row">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Primeiro Nome"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe seu Nome.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom02" class="col-sm-2 col-form-label">Sobrenome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe seu Sobrenome.
                        </div>
                    </div>
                    <br><br><br>
                    <label for="validationCustom03" class="col-sm-2 col-form-label">País</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom03" placeholder="País" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um País.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom04" class="col-sm-2 col-form-label">Razão Social</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Razão Social"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe uma Razão Social.
                        </div>
                    </div>
                    <br><br><br>
                    <label for="validationCustom05" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="validationCustom05" placeholder="Seu Email"
                            required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um e-mail valido.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom06" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="validationCustom06"
                            placeholder="Telefone para contato" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um número para contato.
                        </div>
                    </div>
                    <br><br><br>
                    <label for="validationCustom07" class="col-sm-2 col-form-label">Interesse</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom07"
                            placeholder="Produto ou Serviço de Interesse" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, informe um serviço ou produto para agilizar nosso contato.
                        </div>
                    </div>
                    <br><br>
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Comentários</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01">
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label">
                            Eu gostaria de solicitar uma demonstração
                        </label>
                    </div>
                    <div class="form-group mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Autorizo explicitamente a coleta e utilização dos meus dados pessoais inseridos no
                                formulário de registro acima, pela AO UNISOFT, para me contatar e fornecer informações
                                sobre os produtos da UNISOFT e serviços, incluindo ofertas promocionais personalizadas e
                                atualizações como white papers, webcasts, vídeos, eventos e outros materiais de
                                marketing e ofertas relacionadas, de acordo com a Política de Privacidade da UNISOFT.
                            </label>
                            <div class="invalid-feedback">
                                Você deve concordar, antes de continuar.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary formm" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!--FOOTER-->

    <footer class="footer">
        <div class="container">
            <div class="row infpp mx-auto">

                <!--INFORMAÇÕES DA EMPRESA-->

                <div class="col-md-auto imgh">
                    <a href="#"><img src="imagens/emblema.png" alt="..." class="img-fluid"></a>
                </div>
                <div class="col-md-auto opop">
                    <p class="mb-4 p1">SÃO PAULO</p>
                    <p class="endd enddd">Av. Professor Luiz Ignácio Anhaia Mello, 1363 <br> Vila Prudente - SP</p>
                </div>
                <div class="col-md-auto opop">
                    <p class="mb-4 p1">RIO DE JANEIRO</p>
                    <p class="endd enddd">Av. Rio Branco, 257 – 2º Andar <br> Centro – RJ</p>
                </div>
                <div class="col-md-auto opop1">
                    <p class="mb-4 p1">SANTA CATARINA</p>
                    <p class="endd">Avenida Hironildo Conceição dos Santos, 135 <br> Porto Belo - SC</p>
                </div>
            </div>

            <div class="row mx-auto">

                <div class="footer-col col-md-3">
                    <h4>EMPRESA</h4>
                    <ul>
                        <li><a href="#empresa">Sobre Nós</a></li>
                        <li><a href="#essencia">Essência</a></li>
                        <li><a href="https://forms.gle/ZK4Cx8Qqi5qiiyfU7" target="_blank">Trabalhe Conosco</a></li>
                        <li><a href="" type="button" data-toggle="modal" data-target="#ExemploModalCentralizado">Portal
                                do Usuário</a></li>
                    </ul>
                </div>

                <!--MENU DO SITE-->

                <div class="footer-col col-md-3">
                    <h4>SERVIÇOS</h4>
                    <ul>
                        <li><a href="#produtos1">Produtos</a></li>
                        <li><a href="#servicos">Serviços De Segurança</a></li>
                        <li><a href="#ciberseguranca">LGPD</a></li>
                        <li><a href="#backlgpd">Orçamentos</a></li>
                    </ul>
                </div>

                <!--SUPORTE-->

                <div class="footer-col col-md-3">
                    <h4>SUPORTE</h4>
                    <ul>
                        <li><a href="politica.html" target="_blank">Política de Privacidade</a></li>
                        <li><a href="termos.html" target="_blank">Termos e Condições</a></li>
                        <li><a href="#contato">Suporte Técnico</a></li>
                    </ul>
                </div>

                <!--REDES SOCIAIS-->

                <div class="footer-col col-md-3">
                    <h4>REDES SOCIAIS</h4>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/school/uninove/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/Ryan-STT/Unisoft"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
    </footer>

</body>

</html>