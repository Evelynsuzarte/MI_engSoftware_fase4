<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ ('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ ('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    
    <title>Menu</title>
  </head>

  <body class="body-menu"  hrfe = '/sessaoEnfChef'>
    
    <!----------Hearder------------>
    @include('layouts.navbar-menu')
    <!----------End Hearder-------->

        <div class="container-2">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-user-injured"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('cadastroPaciente') }}">Cadastrar paciente</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-clipboard-list"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="#">Cadastrar prontuário</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('cadastroAgendamento') }}">Cadastrar agendamentos</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-user-nurse"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('cadastroPlantonista') }}">Cadastrar plantonistas</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-capsules"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('cadastroMedicamento') }}">Cadastrar medicamentos</a></h4>
                    </div>
                </div> 

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-user-injured"></i>
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('pacientes') }}">Pacientes e prontuários</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <div><i class="fas fa-clipboard"></i></div>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('listaAgendamentos') }}">Listagem de agendamentos</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-user-nurse"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('listagemPlantonistas') }}">Plantonistas</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('responsaveis') }}">Responsáveis pela aplicação de medicamentos</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-briefcase-medical"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="{{ route('listaMedicamento') }}">Medicamentos cadastrados</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-procedures"></i>
                            <i class="fas fa-plus"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="#">Cadastrar leito</a></h4>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="card-menu text-center card-options">
                        <div class="card-options-icon options-icon">
                            <i class="fas fa-procedures"></i>
                            <i class="fas fa-minus"></i>
                        </div>
                        <h4 class="card-options_title"><a
                            href="#">Remover leito</a></h4>
                    </div>
                </div> 
            </div>  
        </div>
  </body>
  </html>