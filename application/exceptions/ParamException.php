<?php
// +----------------------------------------------------------------------
// | 参数异常
// +----------------------------------------------------------------------
// | Author: chocannon
// +----------------------------------------------------------------------
namespace App\Exceptions;

class ParamException extends \Exception 
{
    protected $code = 300;
}