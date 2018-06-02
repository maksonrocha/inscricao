<?php


namespace AppBundle\Controller;


use Domain\Model\Oportunidade;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class OportunidadeController extends Controller
{

    /**
     * @Method("POST")
     * @Route("/oportunidade/salvar")
     * @param Request $request
     */
    public function salvarAction(Request $request)
    {

        $serializerService = $this->get('infra.serializer.service');
        $oportunidadeService = $this->get('app.oportunidade.service');

        try {
            $oportunidade = $serializerService->converter($request->getContent(), Oportunidade::class);
            $oportunidadeService->salvar($oportunidade);
            //dump($oportunidade-> get('periodoInicial')); die; Retorna o valor de acordo com o parametro da descricao

        } catch (\Exception $exception) {
            return new Response($exception->getMessage(), 400);
        }

        return new Response("Operação concluida com sucesso");


    }

    /**
     * @Route("/oportunidade/listar")
     */

    public function getOportunidadeAction(){

        $oportunidadeService = $this->get('app.oportunidade.service');
        $serializerService = $this->get('infra.serializer.service');


        try{
           $oportunidades = $oportunidadeService->listarTudo();

        } catch (\Exception $exception){
            return new Response($exception->getMessage(), 400);
        }
        return new Response($serializerService-> toJsonByGroups($oportunidades));
    }

}