$('.edit').click(function(){

    $('.change').html(
        '<div class="change">'+
            '<form id="register">'+
                '<div class="row">'+
                    '<div class="col-lg-12">'+
                        '<label>Nome</label> <br>'+
                        '<input id="fnome" name="fnome" type="text" maxlength="50" required>'+
                    '</div>'+
                '</div>'+

                '<div class="row">'+
                    '<div class="col-lg-4">'+
                        '<label>Data de Nascimento</label> <br>'+
                        '<input id="fnascimento" name="fnascimento" type="date" required>'+
                    '</div>'+
                    '<div class="col-lg-4">'+
                        '<label>CPF</label> <br>'+
                        '<input id="fcpf" name="fcpf" type="text" required maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">'+
                        '</div>'+
                        '<div class="col-lg-4">'+
                            '<div class="sex-form">'+
                                '<label>Sexo</label> <br>'+
                                '<input id="MASCULINO" name="fsexo" value="Masculino" type="button">'+
                                '<input id="FEMININO" name="fsexo" value="Feminino" type="button">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+

                    '<div class="row">'+
                        '<div class="col-lg-8">'+
                            '<label>Email</label> <br>'+
                            '<input id="femail" name="femail" type="email" maxlength="50" required>'+
                        '</div>'+
                    '</div>'+
                    '</form>'+
                    '</div>'
                        
    );
})