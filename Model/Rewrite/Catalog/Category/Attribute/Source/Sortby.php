<?php

namespace Sortby\productlist\Model\Rewrite\Catalog\Category\Attribute\Source;

class Sortby extends \Magento\Catalog\Model\Category\Attribute\Source\Sortby {
	/**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [['label' => __('Position'), 'value' => 'position']];
            foreach ($this->_getCatalogConfig()->getAttributesUsedForSortBy() as $attribute) {
                $this->_options[] = [
                    'label' => __($attribute['frontend_label']),
                    'value' => $attribute['attribute_code'],
                ];
            }
            $options[] = ['label' => __('Bestseller'), 'value' => 'bestseller'];
            $options[] = ['label' => __('Rating'), 'value' => 'rating_summary'];
        }
        return $this->_options;
    }
}