<?php

use Oddvalue\LaravelDrafts\Tests\TestCase;
use Oddvalue\LaravelDrafts\Tests\TestTime;

uses(TestCase::class)->in(__DIR__);

function testTime(): TestTime
{
    return new TestTime();
}

expect()->extend('toBeCarbon', function (string $expected, string $format = null) {
    if ($format === null) {
        $format = str_contains($expected, ':')
            ? 'Y-m-d H:i:s'
            : 'Y-m-d';
    }

    expect($this->value ? $this->value->format($format):null)->toBe($expected);
});
