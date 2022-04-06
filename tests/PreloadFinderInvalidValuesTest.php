<?php

namespace Keilestone\ComposerPreload\Tests;

use Keilestone\ComposerPreload\PreloadFinder;
use BadMethodCallException;
use PHPUnit\Framework\TestCase;

class PreloadFinderInvalidValuesTest extends TestCase {

	public function testGetIteratorInvalidState(): void {
		$finder = new PreloadFinder();
		$this->expectException(BadMethodCallException::class);
		$finder->getIterator();
	}
}
