<?php
class Genesis_Resource_Order extends Genesis_Resource
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
    
    public function getProduct()
    {
        return (int) $this->_xml->Product;
    }
    
    public function getOrderDate()
    {
        return (string) $this->_xml->OrderDate;
    }
    
    public function getPreferredSupplyDate()
    {
        return (string) $this->_xml->PreferredSupplyDate;
    }
    
    public function getPrice()
    {
        return (string) $this->_xml->Price;
    }
    
    public function getRebate()
    {
        return (string) $this->_xml->Rebate;
    }
    
    public function getQtyOrdered()
    {
        return (int) $this->_xml->QtyOrdered;
    }
    
    public function getQtySupplied()
    {
        return (int) $this->_xml->QtySupplied;
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
    
    public function getFile()
    {
        return (string) $this->_xml->File;
    }

    public function getPurchaseOrder()
    {
        return (string) $this->_xml->PurchaseOrder;
    }
    
    public function getNotifyAddress()
    {
        return (string) $this->_xml->NotifyAddress;
    }
    
    public function getType()
    {
        return (string) $this->_xml->Type;
    }
    
    public function getAuthorise()
    {
        return (string) $this->_xml->Authorise;
    }
    
    public function getStatus()
    {
        return (string) $this->_xml->Status;
    }
    
    public function getPayment()
    {
        return (string) $this->_xml->Payment;
    }
    
    public function getSettledBy()
    {
        return (string) $this->_xml->SettledBy;
    }
    
    public function getOutstandingBalance()
    {
        return (string) $this->_xml->OutstandingBalance;
    }

    public function getTransport()
    {
        return $this->_xml->Transport;
    }

    public function getSupplyOption()
    {
        return (int) $this->_xml->SupplyOption;
    }
    
    public function getSupplyId()
    {
        return (int) $this->_xml->Supply->Id;
    }
    
    public function getSupplyPrice()
    {
        return (string) $this->_xml->Supply->Price;
    }
    
    public function getSupplyRebate()
    {
        return (string) $this->_xml->Supply->Rebate;
    }
    
    public function getSupplyQty()
    {
        return (int) $this->_xml->Supply->Qty;
    }
    
    public function getSupplySubTotal()
    {
        return (string) $this->_xml->Supply->SubTotal;
    }
    
    public function getSupplyTax()
    {
        return (string) $this->_xml->Supply->Tax;
    }
    
    public function getSupplyTotal()
    {
        return (string) $this->_xml->Supply->Total;
    }
    
    public function getSupplyLink($part = null)
    {
        if ($part !== null) {
            $this->_getLinkPart($this->_xml->Supply->Link, $part);
        }
        return $this->_xml->Supply->Link;
    }

    public function getFinance()
    {
        return $this->_xml->Finance;
    }
}
