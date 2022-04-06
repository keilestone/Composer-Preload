<?php

namespace Keilestone\ComposerPreload\Tests;

use Keilestone\ComposerPreload\Composer\Command\PreloadCommand;
use Keilestone\ComposerPreload\Composer\Command\PreloadCommandProvider;
use Keilestone\ComposerPreload\Composer\Plugin;
use PHPUnit\Framework\TestCase;

class PluginAutoloadTest extends TestCase {

	public function testAutoload(): void {
		$this->assertTrue(class_exists(Plugin::class));
		$this->assertTrue(class_exists(PreloadCommandProvider::class));
		$this->assertTrue(class_exists(PreloadCommand::class));
	}
}
