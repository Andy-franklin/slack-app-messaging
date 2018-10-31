<?php

namespace AndyFranklin\SlackAppMessaging\Message;

class OptionFields
{
    private $options = [];

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param Option $option
     * @return OptionFields
     */
    public function addOption(Option $option): OptionFields
    {
        $this->options[] = $option;
        return $this;
    }
}
