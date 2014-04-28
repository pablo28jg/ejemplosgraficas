<?php
namespace Acme\DemoBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class BooleanType extends AbstractType
{
	public function getDefaultOptions(integer $value)
	{
		if ($value === 1)
			return true;
		else 
			return false;
	}
	public function getParent(array $options)
	{
		return 'checkbox';
	}
	public function getName()
	{
		return 'boolean';
	}
}