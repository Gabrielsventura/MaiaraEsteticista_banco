<?php


require_once "classes/conexao.php";
require_once "classes/procedimentos.php";


$p = new procedimentos();
$sql = "SELECT *  FROM procedimentos ";
$sql = $conn->prepare($sql);//prepara a consulta para executar
$sql->execute();//executa

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);//exibe todos os registros do banco em um array
 






?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimentos</title>
    <link rel="shortcut icon" href="img/icone_sem_fundo.png" type="image/x-icon">

    <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/faciais.css?v=<?php echo time(); ?>">
<!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="js/scripts.js"></script>
</head>
<body>

<header>
        <div class="container" id="nav-container" >
            <nav class="navbar navbar-expand-lg fixed-top navbar-light" >
                <a id="logo" href="index.php" class="navbar-brand"> 
                    <img id="logo" src="img/maiara_estetica/logo2.png" alt="not found">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    
                        <a class="nav-item nav-link " style="font-family: Arial, 
                        Helvetica, sans-serif; font-weight: bold; font-weight: bold;"   id="home-menu" href="#">Sobre mim</a>

                         <a class="nav-item nav-link dropdlink" data-toggle="dropdown">Sobre a empresa</a>
                          
                        <a class="nav-item nav-link"  id="services-menu" style="color: rgb(219, 207, 32)" href="#">Ambiente e procedimentos</a>
                        
                        <div class="navbar-nav dropdown">
                        
                        <a class="nav-item nav-link "  id="portfolio-menu" data-toggle="dropdown" style="font-size: 18px; color: rgb(90, 160, 90)" href="#">Login <i class="fa fa-caret-down"></i></a>
                  
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="labios.html">Administrador</a>
                          <a class="dropdown-item" href="#">Link 2</a>
                          <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                  
                  
                      </div>


                         </div>
                

                
            </nav>
        </div>
    </header>
     <!--sessão sobre a empresa-->
     <div id="area-1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="main-title">Procedimentos corporais</h1>
          </div>
          
         </div>

        </div>
     </div>


     <?php
          
          if(count($dados) > 0){

            ?>
            <div id="services-area"  >
            <div class="container-fluid">
            <div class="row"> <!--classe das linhas-->
            <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
              
            <!--botao pro model-->
            <a  class=" btn btn-success" href="cadastroProc.php" >Cadastrar </a>

          </div>
          </div>
          </div>
          </div>

         
          
              <?php
            for($c=0; $c < count($dados); $c++){
              ?>
                <div id="services-area" >
                <div class="container-fluid" >
                <div class="row"> <!--classe das linhas-->
                <div class="col-md-5"><!--numro de colunas para tela de tamanha medio-->
                  
                    <?php
                  if ($c % 2 == 0){
                      foreach($dados[$c] as $kay => $value){
                        
                      

                          
                          
                  if ($kay == "nome_proc"){
                    ?>
    
    
                     <h4 class="title-clear" ><?php echo $value; ?></h4> 

                  
                  <?php

                     
                  } 

              else if ($kay == "desc_proc") {
                        
                ?>
                <p class="clear" style="min-height: 80%; max-height: 100%;"><?php echo $value; ?></p>

                
                
                <?php
              }

              
              
            }
           
           ?>
           
           <div class="col-md-5"style="margin-left: 7%" >
           <a class="btn btn-danger" href="lista.php?id=<?php echo $dados[$c]['id_proc'];?>" >Excluir</a>
          </div>
           <?php

            
        }
        else if ($c % 2 > 0){
        

        ?>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5" style="margin-top: -20%;" ><!--numro de colunas para tela de tamanha medio-->
      
      

            <?php  
        
        

        
          foreach($dados[$c] as $kay => $value){

            if ($kay == "nome_proc"){
              ?>


               <h4 class="title-diamante" ><?php echo $value; ?></h4> 

               
            <?php
            } if ($kay == "desc_proc") {
                        
              ?>
              <p class="diamante" style="min-height: 50%; max-height: 100%; "><?php echo $value; ?></p>

             
              
              <?php
            }

            

          }
          ?>
          <div class="col-md-5">
         <a class="btn btn-danger" href="lista.php?id=<?php echo $dados[$c]?>">Excluir</a>
        </div>
        </div>
         <?php

              
      
            ?>
          
         
        </div>
        <?php
        }
        ?>
          </div>
          </div>
          <?php
        

  

  }

}
          
      ?>
            
           
         
        <!--numro de colunas para tela de tamanha medio-->
         
       


            
</body>
</html>
<?php
          //------DELETE------

          
          if(isset($_GET['id_proc'])){
            
            $id_proc = addslashes($_GET['id_proc']);
           
            
              $p->excluirProc($id_proc);

            
          
            
            header("location: lista.php");

            echo "excluid0";

           

            
          }   
          


?>
