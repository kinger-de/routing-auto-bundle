<?php

namespace Symfony\Cmf\Bundle\RoutingAutoRouteBundle\AutoRoute;

use Symfony\Cmf\Bundle\RoutingExtraBundle\Document\Route;

/**
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface PathNotExistsInterface
{
    public function execute(BuilderContext $builderContext);
}
