<?php include 'view/_a__dash_menu.php'; ?>

<div class="content">
    <div class="container-fluid">
        <?php
            if (isset($_SESSION['sucess'])) {
                echo "<div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-success text-center\">
                                <span><b>alerta - </b>".$_SESSION['sucess']."</span>
                            </div>
                         </div>
                      </div>"; 
                unset ($_SESSION['sucess']);
            }

            if (isset($_SESSION['nome'])) { 
                echo "<div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <h3>Bem Vindo ".ucwords($_SESSION['nome'])."</h3>
                                </div>
                            </div>
                        </div>
                     </div>";
            }
        ?>
    </div>
</div>