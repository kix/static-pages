<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kix
 * Date: 01.10.12
 * Time: 18:58
 * To change this template use File | Settings | File Templates.
 */
namespace Kix\StaticPagesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StaticPageAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('parent', null, array('required' => false))
            ->add('slug')
            ->add('content')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('url')
        ;
    }

    /*public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
                ->with('title')
                ->assertMaxLength(array('limit' => 255))
                ->end()
            ;
        }*/

}
