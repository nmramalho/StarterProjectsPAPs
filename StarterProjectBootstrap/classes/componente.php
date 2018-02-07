<?php
/**
 * Classe responsável pela apresentação da informação nas páginas do site
 * 
 * @package StarterProjectBootstrap
 * @author Nuno Ramalho <nmramalho@550nmr.com>
 */
class Componente{

    /**
     * Construtor padrão
     */
    function __construct()
    {

    }    
   /** 
     * Método para construir ao cabeçalho da página
     * 
     * @access public 
     * @param string $titulo titulo da página
     * @return void
    */ 
    public function Cabecalho($titulo){
        ?>
        <!doctype html>
        <html lang="pt">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- icon da página -->
                <link rel="icon" href="favicon.ico">

                <!-- Bootstrap CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
                
                <!-- open-iconic -->
                <link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

                <!-- Folha de estilos personalizada -->
                <link href="css/starter-template.css" rel="stylesheet">

                <title><?=$titulo?></title>
            </head>

          <body>

      <?php
    }
    
   /** 
     * Método para construir menu principal da página
     * 
     * @access public 
     * @param string $titulo titulo do menu
     * @return void
    */  
    public function MenuTopo($titulo){
        ?>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#"><?=$titulo?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testebd.php">Teste BD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Menu Dois </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="#">Dropdown Um</a>
                          <a class="dropdown-item" href="#">Dropdown Dois</a>
                          <a class="dropdown-item" href="#">Dropdown Três</a>
                        </div>
                    </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Procurar" aria-label="Procurar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
                </form>
            </div>
        </nav>

        <?php
    }
    
   /** 
     * Método para marcar o início da àrea de contreúdo da página
     * 
     * @access public 
     * @return void
    */ 
     public function InicioConteudo(){
        ?>
        <main role="main" class="container">
            <div class="starter-template">
            <br>
            <br>
            <br>
            
        <?php
    }   
    
    /** 
     * Método para marcar o fim da àrea de contreúdo da página
     * 
     * @access public 
     * @return void
    */    
    public function FimConteudo(){
        ?>
            </div>
        </main>
        <?php
    }   
     
    /** 
     * Método para criar o rodapé da página
     * 
     * @access public 
     * @param string $texto do rodapé
     * @return void
    */   
    public function Rodape($texto){
    ?>
        <footer>
            <p> <?=$texto?> </p>
        </footer>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>

      <?php
    }

     /** 
     * Método para criar a mensagem acerca da página
     * 
     * @access public 
     * @return void
    */  
    public function MensagemTemplate(){
        ?>
    
        <h1>Bootstrap starter template </h1>
        <h4>Ponto de partida para o projeto</h4> <br>
        <p class="lead">
             
            Projeto configurado com Bootstrap <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/">https://getbootstrap.com/docs/4.0/getting-started/introduction/</a><br>
            Projeto configurado Open Iconic <a href="https://useiconic.com/open/">https://useiconic.com/open/</a><br>
            
        </p>
       
        
        
        <?php
    }

     /** 
     * Método para criar um exemplo de uma tabela
     * 
     * @access public 
     * @return void
    */     
    public function TabelaTemplate(){
        ?>
 
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Apelido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                        <td>Pancrácio</td>
                        <td>Pica Milho</td>
                        <td>email@mdo.com</td>
                        <td> <a href="#"><span class="oi oi-pencil"></span></a>&nbsp;&nbsp;&nbsp;
                             <a href="#"><span class="oi oi-circle-x"></span></a>&nbsp;&nbsp;&nbsp;
                        </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                        <td>Zaldemira</td>
                        <td>Nascimento</td>
                        <td>email@fat.com</td>
                        <td> <a href="#"><span class="oi oi-pencil"></span></a>&nbsp;&nbsp;&nbsp;
                             <a href="#"><span class="oi oi-circle-x"></span></a>&nbsp;&nbsp;&nbsp;
                        </td>
                        
                </tr>
                <tr>
                    <th scope="row">3</th>
                        <td>Apolinário</td>
                        <td>Framundes</td>
                        <td>email@twi.com</td>
                        <td> <a href="#"><span class="oi oi-pencil"></span></a>&nbsp;&nbsp;&nbsp;
                             <a href="#"><span class="oi oi-circle-x"></span></a>&nbsp;&nbsp;&nbsp;
                        </td>
                </tr>
            </tbody>
      </table>
        <?php
    }   
    
    
   /** 
     * Método para criar mensagens de alerta de sucesso
     * 
     * @access public 
     * @param string $mensagem Mensagem a apresentar
     * @return void
    */   
     public function AlertaSucesso($mensagem){
        ?>   
        <div class="alert alert-success" role="alert">
            <?=$mensagem?>
        </div>
        <?php
    }      
    
    /** 
     * Método para criar mensagens de alerta de perigo
     * 
     * @access public 
     * @param string $mensagem Mensagem a apresentar
     * @return void
    */  
    public function AlertaPerigo($mensagem){
        ?>   
        <div class="alert alert-danger" role="alert">
            <?=$mensagem?>
        </div>
        <?php
    }    
    
}   
    
