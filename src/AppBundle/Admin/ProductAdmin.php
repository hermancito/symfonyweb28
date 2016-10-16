<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProductAdmin extends AbstractAdmin
{
// Fields to be shown on create/edit forms
protected function configureFormFields(FormMapper $formMapper)
{
	$formMapper
		->add('name')
		->add('price')
		->add('description')
	;
}
// Fields to be shown on filter forms
protected function configureDatagridFilters(DatagridMapper $datagridMapper)
{
	$datagridMapper
		->add('name')
		->add('price')
	;
}
// Fields to be shown on lists
protected function configureListFields(ListMapper $listMapper)
{
	$listMapper
		->addIdentifier('id')
		->add('name')
		->add('price')
		->add('description')
		->add('_action', 'actions', array(
			'actions' => array(
			'edit' => array()
		)))
		;
	}
}
?>