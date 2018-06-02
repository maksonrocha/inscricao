<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario07
 * Date: 19/05/2018
 * Time: 14:17
 */

namespace Domain\Repository;


use Domain\Model\Oportunidade;

Interface OportunidadeRepositoryInterface{

    /**
     * @param Oportunidade $oportunidade
     * @return void
     */
    public function salvar(Oportunidade $oportunidade);


}