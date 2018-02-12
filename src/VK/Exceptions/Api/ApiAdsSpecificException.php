<?php

namespace VK\Exceptions\Api;

class ApiAdsSpecificException extends VKApiException {
    /**
     * ApiAdsSpecificException constructor.
     * @param string $message
     */
    public function __construct($message) {
        parent::__construct(603,  'Some ads error occured',  $message);
    }
}