<?php


namespace AndyFranklin\SlackAppMessaging\Dialog;

/**
 * This differs from the Message option for some reason.
 * Class Option
 * @package AndyFranklin\SlackAppMessaging\Dialog
 */
class Option
{
    /**
     * @var string $label
     */
    private $label;

    /**
     * @var string $value
     */
    private $value;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
