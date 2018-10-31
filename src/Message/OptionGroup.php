<?php

namespace AndyFranklin\SlackAppMessaging\Message;

class OptionGroup
{
    /**
     * @var string $text
     */
    private $text;
    /**
     * @var array $optionFields
     */
    private $optionFields;

    public function __construct()
    {
        $this->optionFields = [];
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
     * @return OptionGroup
     */
    public function setText($text): OptionGroup
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptionFields()
    {
        return $this->optionFields;
    }

    /**
     * @param OptionFields $optionField
     * @return OptionGroup
     */
    public function addOptionField(OptionFields $optionField): OptionGroup
    {
        $this->optionFields[] = $optionField;
        return $this;
    }
}
