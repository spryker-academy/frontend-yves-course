<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Pyz\Yves\Category;

use Generated\Yves\Ide\FactoryAutoCompletion\CategoryCommunication;
use SprykerEngine\Yves\Kernel\AbstractDependencyContainer;
use Pyz\Yves\Category\ResourceCreator\CategoryResourceCreator;
use SprykerFeature\Client\CategoryExporter\Service\CategoryExporterClient;

class CategoryDependencyContainer extends AbstractDependencyContainer
{

    /**
     * @var CategoryCommunication
     */
    protected $factory;

    /**
     * @return CategoryResourceCreator
     */
    public function createCategoryResourceCreator()
    {
        return new CategoryResourceCreator($this->getLocator());
    }

    /**
     * @return CategoryExporterClient
     */
    public function getCategoryExporterClient()
    {
        return $this->getLocator()->categoryExporter()->client();
    }

}