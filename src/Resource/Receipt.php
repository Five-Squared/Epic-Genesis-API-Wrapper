<?php
class Genesis_Resource_Receipt extends Genesis_Resource
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
    
    public function getCustomer()
    {
        return (int) $this->_xml->Customer;
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

    public function getOrders()
    {
        return $this->_xml->xpath('/Receipt/Allocation/Orders/Order');
    }

    public function getMemos()
    {
        return $this->_xml->xpath('/Receipt/Allocation/Memos/Memo');
    }
}
