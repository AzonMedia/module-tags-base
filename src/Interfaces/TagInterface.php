<?php
declare(strict_types=1);

namespace GuzabaPlatofrm\Tags\Base\Interfaces;

interface TagInterface
{
    public function get_name() : string ;

    public static function create(string $tag_name) : object ;
}