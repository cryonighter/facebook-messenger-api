<?php

namespace Cryonighter\Facebook\Messenger\VO\Type;

class TemplateType extends Type
{
    public const TYPE_BUTTON = 'button';

    /**
     * @return array
     */
    protected static function getTypes(): array
    {
        return [
            self::TYPE_BUTTON,
        ];
    }
}
