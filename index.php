<?php 
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Cadastro</title>
        <!----------------------------------------------------Meta tags---------------------------------------------------->
        <meta charset="utf-8">
        <meta charset="viewport" content="width=device-width, initial-scale =1, shrink-to-fit = no">

        <!----------------------------------------------------Arquivos FRONT-END ---------------------------------------------------->
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--font awsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--Página CSS-->
        <link rel="stylesheet" type="text/css" href="index1.css">
    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12">

                    <form class="col-12 border shadow formStyle bg-light rounded mt-5" action="valores.php" method="post">

                        <div class="form-row p-4">

                        <?php if(isset($_GET['dadosEnviados']) && $_GET['dadosEnviados'] == 'true') { ?>

                            <div class="text-success">
                                Dados enviados com sucesso!
                            </div>

                            <?php } ?>

                            <fieldset class="col-md-12 mt-2">
                                <legend class="text-center">Informações Pessoais</legend>

                                <div class="input-group col-md-6">
                                    <label class="col-md-12" for="name"><small>Nome Completo*</small></label>
                                        <div class="input-group-prepend">
                                            <i class="fas fa-solid fa-user input-group-text d-flex"></i>
                                        </div>

                                        <input class="form-control" type="text" id="name" placeholder="Insira o seu nome" name="nome" required>
                                </div>

                                <!---------------------------------------------------------------------------------------------------->

                                <div class="input-group col-md-12 mt-2">
                                    <label class="col-md-12" for="email"><small>Email*</small></label>
                                    <div class="input-group-prepend">
                                        <i class="fas fa-solid fa-envelope input-group-text d-flex"></i>
                                    </div>
                                    <input class="form-control" type="email" id="email" placeholder="fulano@gmail.com" name="email" required>
                                </div>

                                <!---------------------------------------------------------------------------------------------------->

                                <div class="input-group col-md-4">
                                    <label class="col-md-12" for="telefone"><small>Telefone*</small></label>
                                    <div class="input-group-prepend">
                                        <i class="fas fa-solid fa-phone input-group-text d-flex"></i>
                                    </div>
                                    <input class="form-control" type="text" id="telefone" placeholder="(xx) x xxxx-xxxx" name="telefone" required>
                                </div>

                                <!---------------------------------------------------------------------------------------------------->

                                <div class=" col-md-6">
                                    <div class="">
                                        <label class="mt-3" for="genero"><small class="">Sexo*</small></label>   
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <input class="input-group-text mr-2" type="radio" name="sexoGenero" value="masculino" required>
                                            </div>
                                            <input class="form-control col-6" placeholder="Masculino" disabled>
                                        </div>
                                            
                                        <div class="input-group mt-3 mb-3">
                                            <div class="input-group-prepend">
                                                <input class="input-group-text mr-2" type="radio" name="sexoGenero" value="feminino" required>
                                            </div>
                                            <input class="form-control col-6" placeholder="Feminino" disabled >
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <input class="input-group-text mr-2" type="radio" name="sexoGenero" value="NaoInformado" required>
                                            </div>
                                            <input class="form-control col-6" placeholder="Prefiro não responder" disabled>
                                        </div>

                                <!---------------------------------------------------------------------------------------------------->

                                            <div class="form-group mt-3">
                                                <label for="data"><small>Nascimento*</small></label>
                                                <input class="form-control" type="date" id="data" name="nascimento" required>
                                            </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="col-md-12 mt-3">

                                <legend class="text-center">Endereço</legend>

                                <!---------------------------------------------------------------------------------------------------->

                                <div class="form-group col-md-6">
                                    <label for="logradouro"><small>Logradouro*</small></label>
                                    <input class="form-control" type="text" id="logradouro" placeholder="Rua Dona Joana, 230" name="logradouro" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cidade-estado"><small> Cidade - Estado*</small></label>
                                    <input class="form-control" type="text" id="cidade-estado" placeholder="Siga este formato: Guarulhos-Sp" name="cidadeEstado" required value="0e">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cep"><small>CEP*</small></label>
                                    <input class="form-control" type="text" id="cep" placeholder="Siga este formato: xxxxx-xxx" name="cep" required>
                                </div>

                            </fieldset>

                            <button type="submit" class="mt-2 btn btn-block btn-success" method="post">ENVIAR</button>


                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        body{
    margin: 0 auto;
    padding: 0;
    display: flex;
    height: 1100px;
    align-items: center;
    justify-content: center;
    background: rgb(85, 85, 85);

}

fieldset{
    border: 1px solid rgb(89, 89, 89);
    border-radius: 5px;
}

legend{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bolder;
}

    </style>
    </body>
</html>