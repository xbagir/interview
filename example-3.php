<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Class StackTest
 */
final class StackTest extends TestCase
{
    public function renderingMessage(): void
    {
        $sut     = new MessageRenderer();
        $message = new Message('header', 'body', 'footer');

        $html = $sut->render($message);

        $this->assertEquals($html, '<h1>header</h1><b>body</b><i>footer</i>');
    }
}
