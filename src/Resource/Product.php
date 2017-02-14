<?php
class Genesis_Resource_Product extends Genesis_Resource
{
    protected $_xml;
    
    public function __construct(SimpleXMLElement $xml)
    {
        $this->_xml = $xml;
    }
    
    public function getId()
    {
        return (int) $this->_xml->Id;
    }
    
    public function getName()
    {
        return (string) $this->_xml->Name;
    }
}
