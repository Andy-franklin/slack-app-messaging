<?php

namespace AndyFranklin\SlackAppMessaging\Dialog;

use AndyFranklin\SlackAppMessaging\Model\SlackEncodableInterface;
use GuzzleHttp\Psr7\Request;
use JMS\Serializer\SerializerInterface;

/**
 * Class DialogResponse
 * @package AndyFranklin\SlackAppMessaging\Dialog
 */
class DialogResponse implements SlackEncodableInterface
{
    /**
     * @var Dialog
     */
    private $dialog;

    /**
     * @var string
     */
    private $trigger_id;

    /**
     * @param mixed $dialog
     * @return DialogResponse
     */
    public function setDialog(Dialog $dialog): DialogResponse
    {
        $this->dialog = $dialog;
        return $this;
    }

    /**
     * @param string $trigger_id
     * @return DialogResponse
     */
    public function setTriggerId(string $trigger_id): DialogResponse
    {
        $this->trigger_id = $trigger_id;
        return $this;
    }

    /**
     * @param string $endpoint
     * @param SerializerInterface $serializer
     * @param string $authorizationToken
     * @return Request
     */
    public function getPostRequest(string $endpoint, SerializerInterface $serializer, string $authorizationToken): Request
    {
        $request = new Request(
            'POST',
            'https://www.slack.com/api/' . $endpoint,
            [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $authorizationToken,
            ],
            $serializer->serialize($this, 'json')
        );

        return $request;
    }
}
