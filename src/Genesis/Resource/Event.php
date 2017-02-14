<?php
class Genesis_Resource_Event extends Genesis_Resource
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
    
    public function getTimestamp()
    {
        return (string) $this->_xml->Timestamp;
    }
    
    public function getResourceName()
    {
        return (string) $this->_xml->Resource;
    }
    
    public function getName()
    {
        return (string) $this->_xml->Name;
    }
    
    /**
     * @param string $part
     * @return <string, SimpleXMLElement>
     */
    public function getLink($part = null)
    {
        if ($part !== null) {
            $this->_getLinkPart($this->_xml->Link, $part);
        }
        
        return $this->_xml->Link;
    }
}
