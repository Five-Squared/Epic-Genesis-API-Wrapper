<?php
abstract class Genesis_Resource
{
    protected function _getLinkPart(SimpleXMLElement $link,$part)
    {
        if (strcmp($link['rel'][0], $part)) {
            return (string) $link['href'][0];
        }
    }
    
    /**
     * @param string $rel
     * @param string $part
     * @return <string, SimpleXMLElement>
     */
    public function getLink($rel = 'self', $part = null)
    {
        $links = $this->_xml->xpath("//Link[@rel='{$rel}']");

        if (empty($links)) {
            throw new Exception("{$rel} link not found");
        }

        if ($part !== null) {
            return $this->_getLinkPart($links[0]->attributes(), $part);
        }
    
        return $links[0];
    }
}
