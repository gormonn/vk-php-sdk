<?php

namespace VK\Exceptions\Api;

class ApiAccessAudioException extends VKApiException {
    /**
     * ApiAccessAudioException constructor.
     * @param string $message
     */
    public function __construct($message) {
        parent::__construct(201,  'Access denied',  $message);
    }
}