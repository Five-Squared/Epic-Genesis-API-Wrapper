<?php
class Genesis_Resource_Address extends Genesis_Resource
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
    
    public function getCustomer()
    {
        return (string) $this->_xml->Customer;
    }
    
    public function getCode()
    {
        return (string) $this->_xml->Code;
    }
    
    public function getDescription()
    {
        return (string) $this->_xml->Description;
    }
    
    public function getLine1()
    {
        return (string) $this->_xml->Line1;
    }
    
    public function getLine2()
    {
        return (string) $this->_xml->Line2;
    }
    
    public function getLine3()
    {
        return (string) $this->_xml->Line3;
    }
    
    public function getLine4()
    {
        return (string) $this->_xml->Line4;
    }
   
    public function getProvince()
    {
        return (string) $this->_xml->Province;
    }
   
    public function getCountry()
    {
        return (string) $this->_xml->Country;
    }
   
    public function getStatus()
    {
        return (string) $this->_xml->Status;
    }
   
}
