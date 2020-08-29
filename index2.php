<html>

    <head>

        <title>CariocaMedia - Cadastro</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style type="text/css">

            body {

                background-color: #563D7C;

            }

            .form-control {

                max-width: 240px;
                width: auto;

            }

        </style>

    </head>

    <body>

        <?php
            if (@$_GET['e'] == 1) {

                echo '
                    
                    <div class="alert alert-danger text-white bg-danger border-danger" role="alert">
                        Já existe um usuario com esse email!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                ';

            }

        ?>
            
            <h1 class="text-light">Cadastrar</h1>

            <form action="lib/php/l_c.php?c=2" method="POST">

                <div class="form-group">

                    <label for="input-name" class="text-light">Nome</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="input-name" placeholder="Digite seu nome todo" autocomplete="off" required>
                        
                </div>

                <div class="form-group">

                    <label for="exampleInputEmail1" class="text-light">E-mail</label>
                    <input type="email" name="mail" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o e-mail" autocomplete="off" required>
                            
                </div>

                <div class="form-group">

                    <label for="exampleInputPassword1" class="text-light">Senha</label>
                    <input type="password" name="pass" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Senha" autocomplete="off" required>

                </div>

                <select class="form-control form-control-sm" name="gender">

                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Não informado">Prefiro não dizer</option>

                </select>

                <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>

            <a href="index.php" class="text-light">Já tem uma conta? Entrar</a>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>