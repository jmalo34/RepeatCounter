<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_none()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "I went to the store;"; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(0, $result);
        }
        function test_countRepeats_find()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "I went to the cookie store."; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_twins()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "There were seven varities of cookies on the cookie platter."; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_case()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "There were seven varities of cookies on each cookie platter at Cookie World."; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_nonalph()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "They wanted to purchase each & every cookie!"; $for = "cookie";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $for);

            //Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
