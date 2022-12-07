<?php
    require_once('headerlogado.php');
    session_start(); // initial session

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ // se não existir loggedin no session ou loggedin não estuver valido volta para index.php
        header("location: index.php");
        exit;
    }
?>
<style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .text-black{ color: black !important; font-weight: bold; margin-bottom: 15px;}
        .btn-right{ float: right !important; margin-right: 10px; margin-top: 12px;}
        .wrapper{ width: 650px; padding: 20px;  margin: auto; margin-top: 20px;}        
    </style> 

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h3 class=" text-black"></h3>
            </div>
            <div class="btn-right "> 
                <a href="cadastro.php" class="btn btn-primary">Cadastrar Novo</a>               
                <a href="listar.php" class="btn btn-warning">Listar Professores</a>
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>
        </div>
    </nav><br/>
    
    <div class="page-header">
        <h1>Olá, Prof° <b><?php echo htmlspecialchars($_SESSION["usuario"]); ?>
        <br>
        </b>Bem vindo(a).</h1>
    </div>
       
   
</body>
</html>