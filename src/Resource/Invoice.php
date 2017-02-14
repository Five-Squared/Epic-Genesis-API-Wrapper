<?php
class Genesis_Resource_Invoice extends Genesis_Resource
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
        return (int) $this->_xml->Customer;
    }
    
    public function getDocumentNo()
    {
        return (string) $this->_xml->DocumentNo;
    }
    
    public function getDate()
    {
        return (string) $this->_xml->Date;
    }
    
    public function getSubTotal()
    {
        return (string) $this->_xml->SubTotal;
    }
    
    public function getTax()
    {
        return (string) $this->_xml->Tax;
    }
    
    public function getTotal()
    {
        return (string) $this->_xml->Total;
    }
    
    public function getOrders()
    {
        return $this->_xml->xpath('/Invoice/Orders/Order');
    }
}
