<?php
class Genesis_Client
{
    protected $_username;
    
    protected $_password;
    
    public function __construct($username, $password)
    {
        $this->_username = $username;
        $this->_password = $password;
    }
    
    public function get($link)
    {
        if ($link instanceof SimpleXMLElement && $link->getName() == 'Link') {
            $href = (string) $link['href'];
        } else {
            $href = $link;
        }
        
        if (empty($href)) {
            throw new Exception('No href for link ' . $link);
        }
        $uri = Zend_Uri_Http::fromString($href);
        
        $client = new Zend_Rest_Client($uri->getScheme() . '://' . $uri->getHost());
        $client->getHttpClient()
            ->resetParameters(true)
            ->setHeaders('Accept','application/xml')
            ->setAuth($this->_username, $this->_password, Zend_Http_Client::AUTH_BASIC);
        
        $response = $client->restGet($uri->getPath());
        if (!$response) {
            throw new Exception('Error fetching from ' . $href);
        }
        
        $xml = simplexml_load_string($response->getBody());
        if (!$xml) {
            throw new Exception('Failed to load XML from ' . $href);
        }
        
        $resource = Genesis_Factory::createResource($xml);

        if ($resource instanceof Genesis_Resource_Error) {
            //todo get decent error messages from API
            throw new Exception('Error object returned when calling ' . $href);
        }
    
        return $resource;
    }
}
