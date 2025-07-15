<?php

declare(strict_types=1);

namespace Pg\Tests\Parser;

use Pg\Attributes\Parser\PhpTokenParser;
use PHPUnit\Framework\TestCase;

class PhpTokenParserTest extends TestCase
{
    public function testFindClassWithSimpleClass(): void
    {
        $code = <<<'PHP'
<?php

class TestClass {}
PHP;

        $file = tempnam(sys_get_temp_dir(), 'phpunit');
        file_put_contents($file, $code);

        $result = PhpTokenParser::findClass($file);
        $this->assertEquals('\\TestClass', $result);

        unlink($file);
    }

    public function testFindClassWithNamespace(): void
    {
        $code = <<<'PHP'
<?php

namespace TestNamespace;

class TestClass {}
PHP;

        $file = tempnam(sys_get_temp_dir(), 'phpunit');
        file_put_contents($file, $code);

        $result = PhpTokenParser::findClass($file);
        $this->assertEquals('TestNamespace\TestClass', $result);

        unlink($file);
    }

    public function testFindClassWithMultipleNamespaces(): void
    {
        $code = <<<'PHP'
<?php

namespace Test\Namespace\SubNamespace;

class TestClass {}
PHP;

        $file = tempnam(sys_get_temp_dir(), 'phpunit');
        file_put_contents($file, $code);

        $result = PhpTokenParser::findClass($file);
        $this->assertEquals('Test\Namespace\SubNamespace\TestClass', $result);

        unlink($file);
    }

    public function testFindClassWithNoClass(): void
    {
        $code = <<<'PHP'
<?php

function testFunction() {}
PHP;

        $file = tempnam(sys_get_temp_dir(), 'phpunit');
        file_put_contents($file, $code);

        $result = PhpTokenParser::findClass($file);
        $this->assertFalse($result);

        unlink($file);
    }
}
