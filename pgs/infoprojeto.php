<?php
    require_once '../php/useradm.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devise-width,initial-scale=1.0">
        <title>Segrega Device</title>
        <link rel="stylesheet" href="../css/menures.css">
        <link rel="stylesheet" href="../css/confinfor.css">
        <style>
            body
            {
                background-image: none;
                background-color: rgba(0, 0, 0, .5);
            }
        </style>
    </head>
    <body>
        <header class="header">
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu">&#9776;</label>
            <div class="logo">
                <img src="../img/logo.jpg">
            </div>
            <nav class="menu">

                <ul>
                    <?php
                        if (isset($_SESSION['id_ADM']))
                        {
                            ?>
                            <li>
                                <a href="#">Voltar</a>
                                <ul>
                                    <li><a href="../index.php">Home Page</a></li>
                                    <li><a href="ADM/inicioadm.php">PG_inicial ADM</a></li>
                                </ul>
                            </li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <li><a href="../index.php">Home</a></li>
                            <?php
                        }
                    
                    ?>
                    <li>
                        <a href="#">Sobre</a>
                        <ul>
                            <li><a href="#">Localize-se(MAPS)</a></li>
                            <li><a href="infoprojeto.php">Projeto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Calculos</a>
                        <ul>
                            <li><a href="energia.php">Energia</a></li>
                            <li><a href="#">??gua</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Fale Conosco</a></li>
                    <?php
                        if (isset($_SESSION['id_ADM']))
                        {
                            ?>
                                <li><a href="../php/exit.php">Sair</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                                <li>
                                    <a href="#">Logar</a>
                                    <ul>
                                        <li><a href="../logadm.php">ADM</a></li>
                                        <li><a href="../loguser.php">Usuario</a></li>
                                    </ul>
                                </li>
                            <?php
                        }
                    ?>
                </ul>

            </nav>
        </header>

        <div class="info">

            <h1>Projeto Segrega Devise</h1>
            <h2>Conscientiza????o para preserva????o do mundo!</h2>
            <img src="../img/terra.png" alt="">
            <P>A conscientiza????o ambiental ?? a transforma????o e a cria????o de senso cr??tico em rela????o ao preju??zos sofridos pelo meio ambiente devido ?? sua explora????o sem cuidados pelos seres humanos desde os tempos mais prim??rdios da humanidade.<br><br>Desde o in??cio da humanidade o ser humano necessitou do ambiente para sobreviver, utilizando todos os seus recursos para conseguir abrigo e alimento. Essa rela????o era harmoniosa mas, com o passar dos s??culos, ele foi desenvolvendo-se de tal forma que a explora????o aos recursos naturais ficou cada vez mais preocupante, principalmente no final do s??culo XX.<br><br>No s??culo XX houve um acelerado crescimento populacional, tamb??m um grande desenvolvimento dos adventos tecnol??gicos. Isso fez com que a rela????o perdesse seu equil??brio, fazendo com que fosse necess??rio pensar sobre a preserva????o do meio ambiente juntamente com os interesses econ??micos e sociais do pa??s, ou seja, pensar em um desenvolvimento sustent??vel.<br><br>Com isso, surgiram normas ambientais que se tornam cada vez mais severas, m??todos de produ????o e de energia cada vez mais sustent??veis e todas as atividades di??rias desempenhadas pensando na economia de recursos naturais.</P>
            <img src="../img/terra.jpg" alt="">
            <p>Mesmo que a conscientiza????o ambiental seja um processo introspectivo, que necessita do pr??prio indiv??duo adquirir tais pensamentos, h?? m??todos legislativos e educacionais que visam tentar acelerar esse processo, seja por meio de cartilhas, avisos, artigos, ou at?? por puni????es institu??das e estudadas pelo Direito Ambiental.</p>

        </div>
    </body>
</html>