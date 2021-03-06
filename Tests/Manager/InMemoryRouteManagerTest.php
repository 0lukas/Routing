<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Routing\Tests\Manager;

use Tadcka\Component\Routing\Manager\InMemoryRouteManager;
use Tadcka\Component\Routing\Tests\Mock\Model\Manager\MockRouteManager;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 9/1/14 8:55 PM
 */
class InMemoryRouteManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MockRouteManager
     */
    private $mockManager;

    /**
     * @var InMemoryRouteManager
     */
    private $inMemoryManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->mockManager = new MockRouteManager();
        $this->inMemoryManager = new InMemoryRouteManager($this->mockManager);
    }
    /**
     * @expectedException \Tadcka\Component\Routing\Exception\RoutingRuntimeException
     */
    public function testAddMethodWithEmptyName()
    {
        $this->inMemoryManager->add($this->mockManager->create());
    }
}
