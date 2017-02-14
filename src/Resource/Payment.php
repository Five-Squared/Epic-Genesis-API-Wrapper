<?php
class Genesis_Resource_Payment extends Genesis_Resource
{
    protected $_xml;
    
    protected $_procurements = array();
    
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

    public function getBank()
    {
        return (string) $this->_xml->Bank;
    }
    
    public function getAccount()
    {
        return (string) $this->_xml->Account;
    }
    
    public function getDate()
    {
        return (string) $this->_xml->Date;
    }
    
    public function getAmount()
    {
        return (string) $this->_xml->Amount;
    }
    
    public function getBalance()
    {
        return (string) $this->_xml->Balance;
    }
    
    public function getComment()
    {
        return (string) $this->_xml->Comment;
    }

    public function getProcurements()
    {
        return $this->_xml->xpath('/Receipt/Allocation/Procurements/Procurement');
    }

    public function getMemos()
    {
        return $this->_xml->xpath('/Receipt/Allocation/Memos/Memo');
    }
}
