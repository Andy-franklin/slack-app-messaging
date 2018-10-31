<?php


namespace AndyFranklin\SlackAppMessaging\Message;


class Option
{
    private $text;
    private $value;

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Option
     */
    public function setText($text): Option
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return Option
     */
    public function setValue($value): Option
    {
        $this->value = $value;
        return $this;
    }
}
