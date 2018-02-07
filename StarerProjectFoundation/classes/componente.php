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
        <html class="no-js" lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            
            <!-- icon da página -->
            <link rel="icon" href="favicon.ico">
            
            <title><?=$titulo?></title>
            
            <link rel="stylesheet" href="css/foundation.css" />
            <link rel="stylesheet" href="css/app.css" />
            <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
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
            <div class="top-bar">
              <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                  <li class="menu-text"><?=$titulo?></li>
                  <li>
                    <a href="#">Menu Um</a>
                    <ul class="menu vertical">
                      <li><a href="#">Submenu Um</a></li>
                      <li><a href="#">Submenu Dois</a></li>
                      <li><a href="#">Submenu Tres</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Menu Dois</a></li>
                  <li><a href="testebd.php">Teste BD</a></li>
                </ul>
              </div>
              <div class="top-bar-right">
                <ul class="menu">
                  <li><input type="search" placeholder="Search"></li>
                  <li><button type="button" class="button">Procurar</button></li>
                </ul>
              </div>
            </div>
        <?php
    }

   /** 
     * Método para mostrar a barra de título
     * 
     * @access public 
     * @param string $titulo Título da barra
     * @return void
    */     
    public function BarraTitulo($titulo){
        ?>
        <div class="callout large primary">
            <div class="row column text-center">
                <h1><?=$titulo?></h1>
            </div>
        </div>
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
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-12 text-justify">
            
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
            </div>  
        </div>
        <?php
    }   
     
   
     /** 
     * Método para criar o rodapé da página
     * 
     * @access public 
     * @param string $texto do rodapé
     * @return void
    */    
    public function Rodape($titulo){
    ?>
           <div class="grid-container">
               <div class="grid-x">
                   <div class="cell large-12 text-right">
                       <hr>
                       <p> <?=$titulo?> </p>
                    </div>
                </div>
           </div>
        

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script>
          $(document).foundation();
        </script>

    </body>

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
    
        <h1>Foundation starter template </h1>
        <h4>Ponto de partida para o projeto</h4> <br>
        <p>
             
            Projeto configurado com Foundation <a href="https://foundation.zurb.com/sites/docs/">https://foundation.zurb.com/sites/docs/</a><br>
            Projeto configurado com Foundation Icon Fonts 3 <a href="https://zurb.com/playground/foundation-icon-fonts-3">https://zurb.com/playground/foundation-icon-fonts-3</a><br>
            
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
 
        <div class="grid-container">
            <div class="grid-x grid-margin-x">

                <div class="cell large-12">
                    <table>
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Email</th>
                            <th>Operação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Pancrácio</td>
                            <td>Pica Milho</td>
                            <td>email@mdo.com</td>
                            <td> <a href="#"> <i class="fi-pencil"></i></a>&nbsp;&nbsp; <a href="#"><i class="fi-trash"></i></a></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Zaldemira</td>
                            <td>Nascimento</td>
                            <td>email@fat.com</td>
                            <td> <a href="#"> <i class="fi-pencil"></i></a>&nbsp;&nbsp; <a href="#"><i class="fi-trash"></i></a></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Apolinário</td>
                            <td>Framundes</td>
                            <td>email@twi.com</td>
                            <td> <a href="#"> <i class="fi-pencil"></i></a>&nbsp;&nbsp; <a href="#"><i class="fi-trash"></i></a></td>
                          </tr>
                        </tbody>
                      </table>



                </div>
            </div>
        </div>
        <?php
    } 
    
   /** 
     * Método para criar mensagens de alerta de sucesso
     * 
     * @access public 
     * @param string $titulo Título da mensagem
     * @param string $descricao Descrição da mensagem
     * @param string $link Endereço de ligação para outra página
     * @param string $textolink Texto do endereço de ligação
     * @return void
    */       
    public function AlertaSucesso($titulo,$descricao, $link, $textolink){
        ?>   
        <div class="callout success">
            <h5><?=$titulo?></h5>
            <p><?=$descricao?></p>
            <a href="<?=$link?>"><?=$textolink?></a>
        </div>
        <?php
    }      
    
    /** 
     * Método para criar mensagens de alerta de perigo
     * 
     * @access public 
     * @param string $titulo Título da mensagem
     * @param string $descricao Descrição da mensagem
     * @param string $link Endereço de ligação para outra página
     * @param string $textolink Texto do endereço de ligação
     * @return void
    */  
    public function AlertaPerigo($titulo,$descricao, $link, $textolink){
        ?>   
        <div class="callout alert">
            <h5><?=$titulo?></h5>
            <p><?=$descricao?></p>
            <a href="<?=$link?>"><?=$textolink?></a>
        </div>
        <?php
    }   
    
    
}

