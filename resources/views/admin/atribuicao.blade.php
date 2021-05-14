<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="{{ ('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ ('bootstrap/css/bootstrap.css') }}" rel="stylesheet"> 
    
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">

    <script src="{{ ('js/editarAtribuicao.js') }}" defer></script>

    <title>Atribuição do usuário</title>
    
  </head>
  <body>
    <!----------Hearder------------>
    @include('layouts.navbar-adm')
    <!----------End Hearder-------->
    <h1>ALTERAR ATRIBUIÇÃO</h1>
        <div class="container-1">
            <div class="box">
                <!--Buscar funcionário-->
                <div class="content-center">
                    <h3>BUSCAR FUNCIONÁRIO</h3>
                    <div class="container">
                    <div class="row">
                        <div class="col-lg">
                                @if ($errors->any()) <!--Verificando se existe qualquer erro -->
                                    <div class="msg-error">
                                        <ul>
                                            @foreach ($errors->all() as $error) <!--Percorre todos os erros-->
                                                <li>{{ $error }}</li> <!--Obtem o erro -->
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('msg')) <!-- Verifica se a mensagem de erro foi instanciada -->
                                <div class="msg-sucess">
                                    {{session('msg')}} <!--Obtem mensagem de erro -->
                                </div>
                                @endif
                                @if (session('msg-error')) <!-- Verifica se a mensagem de erro foi instanciada -->
                                <div class="msg-error">
                                    {{session('msg-error')}} <!--Obtem mensagem de erro -->
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <form class="search-bar" action="/lupinha" method="GET"> <!--Área onde busca um usuário-->
                        <input name="cpf_user" id="cpf_user" type="text" placeholder="Informe o CPF" required maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                        <button type="submit" id="busca_user">
                            <i class="fas fa-search"></i>
                        </button>
                    </form> <!--Fim da área onde se busca um usuário-->
                </div>
                <div id="user_Data" >
                     <!--Infomações do funcionário-->
                    @if(isset($user))
                        <h3>Funcionário</h3> <br>   
                        <div class="box-gray">
                            <p>{{$user["Nome"]}}</p>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="box-gray">
                                    <p>CPF: {{$user["CPF"]}}</p>
                                </div>
                            </div>
                            @if(isset($user2))
                            <div id="corenUser" class="col-lg">
                                <div class="box-gray">
                                    <p>COREN: {{$user2["COREN"]}}</p>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg">
                                <div class="box-gray">
                                    <p id="atribuicaoAtual">{{$user["Atribuicao"]}}</p>
                                </div>
                            </div>
                        </div>
                        <!--Fim da área de informações do funcionário-->
                        <!--Alterar atribuição do funcionário, se for estagiário-->
                        <div class="container-atribution"> 
                            <form method="POST" action='/alterarAtribuicao'>
                            @csrf
                                <input type="hidden" name="cpf" value='{{$user["CPF"]}}'><!--Usado para obter o CPF pesquisado pela função de busca-->
                                <div class="row"> 
                                    <div class="col-lg-4"> 
                                        <label for="novaAtribuicao">Nova atribuição</label> <br>
                                        <select id="novaAtribuicao" name="novaAtribuicao"> <!--Select com as opções de atribuição-->
                                            <option name="enfermeiroChefe" value="enfermeiroChefe">Enfermeiro chefe</option>
                                            <option name="enfermeiro" value="enfermeiro">Enfermeiro</option>
                                        </select>
                                    </div>
                                    @if($user["Atribuicao"] == "Estagiario") <!--Se a atribuição do funcionário for "Estagiário", o Campo do coren aparece"-->
                                    <div id="corenDiv" class="col-lg-4">
                                        <label for="fcoren">Coren</label> <br>    <!--Label para o Coren-->                                
                                        <input placeholder="Informe o Coren" id="fcoren" name="fcoren" type="text"  maxlength="14" pattern="\d{2}\-\d{3}.\d{3}.\d{3}" required> <!--Campo de Input para digitar o Coren-->
                                    </div>
                                    @endif
                                </div>
                                <button type="submit" class="container-button btn-white">Alterar</button> <!--Botão para enviar as informações do form de alterar atribuição-->
                            </form> 
                        </div>
                    @endif
                </div>        
            </div>
        </div>
  </body>
</html>