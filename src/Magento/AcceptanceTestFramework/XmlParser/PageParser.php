<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\AcceptanceTestFramework\XmlParser;

use Magento\AcceptanceTestFramework\Config\DataInterface;
use Magento\AcceptanceTestFramework\ObjectManagerInterface;

/**
 * Generic Xml Parser.
 */
class PageParser implements ParserInterface
{
    /**
     * Object manager.
     *
     * @var \Magento\AcceptanceTestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * Configuration data.
     *
     * @var DataInterface
     */
    protected $configData;

    /**
     * PageParser Constructor
     * @param ObjectManagerInterface $objectManager
     * @param DataInterface $configData
     */
    public function __construct(ObjectManagerInterface $objectManager, DataInterface $configData)
    {
        $this->objectManager = $objectManager;
        $this->configData = $configData;
    }

    /**
     * Get parsed xml data.
     * @param string $type
     * @return array
     */
    public function getData($type)
    {
        return $this->configData->get($type);
    }
}