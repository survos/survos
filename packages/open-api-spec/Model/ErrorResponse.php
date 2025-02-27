<?php
/**
 * ErrorResponse
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
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

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the ErrorResponse model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class ErrorResponse 
{
        /**
     * Error message
     *
     * @var string|null
     * @SerializedName("error")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $error = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->error = $data['error'] ?? null;
    }

    /**
     * Gets error.
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Sets error.
     *
     * @param string|null $error  Error message
     *
     * @return $this
     */
    public function setError(?string $error = null): self
    {
        $this->error = $error;

        return $this;
    }
}


