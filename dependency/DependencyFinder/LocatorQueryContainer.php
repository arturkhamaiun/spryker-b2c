<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Dependency\DependencyFinder;

use Symfony\Component\Finder\SplFileInfo;

class LocatorQueryContainer extends AbstractDependencyChecker
{

    /**
     * @param SplFileInfo $fileInfo
     * @param string $bundle
     *
     * @throws \Exception
     * @return void
     */
    public function checkDependencies(SplFileInfo $fileInfo, $bundle)
    {
        $content = $fileInfo->getContents();

        if (preg_match_all('/->(.*?)\(\)->queryContainer\(\)/', $content, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $toBundle = $match[1];

                if (preg_match('/->/', $toBundle)) {
                    $foundParts = explode('->', $toBundle);
                    $toBundle = $foundParts[1];
                }

                $toBundle = ucfirst($toBundle);
                if ($toBundle !== $bundle) {
                    $this->addDependency($toBundle);
                }
            }
        }
    }

}