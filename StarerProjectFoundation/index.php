<?php
/**
 * Ficheiro inicial da aplicação
 * 
 * @package StarterProjectBootstrap
 * @author Nuno Ramalho <nmramalho@550nmr.com>
 */
include_once 'classes/componente.php';

$componente = new Componente();

$componente->Cabecalho('Site Exemplo');
$componente->MenuTopo('O meu projeto');
$componente->BarraTitulo('Título');

$componente->InicioConteudo();

$componente->MensagemTemplate();
$componente->TabelaTemplate();

$componente->FimConteudo();

$componente->Rodape('Rodapé da página');






