<?php

namespace AndyFranklin\SlackAppMessaging\Model;

interface FormElement
{
    public function getLabel();

    public function getName();

    public function getType();
}
