<?php

namespace AndyFranklin\SlackAppMessaging\Dialog;

use AndyFranklin\SlackAppMessaging\Model\FormElement;

class TextElement implements FormElement
{
    /**
     * Label displayed to user. Required. 24 character maximum.
     * @var string $label
     */
    private $label;

    /**
     * Name of form element. Required. No more than 300 characters.
     * @var string $name
     */
    private $name;

    /**
     * The type of form element. For a text input, the type is always text. Required.
     * @var string $type
     */
    private $type = 'text';

    /**
     * Maximum input length allowed for element. Up to 150 characters. Defaults to 150.
     * @var integer $max_length
     */
    private $max_length;

    /**
     * Minimum input length allowed for element. Up to 150 characters. Defaults to 0.
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
     * A subtype for this text input. Accepts email, number, tel, or url. In some form factors, optimized input is provided for this subtype.
     * @var string $subtype
     */
    private $subtype;

    /**
     * A default value for this field. Up to 150 characters.
     * @var string $value
     */
    private $value;

    /**
     * A string displayed as needed to help guide users in completing the element. 150 character maximum.
     * @var string $placeholder
     */
    private $placeholder;

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->max_length;
    }

    /**
     * @param int $max_length
     * @return TextElement
     */
    public function setMaxLength(int $max_length): TextElement
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
     * @return TextElement
     */
    public function setMinLength(int $min_length): TextElement
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
     * @return TextElement
     */
    public function setOptional(bool $optional): TextElement
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
     * @return TextElement
     */
    public function setHint(string $hint): TextElement
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
     * @return TextElement
     */
    public function setSubtype(string $subtype): TextElement
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
     * @return TextElement
     */
    public function setValue(string $value): TextElement
    {
        $this->value = $value;
        return $this;
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
     * @return TextElement
     */
    public function setPlaceholder(string $placeholder): TextElement
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return TextElement
     */
    public function setLabel(string $label): TextElement
    {
        $this->label = $label;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TextElement
     */
    public function setName(string $name): TextElement
    {
        $this->name = $name;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
}
