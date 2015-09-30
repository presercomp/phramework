<?php

namespace Phramework\Models;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-09-18 at 14:44:22.
 */
class ValidateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Phramework\Models\Validate::registerCustomType
     * @todo   Implement testRegisterCustomType().
     */
    public function testRegisterCustomType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::validateCustomType
     * @todo   Implement testValidateCustomType().
     */
    public function testValidateCustomType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::model
     * @todo   Implement testModel().
     */
    public function testModel()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::isValidCallback
     * @todo   Implement testIsValidCallback().
     */
    public function testIsValidCallback()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }
    
    public function intSuccessProvider()
    {   
        //input, expected
        return [
            ['100', 100],
            [0, 0],
            [123400, 123400],
            ['-54', -54],
            [-4, -4]
        ];
    }
    
    public function intFailureProvider()
    {
        return [
            [0.4],
            ['0,3'],
            ['abc'],
            ['0x11']
        ];
    }
    
    /**
     * @covers Phramework\Models\Validate::int
     * @dataProvider intSuccessProvider
     */
    public function testIntSuccess($input, $expected)
    {
        $value = Validate::int($input);
        
        $this->assertInternalType('integer', $value);
        $this->assertEquals($expected, $value);
        
        $this->markTestIncomplete(
            'missing ranges'
        );
    }
    
    /**
     * @covers Phramework\Models\Validate::int
     * @dataProvider intFailureProvider
     * @expectedException \Phramework\Exceptions\IncorrectParameters
     */
    public function testIntFailure($input)
    {
        $value = Validate::int($input);
    }
    
    public function uintSuccessProvider()
    {   
        //input, expected
        return [
            ['100', 100],
            [123400, 123400],
            [0, 0]
        ];
    }
    
    public function uintFailureProvider()
    {   
        //merger with intFailureProvider
        return array_merge([
            'negative' => ['-3'],
            'negative 2' => [-1000],
        ], $this->intFailureProvider());
    }
    
    /**
     * @covers Phramework\Models\Validate::uint
     * @dataProvider uintSuccessProvider
     */
    public function testUintSuccess($input, $expected)
    {
        $value = Validate::uint($input);
        
        $this->assertInternalType('integer', $value);
        $this->assertEquals($expected, $value);
    }
    
    /**
     * @covers Phramework\Models\Validate::uint
     * @dataProvider uintFailureProvider
     * @expectedException \Phramework\Exceptions\IncorrectParameters
     */
    public function testUintFailure($input)
    {
        $value = Validate::uint($input);
    }
    
    public function floatSuccessProvider()
    {
        return [
            [0.1, (float)0.1],
            ['0.132', (float)0.132],
            ['0,132', (float)0.132],
            ['0.00001', (float)0.00001],
            [123400, (float)123400],
            ['-54', (float)-54],
            ['-54.05', (float)-54.05],
            [-4, -(float)4]
        ];
    }
    
    public function floatFailureProvider()
    {
        return [
            ['abc'],
            ['-10xca'],
            //['10e10']
        ];
    }
    
    /**
     * @covers Phramework\Models\Validate::float
     * @dataProvider floatSuccessProvider
     */
    public function testFloatSuccess($input, $expected)
    {
        print_r($input, $expected);
        
        $value = Validate::float($input);
        
        $this->assertInternalType('float', $value);
        $this->assertEquals($expected, $value);
    }
    
    /**
     * @covers Phramework\Models\Validate::float
     * @dataProvider floatFailureProvider
     * @expectedException \Phramework\Exceptions\IncorrectParameters
     */
    public function testFloatFailure($input)
    {
        $value = Validate::float($input);
    }
    
    /**
     * @covers Phramework\Models\Validate::double
     * @todo   Implement testDouble().
     */
    public function testDouble()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::email
     * @todo   Implement testEmail().
     */
    public function testEmail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::url
     * @todo   Implement testUrl().
     */
    public function testUrl()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::permalink
     * @todo   Implement testPermalink().
     */
    public function testPermalink()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::token
     * @todo   Implement testToken().
     */
    public function testToken()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::enum
     * @todo   Implement testEnum().
     */
    public function testEnum()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::sqlDate
     * @todo   Implement testSqlDate().
     */
    public function testSqlDate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::color
     * @todo   Implement testColor().
     */
    public function testColor()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::operator
     * @todo   Implement testOperator().
     */
    public function testOperator()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::regexp
     * @todo   Implement testRegexp().
     */
    public function testRegexp()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Phramework\Models\Validate::boolean
     * @todo   Implement testBoolean().
     */
    public function testBoolean()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}