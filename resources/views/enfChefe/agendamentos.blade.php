

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ ('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ ('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    {{$i = 0}}
    <title>Listagem de agendamentos</title>
    
  </head>
  <body>
    <!----------Hearder------------>
    @include('layouts.navbar')
    <!----------End Hearder-------->
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
    <div class="container">
        <div id="screen-icon"> <!-- Icone de Download Em Telas -->
            <form class="download-icon">
                <button>
                    <i class="fas fa-download"></i>
                </button>
            </form>
        </div>
    </div>

        <div class="container-1">
    
            <h1 class="title-download">LISTAGEM DE AGENDAMENTOS E MEDICAMENTOS </h1>

            <!---------------------Agendamento--------------------->
            @while(isset($infos["medicamento".$i]))
            <div class="box-scheduling" id="scheduling">
                    <div class="row">
                        <!---------------------Hora--------------------->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2 text-center">
                            <div class="box-gray">
                                {{$infos["hora".$i]}}
                             </div>
                        </div>
                        <!---------------------Data--------------------->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2 text-center">
                            <div class="box-gray">
                                {{$infos["data".$i]}}
                            </div>
                        </div>
                        <!---------------------Nome do Medicamento--------------------->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="box-white">
                                {{$infos["medicamento".$i]}}
                             </div>
                        </div>
                        <!---------------------Posologia--------------------->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                            <div class="box-white">
                                {{$infos["posologia".$i]}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <!---------------------Nome da Paciente--------------------->
                    <form action="/prontuario" method="get">
                        <input type="hidden" name='cpf' value='{{$identificaP}}'>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <button type="submit" class="btn-Patient">{{$infos["paciente".$i]}}</button>
                        </div>
                    </form>
                        <!---------------------Leito da Paciente--------------------->
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="box-blue">
                                Leito: {{$infos["leito".$i]}}
                            </div>
                        </div>
                    </div>
                    {{$i++}}
            </div>
            @endwhile
            <!---------------------Fim de agendamento--------------------->
        </div>
  </body>
  </html>