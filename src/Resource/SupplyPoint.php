<?php
class Genesis_Resource_SupplyPoint extends Genesis_Resource
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
    
    public function getCode()
    {
        return (string) $this->_xml->Code;
    }
    
    public function getSupplier()
    {
        return (string) $this->_xml->Supplier;
    }
    
    public function getDistrict()
    {
        return (string) $this->_xml->District;
    }
   
    public function getFax()
    {
        return (string) $this->_xml->Fax;
    }
   
    public function getEmail()
    {
        return (string) $this->_xml->Email;
    }
}
