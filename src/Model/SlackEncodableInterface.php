<?php

namespace AndyFranklin\SlackAppMessaging\Model;

use JMS\Serializer\SerializerInterface;

interface SlackEncodableInterface
{
    public function getPostRequest(string $endpoint, SerializerInterface $serializer, string $authorizationToken);
}
