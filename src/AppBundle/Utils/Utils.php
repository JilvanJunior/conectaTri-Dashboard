<?php
/**
 * Created by PhpStorm.
 * User: kmkraiker
 * Date: 05/07/2017
 * Time: 03:17
 */

namespace AppBundle\Utils;


class Utils
{
    /**
     * Encodes the given $data with base64 URL variant.
     *
     * This encoding is designed to make binary data survive transport through transport layers that are not 8-bit clean, such as mail bodies.
     *
     * Base64-encoded data takes about 33% more space than the original data.
     *
     * @param $data string The data to encode.
     * @return string|boolean The encoded data, as a string or FALSE on failure.
     */
    public static function base64url_encode($data) {
        $encoded = base64_encode($data);
        return rtrim(strtr($encoded, '+/', '-_'), '=');
    }

    /**
     * Decodes the given $data with base64 URL variant.
     *
     * This encoding is designed to make binary data survive transport through transport layers that are not 8-bit clean, such as mail bodies.
     *
     * Base64-encoded data takes about 33% more space than the original data.
     *
     * @param $data string The data to decode.
     * @return string The decoded data, as a string.
     */
    public static function base64url_decode($data) {
        return base64_decode(strtr($data, '-_', '+/'));
    }
}