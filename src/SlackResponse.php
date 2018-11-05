<?php

namespace AndyFranklin\SlackAppMessaging;

class SlackResponse
{
    private $type;
    private $payload;

    public function getText()
    {
        if (isset($this->payload['text'])) {
            return $this->payload['text'];
        }
        if (isset($this->payload['message']['text'])) {
            return $this->payload['message']['text'];
        }
        return null;
    }

    public function getUserId()
    {
        if (isset($this->payload['user_id'])) {
            return $this->payload['user_id'];
        }
        if (isset($this->payload['user']['id'])) {
            return $this->payload['user']['id'];
        }
        return null;
    }

    public function getTeamId()
    {
        if (isset($this->payload['team_id'])) {
            return $this->payload['team_id'];
        }
        if (isset($this->payload['team']['id'])) {
            return $this->payload['team']['id'];
        }
        return null;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param array $payload
     */
    public function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }
}
