<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="{{ 'css/style.css' }}" rel="stylesheet">
    <link href="{{ 'bootstrap/css/bootstrap.css' }}" rel="stylesheet">

    <title>Medicamentos cadastrados</title>
</head>

<body>
    <!----------Hearder------------>
    @include('layouts.navbar')
    <!----------End Hearder-------->

    <!----------Botão de donwload------------>
    <div id="screen-icon">
        <form class="download-icon">
            <button>
                <i class="fas fa-download"></i>
            </button>
        </form>
    </div>
    <!--------Fim do botão de donwload-------->

    <div class="container-1" id="medicament-list">
        <h1>MEDICAMENTOS CADASTRADOS</h1>

        <!-------------- Medicamento  -------------->
        @if(isset($m[0]))
        <div class="box-white">
            <!----- Nome do medicamento----->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Nome</label> <br>
                    <div class="box-blue">
                        {{$m[0]}}
                    </div>
                </div>
            </div>
            <div class="row">
                <!----- Data de validade do medicamento----->
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <label><nobr>Data de validade</nobr></label> <br>
                    <div class="box-gray">
                        {{$m[1]}}
                    </div>
                </div>
                <!-----Quantidade do medicamento----->
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <label><nobr>Em estoque</nobr></label> <br>
                    <div class="box-gray">
                        {{$m[2]}}
                    </div>
                </div>
                <!-----Fabricante do medicamento----->
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <label>Fabricante</label> <br>
                    <div class="box-gray">
                        {{$m[3]}}
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-------------- Fim do medicamento  -------------->
    </div>
</body>

</html>
