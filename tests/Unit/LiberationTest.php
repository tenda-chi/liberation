<?php

namespace Tests\Unit;

use Liberation\Liberation;
use Tests\TestCase;

class LiberationTest extends TestCase
{
    /**
     * @dataProvider filePathDataProvider
     */
    public function test_filepath($type, $file, $expected)
    {
        $result = Liberation::{$type}($file);
        $this->assertEquals(trim($result), $expected);
    }
    public function filePathDataProvider()
    {
        return [
            ['sql', 'example', 'example sql file.'],
            ['sql', 'sub/example', 'sub/example sql file.'],
            ['json', 'example', 'example json file.'],
            ['json', 'sub/example', 'sub/example json file.']
        ];
    }

    /**
     * @dataProvider paramDataProvider
     */
    public function test_param($file, $expected)
    {
        $params = [
            'path' => $file
        ];
        $result = Liberation::sql($file, $params);
        $this->assertEquals(trim($result), $expected);
    }
    public function paramDataProvider()
    {
        return [
            ['example2', 'example2 sql file.'],
            ['sub/example2', 'sub/example2 sql file.']
        ];
    }
}
