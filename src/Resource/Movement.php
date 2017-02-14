<?php
class Genesis_Resource_Movement extends Genesis_Resource
{
    protected $_xml;
    
    protected $_orders = array();
    
    public function __construct(SimpleXMLElement $xml)
    {
        $this->_xml = $xml;
    }
    
    public function getId()
    {
        return (int) $this->_xml->Id;
    }
    
    public function getSupplier()
    {
        return (int) $this->_xml->Supplier;
    }
    
    public function getDeliveryDate()
    {
        return (string) $this->_xml->DeliveryDate;
    }
    
    public function getPrice()
    {
        return (string) $this->_xml->Price;
    }
    
    public function getQty()
    {
        return (string) $this->_xml->Qty;
    }
    
    public function getQtyDifference()
    {
        return (string) $this->_xml->QtyDifference;
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
    
    public function getInvoiceNo()
    {
        return (string) $this->_xml->InvoiceNo;
    }
    
    public function getInvoiceDate()
    {
        return (string) $this->_xml->InvoiceDate;
    }
    
    public function getStatus()
    {
        return (int) $this->_xml->Status;
    }
    
    public function getReferenceNo()
    {
        return (string) $this->_xml->ReferenceNo;
    }
    
    public function getTypeName()
    {
        return (string) $this->_xml->TypeName;
    }
}
