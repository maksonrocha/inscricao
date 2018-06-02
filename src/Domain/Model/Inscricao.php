<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario07
 * Date: 02/06/2018
 * Time: 14:17
 */

namespace Domain\Model;


class Inscricao
{
    /**
     * @var int
     */
    private $idInscricao;

    /**
     * @var $candidato
     */
    private $candidato;

    /**
     * @var $oportunidade
     */
    private $oportunidade;

    /**
     * @var string
     */
    private $codigoConfirmacao;

    /**
     * @var boolean
     */
    private $ativa;

}