<?php
class Genesis_Resource_Procurement extends Genesis_Resource
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
    
    public function getProduct()
    {
        return (int) $this->_xml->Product;
    }
    
    public function getPrice()
    {
        return (string) $this->_xml->Price;
    }
    
    public function getRebate()
    {
        return (string) $this->_xml->Rebate;
    }
    
    public function getQty()
    {
        return (string) $this->_xml->Qty;
    }
    
    public function getSupplyPoint()
    {
        return (int) $this->_xml->SupplyPoint;
    }
    
    public function getSupplyDate()
    {
        return (string) $this->_xml->SupplyDate;
    }
    
    public function getInvoiceNo()
    {
        return (string) $this->_xml->InvoiceNo;
    }
    
    public function getInvoiceDate()
    {
        return (string) $this->_xml->InvoiceDate;
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
    
    public function getSpecialRebate()
    {
        return (string) $this->_xml->SpecialRebate;
    }
    
    public function getStatus()
    {
        return (string) $this->_xml->Status;
    }
    
    public function getReferenceNo()
    {
        return (string) $this->_xml->ReferenceNo;
    }
    
    public function getUpliftNo()
    {
        return (string) $this->_xml->UpliftNo;
    }
    
    public function isPaid()
    {
        return ((int) $this->_xml->Paid == 1);
    }
    
    public function getTrackingNo()
    {
        return (string) $this->_xml->TrackingNo;
    }
    
    public function getOutstandingBalance()
    {
        return (string) $this->_xml->OutstandingBalance;
    }

    public function getOrders()
    {
        return $this->_xml->xpath('/Procurement/Orders/Order');
    }
}
