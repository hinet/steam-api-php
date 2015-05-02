<?php

namespace Steam\Command\Apps;

class AppListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AppList
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new AppList();
    }

    public function testValues()
    {
        $this->assertEquals('ISteamApps', $this->instance->getInterface());
        $this->assertEquals('GetAppList', $this->instance->getMethod());
        $this->assertEquals('v2', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([], $this->instance->getParams());
    }
}
 