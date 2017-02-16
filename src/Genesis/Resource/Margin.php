<?php
class Genesis_Resource_Address extends Genesis_Resource
{
    protected $_xml;
    
    public function __construct(SimpleXMLElement $xml)
    {
        $this->_xml = $xml;
    }
    
    public function getKey()
    {
        return (string) $this->_xml->Key;
    }
    
    public function getAverage()
    {
        return (string) $this->_xml->Average;
    }
}
