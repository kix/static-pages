<?php

namespace Kix\StaticPagesBundle\Entity;

use Kix\StaticPagesBundle\Entity\Page;

/**
 * Some simple tests
 */
class StaticPageTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Try to match a path in a two-level page hierarchy
     */
    public function testGetPath()
    {
        $child = new Page();
        $child->setSlug('page');

        $parent = new Page();
        $parent->setSlug('parent');

        $child->setParent($parent);

        $this->assertEmpty(array_diff(
            $child->getPath(),
            array('parent', 'page')
        ));
    }

}
