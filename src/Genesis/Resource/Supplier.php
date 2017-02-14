<?php
class Genesis_Resource_Supplier extends Genesis_Resource
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
    
    public function getTerms()
    {
        return (string) $this->_xml->Terms;
    }
   
    public function getSource()
    {
        return (string) $this->_xml->Source;
    }
   
    public function getFax()
    {
        return (string) $this->_xml->Fax;
    }
   
    public function getEmail()
    {
        return (string) $this->_xml->Email;
    }
   
    public function getStatus()
    {
        return (string) $this->_xml->Status;
    }
   
}
