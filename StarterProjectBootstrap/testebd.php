<?php
/**
 * Ficheiro responsável por apresentar a página de teste de ligação à base de dados
 * 
 * @package StarterProjectBootstrap
 * @author Nuno Ramalho <nmramalho@550nmr.com>
 */
include_once 'classes/componente.php';
include_once 'classes/operacoesbd.php';

$componente = new Componente();
$componente->Cabecalho('Teste de ligação à base de dados');
$componente->MenuTopo('O meu projeto');
$componente->InicioConteudo();

$operacoesbd = new OperacoesBD();
        
        $ligacao = $operacoesbd->ligaBD();
        
        if ($ligacao){
            $componente->AlertaSucesso('<strong>Sucesso</strong> - foi estabelecida a ligação com a base de dados');
            $ligacao->close();        
        }
        else {
            $msg = '<strong>ERRO</strong> - Não consegue ligação com a base de dados <br><br>'
                    . ' -> Verifique o ficheiro de configuração <strong>"configuracao.php"</strong><br>' 
                    . ' -> Verifique se o serviço está iniciado';
            
            $componente->AlertaPerigo($msg);
        }


$componente->FimConteudo();

$componente->Rodape('Mensagem que aparece no rodapé');



    


    
