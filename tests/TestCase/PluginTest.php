<?php

namespace RoMa\Excel\Test\TestCase;

use Cake\TestSuite\TestCase;
use RoMa\Excel\Plugin;

class PluginTest extends TestCase
{
    public $fixtures = ['plugin.RoMa/Excel.Users'];
    /**
     * Test initialize method
     */
    public function testInitialize()
    {
        $plugin = new Plugin();
        $this->assertTrue($plugin->isEnabled('console'));
    }
}