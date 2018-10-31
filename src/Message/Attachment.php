<?php

namespace AndyFranklin\SlackAppMessaging\Message;

class Attachment
{
    private $title;
    private $title_link;
    private $text;
    private $pretext;
    private $fallback;
    private $callback_id;
    private $color;
    private $actions;
    private $attachment_type = 'default';
    private $author_name;
    private $author_link;
    private $author_icon;
    private $image_url;
    private $thumb_url;
    private $footer;
    private $footer_icon;
    private $ts;
    private $fields;

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param Field $field
     */
    public function addField(Field $field): void
    {
        $this->fields[] = $field;
    }

    /**
     * @return mixed
     */
    public function getTitleLink()
    {
        return $this->title_link;
    }

    /**
     * @param mixed $title_link
     * @return Attachment
     */
    public function setTitleLink($title_link): Attachment
    {
        $this->title_link = $title_link;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * @param mixed $author_name
     * @return Attachment
     */
    public function setAuthorName($author_name): Attachment
    {
        $this->author_name = $author_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorLink()
    {
        return $this->author_link;
    }

    /**
     * @param mixed $author_link
     * @return Attachment
     */
    public function setAuthorLink($author_link): Attachment
    {
        $this->author_link = $author_link;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorIcon()
    {
        return $this->author_icon;
    }

    /**
     * @param mixed $author_icon
     * @return Attachment
     */
    public function setAuthorIcon($author_icon): Attachment
    {
        $this->author_icon = $author_icon;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @param mixed $image_url
     * @return Attachment
     */
    public function setImageUrl($image_url): Attachment
    {
        $this->image_url = $image_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbUrl()
    {
        return $this->thumb_url;
    }

    /**
     * @param mixed $thumb_url
     * @return Attachment
     */
    public function setThumbUrl($thumb_url): Attachment
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param mixed $footer
     * @return Attachment
     */
    public function setFooter($footer): Attachment
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFooterIcon()
    {
        return $this->footer_icon;
    }

    /**
     * @param mixed $footer_icon
     * @return Attachment
     */
    public function setFooterIcon($footer_icon): Attachment
    {
        $this->footer_icon = $footer_icon;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param mixed $ts
     * @return Attachment
     */
    public function setTs($ts): Attachment
    {
        $this->ts = $ts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Attachment
     */
    public function setTitle($title): Attachment
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * @param mixed $fallback
     * @return Attachment
     */
    public function setFallback($fallback): Attachment
    {
        $this->fallback = $fallback;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallbackId()
    {
        return $this->callback_id;
    }

    /**
     * @param mixed $callback_id
     * @return Attachment
     */
    public function setCallbackId($callback_id): Attachment
    {
        $this->callback_id = $callback_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     * @return Attachment
     */
    public function setColor($color): Attachment
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param Action $action
     * @return Attachment
     */
    public function addAction(Action $action): Attachment
    {
        $this->actions[] = $action;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttachmentType()
    {
        return $this->attachment_type;
    }

    /**
     * @param mixed $attachment_type
     * @return Attachment
     */
    public function setAttachmentType($attachment_type): Attachment
    {
        $this->attachment_type = $attachment_type;
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
     * @return Attachment
     */
    public function setText($text): Attachment
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPretext()
    {
        return $this->pretext;
    }

    /**
     * @param mixed $pretext
     * @return Attachment
     */
    public function setPretext($pretext): Attachment
    {
        $this->pretext = $pretext;
        return $this;
    }
}
