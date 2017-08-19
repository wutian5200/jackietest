<?php
/**
 * Created by PhpStorm.
 * User: jackie
 * Date: 2017/8/20
 * Time: 01:23
 */

namespace  tencentIm\Hasher;
/**
 * Class test
 * @package tencentIm\Hasher
 */
class test
{
    /**
     * @param $value
     * @return string
     */
    public function make($value)
    {
        return md5($value);
    }

    /**
     * @param $value
     * @return string
     */
    public function check($value)
    {
        return md5($value);
    }

}