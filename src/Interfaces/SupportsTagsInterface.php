<?php
declare(strict_types=1);

namespace Azonmedia\Tags\Base\Interfaces;

interface SupportsTagsInterface
{
    /**
     * Returns a collection\array of Tag.
     * @return iterable
     */
    public function get_tags() : iterable ;

    /**
     * Returns FALSE if the object already has the provided tag.
     * @param TagInterface $TagInterface
     * @return bool
     */
    public function add_tag(TagInterface $TagInterface) : bool ;

    /**
     * Returns FALSE if the object does not have the provided tag.
     * @param TagInterface $TagInterface
     * @return bool
     */
    public function remove_tag(TagInterface $TagInterface) : bool ;
}