<?php

declare(strict_types=1);

namespace WonderWp\Component\Shortcode\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WonderWp\Component\Shortcode\AbstractShortcodeService;
use WonderWp\Component\Shortcode\ShortcodeServiceInterface;

final class AbstractShortcodeServiceTest extends TestCase
{
    public function testServiceIsAbstractAndImplementsInterface(): void
    {
        $ref = new \ReflectionClass(AbstractShortcodeService::class);
        $this->assertTrue($ref->isAbstract());
        $this->assertTrue($ref->implementsInterface(ShortcodeServiceInterface::class));
    }
}
