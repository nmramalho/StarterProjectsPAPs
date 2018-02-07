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
$componente->Cabecalho('Teste à base de dados ');
$componente->MenuTopo('O meu projeto');
$componente->BarraTitulo('Título');

$componente->InicioConteudo();

$operacoesbd = new OperacoesBD();
        
        $ligacao = $operacoesbd->ligaBD();
        
        if ($ligacao){
            $titulo = 'Sucesso';
            $descricao = 'Ligação à base de dados feita com sucesso';
            $link = 'index.php';
            $textolink = 'voltar ao início';
            $componente->AlertaSucesso($titulo,$descricao, $link, $textolink);
            $ligacao->close();        
        }
        else {
            $titulo = 'Erro';
            $descricao = ' Não consegue ligação com a base de dados <br><br>'
                    . ' -> Verifique o ficheiro de configuração <strong>"configuracao.php"</strong><br>' 
                    . ' -> Verifique se o serviço está iniciado';
                        $link = 'index.php';
            $textolink = 'voltar ao início';
            
            $componente->AlertaPerigo($titulo,$descricao, $link, $textolink);
        }


$componente->FimConteudo();

$componente->Rodape('Mensagem que aparece no rodapé');



    


    
