<?php

namespace AndyFranklin\SlackAppMessaging\Message;

use AndyFranklin\SlackAppMessaging\Model\SlackEncodableInterface;
use GuzzleHttp\Psr7\Request;
use JMS\Serializer\SerializerInterface;

class Message implements SlackEncodableInterface
{
    private $text;
    private $attachments;
    private $thread_ts;
    private $response_type = 'ephemeral';
    private $replace_original;
    private $delete_original;
    private $channel;
    private $as_user;
    private $icon_emoji;
    private $icon_url;
    private $link_names;
    private $mrkdwn;

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param mixed $channel
     * @return Message
     */
    public function setChannel($channel): Message
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAsUser()
    {
        return $this->as_user;
    }

    /**
     * @param mixed $as_user
     * @return Message
     */
    public function setAsUser($as_user): Message
    {
        $this->as_user = $as_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIconEmoji()
    {
        return $this->icon_emoji;
    }

    /**
     * @param mixed $icon_emoji
     * @return Message
     */
    public function setIconEmoji($icon_emoji): Message
    {
        $this->icon_emoji = $icon_emoji;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }

    /**
     * @param mixed $icon_url
     * @return Message
     */
    public function setIconUrl($icon_url): Message
    {
        $this->icon_url = $icon_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLinkNames()
    {
        return $this->link_names;
    }

    /**
     * @param mixed $link_names
     * @return Message
     */
    public function setLinkNames($link_names): Message
    {
        $this->link_names = $link_names;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMrkdwn()
    {
        return $this->mrkdwn;
    }

    /**
     * @param mixed $mrkdwn
     * @return Message
     */
    public function setMrkdwn($mrkdwn): Message
    {
        $this->mrkdwn = $mrkdwn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Message
     */
    public function setText($text): Message
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param Attachment $attachment
     * @return Message
     */
    public function addAttachment(Attachment $attachment): Message
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThreadTs()
    {
        return $this->thread_ts;
    }

    /**
     * @param mixed $thread_ts
     * @return Message
     */
    public function setThreadTs($thread_ts): Message
    {
        $this->thread_ts = $thread_ts;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseType(): string
    {
        return $this->response_type;
    }

    /**
     * @param boolean $public
     * @return Message
     */
    public function setResponseType(bool $public): Message
    {
        if (!$public) {
            $this->response_type = 'ephemeral';
        } else {
            $this->response_type = 'in_channel';
        }
        return $this;
    }

    /**
     * @return bool
     */
    public function isReplaceOriginal(): bool
    {
        return $this->replace_original;
    }

    /**
     * @param bool $replace_original
     * @return Message
     */
    public function setReplaceOriginal(bool $replace_original): Message
    {
        $this->replace_original = $replace_original;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleteOriginal(): bool
    {
        return $this->delete_original;
    }

    /**
     * @param bool $delete_original
     * @return Message
     */
    public function setDeleteOriginal(bool $delete_original): Message
    {
        $this->delete_original = $delete_original;
        return $this;
    }

    public function getPostRequest($endpoint, SerializerInterface $serializer, $authorizationToken)
    {
        $request = new Request('POST', 'https://www.slack.com/api/'.$endpoint, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $authorizationToken,
            ],
            'body' => $serializer->serialize($this, 'json')
        ]);

        return $request;
    }
}
