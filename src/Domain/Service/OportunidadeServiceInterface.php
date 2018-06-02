<?php


namespace Domain\Service;


use Domain\Model\Oportunidade;

Interface OportunidadeServiceInterface{

    /**
     * @param Oportunidade $oportunidade
     * @return void
     */

    public function salvar(Oportunidade $oportunidade);

    /**
     * @return array
     */

    public function listarTudo();

}