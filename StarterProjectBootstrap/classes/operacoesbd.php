<?php
/**
 * Classe responsável pelas operações realizadas com à base de dados
 * 
 * @package StarterProjectBootstrap
 * @author Nuno Ramalho <nmramalho@550nmr.com>
 */
include_once 'configuracao.php';

class OperacoesBD {
    

    private $configuracao;

    /**
     * Construtor padrão
     */
    function __construct()
    {
        $this->configuracao = new Configuracao();
    }

    /** 
     * Função para estabelecer a ligação
     * 
     * @access public 
     * @return $ligação Devolve a ligação caso sucesso FALSE caso insucesso.
    */ 
    public function ligaBD() {
 
        /* estabelece a ligação à base de dados */
        $ligacao = new mysqli($this->configuracao->host, $this->configuracao->user, $this->configuracao->password, $this->configuracao->db);
    
        /* verifica ligação*/
        if ($ligacao->connect_errno) {
            echo("Falha na ligação: " . $ligacao->connect_error);
            return false;
        }

        return $ligacao;
    }   
}    