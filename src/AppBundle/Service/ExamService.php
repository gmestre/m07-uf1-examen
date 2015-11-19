<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/11/15
 * Time: 19:31
 */
namespace AppBundle\Service;


class ExamService
{
    private $op1;
    private $result;


    public function __construct()
    {
        $this->result;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op1
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @param int $result
     */
    public function getResult()
    {
        return $this->result;
    }

    public function contarLetAction($op1)
    {

        $string = $op1;
        $cont = 0;
        $cont = strlen($string);

        return $this->result = $cont;
    }
    public function doMaysAction($op1)
    {

        $string = $op1;
        $cont = strtoupper($string);

        return $this->result = $cont;
    }
    public function doMinusAction($op1)
    {

        $string = $op1;

        $cont = strtolower($string);

        return $this->result = $cont;
    }
    public function doConcatAction($op1, $op2)
    {

        $string = $op1;
        $string2 = $op2;
        $cont = $string." ".$string2;

        return $this->result = $cont;
    }
}