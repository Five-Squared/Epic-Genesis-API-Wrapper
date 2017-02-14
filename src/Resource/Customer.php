<?php
class Genesis_Resource_Customer extends Genesis_Resource
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
    
    public function getCode()
    {
        return (string) $this->_xml->Code;
    }
    
    public function getName()
    {
        return (string) $this->_xml->Name;
    }
   
    public function getStatus()
    {
        return (string) $this->_xml->Status;
    }

    public function getTerms()
    {
        return (string) $this->_xml->Terms;
    }
   
    public function getTelephone()
    {
        return (string) $this->_xml->Telephone;
    }
   
    public function getCellphone()
    {
        return (string) $this->_xml->Cellphone;
    }
   
    public function getEmail()
    {
        return (string) $this->_xml->Email;
    }
   
    public function getFacsimile()
    {
        return (string) $this->_xml->Fax;
    }
   
}
