<?php
class Genesis_Resource_Margin extends Genesis_Resource
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

    public function getFirst()
    {
        return $this->getEntry(0);
    }

    public function getEntry($no)
    {
        return $this->_xml->Entry[$no];
    }
}
