<?php
/**
 * TranslateApiInterface
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * LibreTranslate
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.3.11
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\DetectionsInner;
use OpenAPI\Server\Model\ErrorResponse;
use OpenAPI\Server\Model\ErrorSlowDown;
use OpenAPI\Server\Model\LanguagesInner;
use OpenAPI\Server\Model\Translate;
use OpenAPI\Server\Model\TranslateFile;

/**
 * TranslateApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface TranslateApiInterface
{

    /**
     * Operation detectPost
     *
     * Detect the language of a single text
     *
     * @param   $q  Text to detect (required)
     * @param  |null $apiKey  API key (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function detectPost($q, ?$apiKey, int &$responseCode, array &$responseHeaders): array|object|null;


    /**
     * Operation languagesGet
     *
     * Retrieve list of supported languages
     *
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function languagesGet(int &$responseCode, array &$responseHeaders): array|object|null;


    /**
     * Operation translateFilePost
     *
     * Translate file from a language to another
     *
     * @param  UploadedFile $file  File to translate (required)
     * @param   $source  Source language code (required)
     * @param   $target  Target language code (required)
     * @param  |null $apiKey  API key (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function translateFilePost(UploadedFile $file, $source, $target, ?$apiKey, int &$responseCode, array &$responseHeaders): array|object|null;


    /**
     * Operation translatePost
     *
     * Translate text from a language to another
     *
     * @param   $q  Text(s) to translate (required)
     * @param   $source  Source language code (required)
     * @param   $target  Target language code (required)
     * @param  |null $format  Format of source text:  * &#x60;text&#x60; - Plain text  * &#x60;html&#x60; - HTML markup (optional)
     * @param  |null $apiKey  API key (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function translatePost($q, $source, $target, ?$format, ?$apiKey, int &$responseCode, array &$responseHeaders): array|object|null;

}