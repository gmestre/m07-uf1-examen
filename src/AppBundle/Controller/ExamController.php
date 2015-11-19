<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/11/15
 * Time: 19:30
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExamController extends Controller
{
    /**
     * @Route("/contar", name="count")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/cont_form", name="app_exam_count")
     */
    public function contarAction()
    {
        return $this->render('/exam/count_let.html.twig');
    }

    /**
     * @Route("/do-count", name="app_exam_count_l")
     */
    public function doCountAction(request $request)
    {
        $count = $this->get('app.service.exam');
        $op1 = $request->request->get('op1');
        $count->setOp1($op1);
        $count->contarLetAction($op1);

        $result = $count->getResult();



        return $this->render(
            ':exam:do-count-leter.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'Pene',
            ]
        );
    }

    /**
     * @Route("/cont_form1", name="app_exam_mays")
     */
    public function maysAction()
    {
        return $this->render('/exam/mays.html.twig');
    }

    /**
     * @Route("/do-count1", name="app_exam_mays_do")
     */
    public function doMaysAction(request $request)
    {
        $count = $this->get('app.service.exam');
        $op1 = $request->request->get('op1');
        $count->setOp1($op1);
        $count->doMaysAction($op1);

        $result = $count->getResult();



        return $this->render(
            ':exam:do-mays.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'Pene',
            ]
        );
    }

    /**
     * @Route("/cont_form2", name="app_exam_minus")
     */
    public function minusAction()
    {
        return $this->render('/exam/minus.html.twig');
    }

    /**
     * @Route("/do-count2", name="app_exam_minus_do")
     */
    public function doMinusAction(request $request)
    {
        $count = $this->get('app.service.exam');
        $op1 = $request->request->get('op1');
        $count->setOp1($op1);
        $count->doMinusAction($op1);

        $result = $count->getResult();



        return $this->render(
            ':exam:do-minus.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'Pene',
            ]
        );
    }

    /**
     * @Route("/cont_form3", name="app_exam_concat")
     */
    public function concatAction()
    {
        return $this->render('/exam/concat.html.twig');
    }

    /**
     * @Route("/do-count3", name="app_exam_concat_do")
     */
    public function doConcatAction(request $request)
    {
        $count = $this->get('app.service.exam');
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $count->setOp1($op1);
        $count->setOp2($op2);
        $count->doConcatAction($op1, $op2);

        $result = $count->getResult();



        return $this->render(
            ':exam:do-concat.html.twig',
            [
                'op1' => $op1,
                'op2' => $op2,
                'result'=> $result,

                'title' => 'Pene',
            ]
        );
    }








}