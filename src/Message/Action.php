<?php

namespace AndyFranklin\SlackAppMessaging\Message;

/**
 * Class Action
 * @package AndyFranklin\SlackAppMessaging\Message
 */
class Action
{
    //todo doc blocks
    private $name;

    private $text;

    private $type;

    private $value;

    /**
     * @var ConfirmationField
     */
    private $confirm;

    private $style;

    private $options;

    private $option_groups;

    private $selected_options;

    private $min_query_length;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Action
     */
    public function setName($name): Action
    {
        $this->name = $name;
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
     * @return Action
     */
    public function setText($text): Action
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Action
     */
    public function setType($type): Action
    {
        $this->type = $type;
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
     * @return Action
     */
    public function setValue($value): Action
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * @param ConfirmationField $confirm
     * @return Action
     */
    public function setConfirm(ConfirmationField $confirm): Action
    {
        $this->confirm = $confirm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     * @return Action
     */
    public function setStyle($style): Action
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     * @return Action
     */
    public function setOptions($options): Action
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptionGroups()
    {
        return $this->option_groups;
    }

    /**
     * @param mixed $option_groups
     * @return Action
     */
    public function setOptionGroups($option_groups): Action
    {
        $this->option_groups = $option_groups;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelectedOptions()
    {
        return $this->selected_options;
    }

    /**
     * @param mixed $selected_options
     * @return Action
     */
    public function setSelectedOptions($selected_options): Action
    {
        $this->selected_options = $selected_options;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinQueryLength()
    {
        return $this->min_query_length;
    }

    /**
     * @param mixed $min_query_length
     * @return Action
     */
    public function setMinQueryLength($min_query_length): Action
    {
        $this->min_query_length = $min_query_length;
        return $this;
    }
}
