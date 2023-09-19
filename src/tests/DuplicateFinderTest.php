<?php
namespace Esquare\Challenge3\Tests;

use Esquare\Challenge3\DuplicateFinder;
use PHPUnit\Framework\TestCase;

class DuplicateFinderTest extends TestCase
{
    public function testFindDuplicates()
    {
        $finder = new DuplicateFinder();

        // Test Case 1
        $input1 = [2, 3, 1, 2, 3];
        $output1 = $finder->findDuplicates($input1);
        $this->assertEquals([2, 3], $output1);

        // Test Case 2
        $input2 = [0, 1, 2, 3, 4];
        $output2 = $finder->findDuplicates($input2);
        $this->assertEquals([], $output2);

        // Test Case 3
        $input3 = [1, 1, 2, 2, 3, 3, 4, 4, 5];
        $output3 = $finder->findDuplicates($input3);
        $this->assertEquals([1, 2, 3, 4], $output3);
    }
}
