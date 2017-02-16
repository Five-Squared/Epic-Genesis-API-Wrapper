<?php
class Genesis_Resource_Volume extends Genesis_Resource
{
    protected $_xml;
    
    public function __construct(SimpleXMLElement $xml)
    {
        $this->_xml = $xml;
    }
    
    public function getEntries()
    {
        return $this->_xml->Entry;
    }
}
