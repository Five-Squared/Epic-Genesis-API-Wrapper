<?php
class Genesis_Client
{
    protected $_username;
    
    protected $_password;

    protected $_endpoint;
    
    public function __construct($username, $password, $endpoint = null)
    {
        $this->_username = $username;
        $this->_password = $password;
        $this->_endpoint = $endpoint;
    }

    public function getByPath($path)
    {
        if (!$this->_endpoint) {
            throw new \Exception('Method not available when endpoint is not configured');
        }

        return $this->get($this->_endpoint . '/' . $path);
    }

    public function putByPath($path, $data)
    {
        if (!$this->_endpoint) {
            throw new \Exception('Method not available when endpoint is not configured');
        }

        return $this->put($this->_endpoint . '/' . $path, $data);
    }
    
    public function get($link)
    {
        $uri = $this->_getUri($link);
        
        $response = $this->_getClient($uri)->restGet($uri->getPath());

        if (!$response) {
            throw new Exception('Error fetching from ' . $href);
        }

        return $this->_getResource($response);
    }

    public function put($link, $data)
    {
        $uri = $this->_getUri($link);

        $response = $this->_getClient($uri)->restPut($uri->getPath(), $data);

        if (!$response) {
            throw new Exception('Error sending request to ' . $href);
        }
        
        return $this->_getResource($response);
    }

    protected function _getResource($response)
    {
        $xml = simplexml_load_string($response->getBody());
        if (!$xml) {
            throw new Exception('Failed to load XML from ' . $href);
        }
        
        $resource = Genesis_Factory::createResource($xml);

        if ($resource instanceof Genesis_Resource_Error) {
            throw new Exception('Error response returned (' . $response->getStatus() . ') with message ' . $response->getBody());
        }
    
        return $resource;
    }

    protected function _getUri($link)
    {
        if ($link instanceof SimpleXMLElement && $link->getName() == 'Link') {
            $href = (string) $link['href'];
        } else {
            $href = $link;
        }
        
        if (empty($href)) {
            throw new Exception('No href for link ' . $link);
        }

        return Zend_Uri_Http::fromString($href);
    }

    protected function _getClient($uri)
    {
        $url = $uri->getScheme() . '://' . $uri->getHost();
        
        $client = new Zend_Rest_Client($url);

        $client->getHttpClient()
            ->resetParameters(true)
            ->setHeaders('Accept','application/xml')
            ->setAuth($this->_username, $this->_password, Zend_Http_Client::AUTH_BASIC)
            ->setConfig(array('timeout' => 60));

        return $client;
    }
}
