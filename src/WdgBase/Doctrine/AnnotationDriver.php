<?php
namespace WdgBase\Doctrine;

class AnnotationDriver extends \Doctrine\ORM\Mapping\Driver\AnnotationDriver
{
    public function __construct($reader, $paths = null) 
    {
        parent::__construct($reader, $paths);
    }
}