<?php
/**
 * Ficheiro inicial da aplicação
 * 
 * @package StarterProjectBootstrap
 * @author Nuno Ramalho <nmramalho@550nmr.com>
 */

include_once 'classes/componente.php';

$componente = new Componente();

$componente->Cabecalho('Título da página');

$componente->MenuTopo('O meu projeto');

$componente->InicioConteudo();

$componente->MensagemTemplate();
$componente->TabelaTemplate();


$componente->FimConteudo();

$componente->Rodape('Mensagem que aparece no rodapé');

