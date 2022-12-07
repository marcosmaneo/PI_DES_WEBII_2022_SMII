<?php
    require_once('headerlogado.php');
    session_start(); // initial session

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ // se não existir loggedin no session ou loggedin não estuver valido volta para index.php
        header("location: index.php");
        exit;
    }
?>
 
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h3 class=" text-black"></h3>
            </div>
            <div class="btn-right ">
                <a href="cadastro.php" class="btn btn-primary">Cadastrar Novo</a>
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>
        </div>
    </nav>

           
    <h2>Professores Cadastrados</h2>
   
    <div class="table-responsive">
        <div class="form-group">
            <table align="center" class="table table-striped table-hover table-bordered" style="width: 90%; max-width: 500px;">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">Usuário</th>
                        <th class="d-none d-sm-table-cell">Nome</th>
                        <th class="d-none d-sm-table-cell">E-mail</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once('classes/professor.php');
                        $professor = new Professor();
                        $professor = $professor->getAll();
                        foreach($professor as $line){
                            $usuario = $line['usuario']; 
                            $nome = $line['nome'];
                            $email = $line['email'];
                            
                            echo "<tr><td>$usuario</td><td>$nome</td><td>$email</td></tr>";

                        }
                    ?>
                </tbody>
            </table>
     </div>
</div>

</body>
</html>