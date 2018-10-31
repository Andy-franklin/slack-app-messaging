<?php

namespace AndyFranklin\SlackAppMessaging\Message;

class ConfirmationField
{
    private $title;
    private $text;
    private $ok_text;
    private $dismiss_text;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
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
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getOkText()
    {
        return $this->ok_text;
    }

    /**
     * @param mixed $ok_text
     */
    public function setOkText($ok_text): void
    {
        $this->ok_text = $ok_text;
    }

    /**
     * @return mixed
     */
    public function getDismissText()
    {
        return $this->dismiss_text;
    }

    /**
     * @param mixed $dismiss_text
     */
    public function setDismissText($dismiss_text): void
    {
        $this->dismiss_text = $dismiss_text;
    }
}
