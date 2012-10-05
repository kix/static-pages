<?php
/**
 * This class handles routing of nested page sets
 */
class StaticPageRepository
{

    /**
     * Finds pages matching given URL
     *
     * @param array $route Like "/page1/page2" => array('page1', 'page2')
     */
    public function findByRoute(array $route)
    {
        $pages = $this->findBy(array(
            'slug' => array_pop($route),
        ));

        /**
         * If route is 1 step long and there's only one such page found, return it
         */
        if (count($route) == 1 && count($pages) == 1) {
            return $pages[0];
        } else {
            foreach ($pages as $page) {
                if (count(array_diff($page->getPath(), $route)) == 0) {
                    return $page;
                }
            }
            return null;
        }
    }

}
