<?php


namespace Domain\Model;



class Oportunidade{

    /**
     * @var int
     */
    private $idOportunidade;


    /**
     * @var string
     */
    private $descricao;


    /**
     * @var \DateTime
     */
    private  $periodoInicial;


    /**
     * @var \DateTime
     */
    private $periodoFinal;

    /**
     * @var int
     */

    private $qtdVagas;


    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \DateTime $periodoInicial
     * @param \DateTime $periodoFinal
     */
    public function __construct(string $descricao, \DateTime $periodoInicial, \DateTime $periodoFinal)
    {
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     *
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }





    // Função generica que engloba todos o GETs acima
   // public function get($get){
  //      return $this->$get;
    //}



}