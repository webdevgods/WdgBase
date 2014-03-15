<?php
namespace WdgBase\Form;

use Zend\Form\Element, Zend\Form\Element\Csrf;

class PostFormAbstract extends \Zend\Form\Form
{
    public function __construct($name = null, $options = array())
    {
        parent::__construct($name, $options);
        
//        $this->useInputFilterDefaults(false);
        
        $this->setAttribute('method', 'post');
        
        $this->add(new Csrf('csrf'));
        
        $submitElement = new Element\Button('submit');
        $submitElement
            ->setLabel('Submit')
            ->setAttributes(array(
                'type'  => 'submit',
                'class' => 'btn'
            ));

        $this->add($submitElement, array(
            'priority' => -100,
        ));
    }
}