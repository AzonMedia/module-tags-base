<?php
declare(strict_types=1);

namespace GuzabaPlatofrm\Tags\Base\Interfaces;

interface TagInterface
{
    /**
     * Returns the tag name.
     * @return string
     */
    public function get_name() : string ;

    /**
     * Creates a new tag and returns the newly created object.
     * @param string $tag_name
     * @return object
     */
    public static function create(string $tag_name) : object ;
}