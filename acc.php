<?php
include("lib/php/navbar.php");

$uid = $_SESSION['uid']; 
$sql = mysqli_query($connect,"SELECT * FROM users WHERE id LIKE $uid");

while ($user = mysqli_fetch_array($sql)) {

    $idade = $user['idade'];
    $interesse = $user['interesse'];
    $cidade = $user['cidade'];
    $pais = $user['pais'];

}

?>
<html>

    <head>

        <title>CariocaMedia - Conta</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style type="text/css">

            body {

               background-color: #563D7C;

            }

            input {

                max-width: 300px;
                width: auto;

            }

            select {

                max-width: 300px;
                width: auto;

            }

            label {

                color: white;

            }

            .card {

                border: 1px grey solid;
                max-width: 400px;
                width: auto;

            }

            .card-body {

                background-color: #563D7C;

            }

            #header {

                width: 100%;
                color: white;

            }

            #header-color {

                width: 100%;
                max-height: 200px;
                height: auto;
                background-color: #1AA8F1;
                border: 1px grey solid;
                padding: 10px;

            }

            #user-image {

                max-width: 150px;
                width: auto;
                border-radius: 50%;

            }

        </style>

    </head>

    <body>

        <div style="margin-top: 60px;">
                
            <div id="header">
            
                <div id="header-color"><img id="user-image" src="data:image/png;base64,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"></div>

                <h3><?php echo $_SESSION['name']?></h3>

            </div>

            <div class="card">

                <div class="card-header">
                    Informações da conta
                </div>

                <div class="card-body">

                    <form action="lib/php/update.php" method="POST">

                        <div class="form-group">
                            <label>Idade: </label>
                            <input type="number" value="<?php echo $idade;?>" name="idade" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Interesses: </label>
                            <input type="text" value="<?php echo $interesse;?>" name="interesse" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>País: </label>
                            <select class="form-control" name="pais" value="<?php echo $pais?>">
                                <option value="<?php echo $pais?>" select>Atual: <?php echo $pais?></option>
                                <option value="África do Sul">África do Sul</option>
                                <option value="Albânia">Albânia</option>
                                <option value="Alemanha">Alemanha</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua">Antigua</option>
                                <option value="Arábia Saudita">Arábia Saudita</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armênia">Armênia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Austrália">Austrália</option>
                                <option value="Áustria">Áustria</option>
                                <option value="Azerbaijão">Azerbaijão</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrein">Bahrein</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Bélgica">Bélgica</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermudas">Bermudas</option>
                                <option value="Botsuana">Botsuana</option>
                                <option value="Brasil" selected>Brasil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgária">Bulgária</option>
                                <option value="Burkina Fasso">Burkina Fasso</option>
                                <option value="botão">botão</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Camarões">Camarões</option>
                                <option value="Camboja">Camboja</option>
                                <option value="Canadá">Canadá</option>
                                <option value="Cazaquistão">Cazaquistão</option>
                                <option value="Chade">Chade</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                                <option value="Colômbia">Colômbia</option>
                                <option value="Congo">Congo</option>
                                <option value="Coréia do Sul">Coréia do Sul</option>
                                <option value="Costa do Marfim">Costa do Marfim</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croácia">Croácia</option>
                                <option value="Dinamarca">Dinamarca</option>
                                <option value="Djibuti">Djibuti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="EUA">EUA</option>
                                <option value="Egito">Egito</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Emirados Árabes">Emirados Árabes</option>
                                <option value="Equador">Equador</option>
                                <option value="Eritréia">Eritréia</option>
                                <option value="Escócia">Escócia</option>
                                <option value="Eslováquia">Eslováquia</option>
                                <option value="Eslovênia">Eslovênia</option>
                                <option value="Espanha">Espanha</option>
                                <option value="Estônia">Estônia</option>
                                <option value="Etiópia">Etiópia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Filipinas">Filipinas</option>
                                <option value="Finlândia">Finlândia</option>
                                <option value="França">França</option>
                                <option value="Gabão">Gabão</option>
                                <option value="Gâmbia">Gâmbia</option>
                                <option value="Gana">Gana</option>
                                <option value="Geórgia">Geórgia</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Granada">Granada</option>
                                <option value="Grécia">Grécia</option>
                                <option value="Guadalupe">Guadalupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guiana">Guiana</option>
                                <option value="Guiana Francesa">Guiana Francesa</option>
                                <option value="Guiné-bissau">Guiné-bissau</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holanda">Holanda</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungria">Hungria</option>
                                <option value="Iêmen">Iêmen</option>
                                <option value="Ilhas Cayman">Ilhas Cayman</option>
                                <option value="Ilhas Cook">Ilhas Cook</option>
                                <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                                <option value="Ilhas Marshall">Ilhas Marshall</option>
                                <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                                <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                                <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                                <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                                <option value="Índia">Índia</option>
                                <option value="Indonésia">Indonésia</option>
                                <option value="Inglaterra">Inglaterra</option>
                                <option value="Irlanda">Irlanda</option>
                                <option value="Islândia">Islândia</option>
                                <option value="Israel">Israel</option>
                                <option value="Itália">Itália</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japão">Japão</option>
                                <option value="Jordânia">Jordânia</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Líbano">Líbano</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituânia">Lituânia</option>
                                <option value="Luxemburgo">Luxemburgo</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedônia">Macedônia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malásia">Malásia</option>
                                <option value="Malaui">Malaui</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marrocos">Marrocos</option>
                                <option value="Martinica">Martinica</option>
                                <option value="Mauritânia">Mauritânia</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="México">México</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Mônaco">Mônaco</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Nicarágua">Nicarágua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigéria">Nigéria</option>
                                <option value="Noruega">Noruega</option>
                                <option value="Nova Caledônia">Nova Caledônia</option>
                                <option value="Nova Zelândia">Nova Zelândia</option>
                                <option value="Omã">Omã</option>
                                <option value="Palau">Palau</option>
                                <option value="Panamá">Panamá</option>
                                <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                                <option value="Paquistão">Paquistão</option>
                                <option value="Peru">Peru</option>
                                <option value="Polinésia Francesa">Polinésia Francesa</option>
                                <option value="Polônia">Polônia</option>
                                <option value="Porto Rico">Porto Rico</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Quênia">Quênia</option>
                                <option value="Rep. Dominicana">Rep. Dominicana</option>
                                <option value="Rep. Tcheca">Rep. Tcheca</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romênia">Romênia</option>
                                <option value="Ruanda">Ruanda</option>
                                <option value="Rússia">Rússia</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa Americana">Samoa Americana</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serra Leone">Serra Leone</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Singapura">Singapura</option>
                                <option value="Síria">Síria</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                                <option value="St. Lúcia">St. Lúcia</option>
                                <option value="St. Vincent">St. Vincent</option>
                                <option value="Sudão">Sudão</option>
                                <option value="Suécia">Suécia</option>
                                <option value="Suiça">Suiça</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Tailândia">Tailândia</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tanzânia">Tanzânia</option>
                                <option value="Togo">Togo</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunísia">Tunísia</option>
                                <option value="Turquia">Turquia</option>
                                <option value="Ucrânia">Ucrânia</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Uruguai">Uruguai</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnã">Vietnã</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zâmbia">Zâmbia</option>
                                <option value="Zimbábue">Zimbábue</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Cidade: </label>
                            <input type="text" value="<?php echo $cidade;?>" name="cidade" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary text-light">Update</button>

                    </form>

                </div>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>