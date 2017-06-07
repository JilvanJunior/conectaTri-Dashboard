<?php
/**
 * Created by PhpStorm.
 * User: kmkraiker
 * Date: 05/06/2017
 * Time: 22:17
 */

namespace AppBundle\Model;


class ApiError
{
    /**
     * @var string
     */
    private $message;

    /**
     * ApiError constructor.
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ApiError
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}