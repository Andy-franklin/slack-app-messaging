<?php

namespace AndyFranklin\SlackAppMessaging\Dialog;

class Dialog
{
    /**
     * User-facing title of this entire dialog. 24 characters to work with and it's required.
     * @var string $title
     */
    private $title;

    /**
     * An identifier strictly for you to recognize submissions of this particular instance of a dialog.
     * Use something meaningful to your app. 255 characters maximum. Absolutely required.
     * @var string $callback_id
     */
    private $callback_id;

    /**
     * Up to 5 form elements are allowed per dialog. Required.
     * @var array $elements
     */
    private $elements;

    /**
     * User-facing string for whichever button-like thing submits the form, depending on form factor.
     * Defaults to Submit, localized in whichever language the end user prefers. 24 characters maximum, and may contain only a single word.
     * @var string $submit_label
     */
    private $submit_label;

    /**
     * Default is false. When set to true, we'll notify your request URL whenever there's a user-induced dialog cancellation.
     * @var boolean $notify_on_cancel
     */
    private $notify_on_cancel;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Dialog
     */
    public function setTitle(string $title): Dialog
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackId(): string
    {
        return $this->callback_id;
    }

    /**
     * @param string $callback_id
     * @return Dialog
     */
    public function setCallbackId(string $callback_id): Dialog
    {
        $this->callback_id = $callback_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param $element
     * @return Dialog
     */
    public function addElement($element): Dialog
    {
        $this->elements[] = $element;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubmitLabel(): string
    {
        return $this->submit_label;
    }

    /**
     * @param string $submit_label
     * @return Dialog
     */
    public function setSubmitLabel(string $submit_label): Dialog
    {
        $this->submit_label = $submit_label;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNotifyOnCancel(): bool
    {
        return $this->notify_on_cancel;
    }

    /**
     * @param bool $notify_on_cancel
     * @return Dialog
     */
    public function setNotifyOnCancel(bool $notify_on_cancel): Dialog
    {
        $this->notify_on_cancel = $notify_on_cancel;
        return $this;
    }
}
