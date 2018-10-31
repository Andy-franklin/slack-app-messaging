<?php


namespace AndyFranklin\SlackAppMessaging\Dialog;


use AndyFranklin\SlackAppMessaging\Model\FormElement;
use phpDocumentor\Reflection\Types\Integer;

class SelectElement implements FormElement
{
    /**
     * Label displayed to user. Required. No more than 24 characters.
     * @var string $label
     */
    private $label;
    /**
     * Set this to select for select elements.
     * @var string $type
     */
    private $type;
    /**
     * Name of form element. Required. No more than 300 characters.
     * @var string $name
     */
    private $name;
    /**
     * An array of objects containing a label and a list of options. Provide up to 100 option groups.
     * Either options or option_groups is required for the static and external.
     * options_groups[].label is a user-facing string for this option. 75 characters maximum. Required.
     * options_groups[].options is an array that contains a list of options. It is formatted like the options array
     * @var array $option_groups
     */
    private $option_groups;
    /**
     * Provide up to 100 options. Either options or option_groups is required for the static and external.
     * options[].label is a user-facing string for this option. 75 characters maximum. Required.
     * options[].value is a string value for your app. If an integer is used, it will be parsed as a string.
     * 75 characters maximum. Required.
     * @var array $options
     */
    private $options;
    /**
     * Set this to either users, channels, conversations, or external. Default value is static.
     * @var string $data_source
     */
    private $data_source;
    /**
     * Specify the number of characters that must be typed by a user into a dynamic select menu before dispatching to the app.
     * @var Integer $min_query_length
     */
    private $min_query_length;
    /**
     * A string displayed as needed to help guide users in completing the element. 150 character maximum.
     * @var string $placeholder
     */
    private $placeholder;
    /**
     * Provide true when the form element is not required. By default, form elements are required.
     * @var boolean
     */
    private $optional;
    /**
     * Provides a default selected value for select menus with a data_source of type static, users, channels, or conversations.
     * This option is invalid with data_source of type external, where you must use selected_options.
     * @var string $value
     */
    private $value;
    /**
     * Provides a default selected value for dynamic select menus with a data_source of type external.
     * This should be an array containing a single object that specifies the default label and value.
     * @var array $selected_options
     */
    private $selected_options;

    /**
     * @return array
     */
    public function getOptionGroups(): array
    {
        return $this->option_groups;
    }

    /**
     * @param array $option_groups
     */
    public function setOptionGroups(array $option_groups): void
    {
        $this->option_groups = $option_groups;
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

    /**
     * @return string
     */
    public function getDataSource(): string
    {
        return $this->data_source;
    }

    /**
     * @param string $data_source
     */
    public function setDataSource(string $data_source): void
    {
        $this->data_source = $data_source;
    }

    /**
     * @return int
     */
    public function getMinQueryLength(): int
    {
        return $this->min_query_length;
    }

    /**
     * @param int $min_query_length
     */
    public function setMinQueryLength(int $min_query_length): void
    {
        $this->min_query_length = $min_query_length;
    }

    /**
     * @return string
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     */
    public function setPlaceholder(string $placeholder): void
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return bool
     */
    public function isOptional(): bool
    {
        return $this->optional;
    }

    /**
     * @param bool $optional
     */
    public function setOptional(bool $optional): void
    {
        $this->optional = $optional;
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

    /**
     * @return array
     */
    public function getSelectedOptions(): array
    {
        return $this->selected_options;
    }

    /**
     * @param array $selected_options
     */
    public function setSelectedOptions(array $selected_options): void
    {
        $this->selected_options = $selected_options;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getType()
    {
        // TODO: Implement getType() method.
    }
}
