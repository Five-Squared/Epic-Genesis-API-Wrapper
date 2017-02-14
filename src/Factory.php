<?php
class Genesis_Factory
{
    public static function createResource(SimpleXMLElement $xml)
    {
        $class = 'Genesis_Resource_' . $xml->getName();
        if (!class_exists($class)) {
            throw new Exception('No class exists for resource ' . $xml->getName());
        }
        return new $class($xml);
    }
}
