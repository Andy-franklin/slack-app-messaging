<?php

namespace AndyFranklin\SlackAppMessaging\Dialog;

class OptionGroup
{
    /**
     * @var string $label
     */
    private $label;

    /**
     * @var array $options
     */
    private $options;


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
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }
}
