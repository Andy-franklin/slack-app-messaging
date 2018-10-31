<?php

namespace AndyFranklin\SlackAppMessaging\Dialog;

use AndyFranklin\SlackAppMessaging\Model\FormElement;

/**
 * Class TextareaElement
 * @package AndyFranklin\SlackAppMessaging\Dialog
 */
class TextareaElement implements FormElement
{
    /**
     * Label displayed to user. Required. No more than 24 characters.
     * @var string $label
     */
    private $label;
    /**
     * Name of form element. Required. No more than 300 characters.
     * @var string $name
     */
    private $name;
    /**
     * For a text area, the type is always textarea. It's required.
     * @var string $type
     */
    private $type = 'textarea';
    /**
     * A string displayed as needed to help guide users in completing the element. 150 character maximum.
     * @var string $placeholder
     */
    private $placeholder;
    /**
     * Maximum input length allowed for element. 0-3000 characters. Defaults to 3000.
     * @var integer $max_length
     */
    private $max_length;
    /**
     * Minimum input length allowed for element. 1-3000 characters. Defaults to 0.
     * @var integer $min_length
     */
    private $min_length;
    /**
     * Provide true when the form element is not required. By default, form elements are required.
     * @var boolean $optional
     */
    private $optional;
    /**
     * Helpful text provided to assist users in answering a question. Up to 150 characters.
     * @var string $hint
     */
    private $hint;
    /**
     * A subtype for this text area, just in case you need a lot of space for them. email, number, tel, or url
     * @var string $subtype
     */
    private $subtype;
    /**
     * A default value for this field. Up to 3000 characters.
     * @var string $value
     */
    private $value;

    /**
     * @return string
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     * @return TextareaElement
     */
    public function setPlaceholder(string $placeholder): TextareaElement
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->max_length;
    }

    /**
     * @param int $max_length
     * @return TextareaElement
     */
    public function setMaxLength(int $max_length): TextareaElement
    {
        $this->max_length = $max_length;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLength(): int
    {
        return $this->min_length;
    }

    /**
     * @param int $min_length
     * @return TextareaElement
     */
    public function setMinLength(int $min_length): TextareaElement
    {
        $this->min_length = $min_length;
        return $this;
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
     * @return TextareaElement
     */
    public function setOptional(bool $optional): TextareaElement
    {
        $this->optional = $optional;
        return $this;
    }

    /**
     * @return string
     */
    public function getHint(): string
    {
        return $this->hint;
    }

    /**
     * @param string $hint
     * @return TextareaElement
     */
    public function setHint(string $hint): TextareaElement
    {
        $this->hint = $hint;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubtype(): string
    {
        return $this->subtype;
    }

    /**
     * @param string $subtype
     * @return TextareaElement
     */
    public function setSubtype(string $subtype): TextareaElement
    {
        $this->subtype = $subtype;
        return $this;
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
     * @return TextareaElement
     */
    public function setValue(string $value): TextareaElement
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return TextareaElement
     */
    public function setLabel(string $label): TextareaElement
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TextareaElement
     */
    public function setName(string $name): TextareaElement
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
