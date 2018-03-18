<?php

namespace Xervice\DataProvider\Parser;

interface XmlMergerInterface
{
    /**
     * @param string $xml
     */
    public function addXml(string $xml);

    /**
     * @return array
     */
    public function getData();
}