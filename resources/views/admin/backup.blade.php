<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ 'css/style.css' }}" rel="stylesheet">
    <link href="{{ 'bootstrap/css/bootstrap.css' }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">

    <script src="{{ 'js/backup.js' }}" defer></script>
    {{$i = 0}}
    <title>BACKUP</title>
</head>

<body>
    <!----------Hearder------------>
    @include('layouts.navbar-adm')
    <!----------End Hearder-------->

    <h1>Backup do Sistema</h1>
    <section>
        <div class="container-1">
            <div class="box">
                <!--Caixa onde as opções se encontram-->
                <div class="row item-center">
                    <div class="col-lg">
                        <!--Botão onde, quando clicado, o backup deve ser feito na hora-->
                        <form action="/baixarBd" method="get">
                            <input class="btn-white" type="submit" name="realBack" id="realBack" value="Realizar Backup">
                        </form>
                    </div>
                    <div class="col-lg">
                        <!--Botão onde, quando clicado, o backup deve ser agendado-->
                        <input class="btn-white" type="button" name="agenback" id="agenBack" value="Agendar Backup">
                    </div>
                </div>
                <!--Area onde o agendamento do backup é feita-->
                <div class="hide" id="AgendamentoBackup">
                    <div class="box-backup item-center">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3>Agendamento de Backup</h3>
                            </div>
                        </div>
                        <br>
                        <br>
                        <form method="post" action="/agendarBd">
                        @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <!--Botão para marcar caso o agendamento seja de um backup automático-->
                                    <label for="alwaysCheck">Automático</label> <br>
                                    <input type="checkbox" name="alwaysCheck" id="alwaysCheck" checked>
                                </div>
                                <div class="col-lg-4">
                                    <!--Horario em que o backup será feito-->
                                    <label for="fhorario">Horario</label><br>
                                    <input name="fhorario" type="time" id="fhorario" required>
                                </div>
                                <div class="col-lg-4 hide" id="dataDiv">
                                    <!--Data em que o backup será feito. Se for um backup automático, está parte não aparece-->
                                    <label for="date">Data</label> <br>
                                    <input type="date" name="date" id="date">
                                </div>
                            </div>
                            <div class="row">
                                <!--Botão para confirmar o agendamento de um backup-->
                                <input class="container-button btn-white" type="submit" value="Confirmar"
                                    id="confirmarBackup">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-1">
            <!--Area onde de encontra os backups que já foram agendados-->
            <div class="box" id="ListaBackup">
                <h3>Backups Agendados</h3>
                <!--Tabela com os backups-->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <!--Header da tabela-->
                                <th scope="col">Automático</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Data</th>
                                <th scope="col">IP</th>
                                <th scope="col">ID</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = count($info)/5 - 1; $i >= 0;$i--)
                                <!--Backup-->
                            <tr id="codigoDoBackup">
                                @if($info["auto".$i] == 1)
                                <td>Sim</td>
                                @else
                                <td>Não</td>
                                @endif
                                <td>{{$info["hora".$i]}}</td>
                                <td>{{$info["data".$i]}}</td>
                                <td>{{$info["ip".$i]}}</td>
                                <td>{{$info["id".$i]}}</td>
                                <td>
                                <form action="RagendarBd" method="get">
                                <button class="btn-blue" type="submit" id="removeBackup-codigoDoBackup"
                                    name="removerAB" value='{{$info["id".$i]}}'>Remover</button>
                                </form>    
                                </td>
                            </tr>
                            <!--Fim de um Backup-->
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
