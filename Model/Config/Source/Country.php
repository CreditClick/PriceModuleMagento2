<?php

namespace CreditClick\PriceModule\Model\Config\Source;

class Country implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'nl' => 'NL',
            'de' => 'DE',
        ];
    }
}