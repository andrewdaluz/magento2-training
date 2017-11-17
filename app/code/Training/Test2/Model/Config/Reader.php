<?php
namespace Training\Test2\Model\Config; 

class Reader extends \Magento\Framework\Config\Reader\Filesystem 
{
	/**
	* List of id attributes for merge
	*
	* @var array
	*/
    protected $_idAttributes = []; //['/config/option' => 'name', '/config/option/inputType' => 'name'];                                                                                                                 
	/**
	* @param \Magento\Framework\Config\FileResolverInterface $fileResolver
	* @param \Magento\Catalog\Model\ProductOptions\Config\Converter $converter
	* @param \Magento\Catalog\Model\ProductOptions\Config\SchemaLocator
	* $schemaLocator
	* @param \Magento\Framework\Config\ValidationStateInterface $validationState
	* @param string $fileName
	* @param array $idAttributes
	* @param string $domDocumentClass
	* @param string $defaultScope
	*/
    public function __construct(
        \Magento\Framework\Config\FileResolverInterface $fileResolver,
        \Training\Test2\Model\Config\Converter $converter,
        \Training\Test2\Model\Config\SchemaLocator $schemaLocator,
        \Magento\Framework\Config\ValidationStateInterface $validationState,
        $fileName = 'test2.xml',
        $idAttributes = [], 
        $domDocumentClass = 'Magento\Framework\Config\Dom',
        $defaultScope = 'global'
    ) {
        parent::__construct(
            $fileResolver,
            $converter,
            $schemaLocator,
            $validationState,
            $fileName,
            $idAttributes,
            $domDocumentClass,
            $defaultScope
        );
    } 
} 