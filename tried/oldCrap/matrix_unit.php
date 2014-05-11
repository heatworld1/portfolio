<?php

/*
Matrix Test

Task: Complete the Matrix class methods to satisfy the associated unit tests.
Matrix Class


Matrix Unit Test
*/
require_once 'Matrix.php';

/*
class PHPUnit_Framework_TestCase{
	print "hello";
}
*/

//class MatrixTest extends PHPUnit_Framework_TestCase {
class MatrixTest {

    public function setUp ( ) {
        $matrix = array(
            array(0, 1, 2),
            array(3, 4, 5)
        );

        $this->matrix1 = new Matrix($matrix);

        $matrix = array(
            array(0, 1),
            array(2, 3)
        );

        $this->matrix2 = new Matrix($matrix);

        $matrix = array(
            array(9, 8, 7),
            array(6, 5, 4),
            array(3, 2, 1)
        );

        $this->matrix3 = new Matrix($matrix);
    }

    public function test_getElement() {
        $this->assertEquals(4, $this->matrix1->getElement(1, 1));
        $this->assertEquals(2, $this->matrix2->getElement(1, 0));
        $this->assertEquals(1, $this->matrix3->getElement(2, 2));

        $this->setExpectedException('Exception');

        $this->matrix1->getElement(3, 2);
    }

    public function test_countRows() {
        $this->assertEquals(2, $this->matrix1->countRows());
        $this->assertEquals(2, $this->matrix2->countRows());
        $this->assertEquals(3, $this->matrix3->countRows());
    }

    public function test_countColumns() {
        $this->assertEquals(3, $this->matrix1->countColumns());
        $this->assertEquals(2, $this->matrix2->countColumns());
        $this->assertEquals(3, $this->matrix3->countColumns());
    }

    public function test_getMax() {
        $this->assertEquals(5, $this->matrix1->getMax());
        $this->assertEquals(3, $this->matrix2->getMax());
        $this->assertEquals(9, $this->matrix3->getMax());
    }

    public function test_getMin() {
        $this->assertEquals(0, $this->matrix1->getMin());
        $this->assertEquals(0, $this->matrix2->getMin());
        $this->assertEquals(1, $this->matrix3->getMin());
    }

    public function test_isSquare() {
        $this->assertEquals(FALSE, $this->matrix1->isSquare());
        $this->assertEquals(TRUE,  $this->matrix2->isSquare());
        $this->assertEquals(TRUE,  $this->matrix3->isSquare());
    }

    public function test_transpose() {
        $expected = array(
            array(0, 3),
            array(1, 4),
            array(2, 5),
        );

        $this->assertEquals($expected, $this->matrix1->transpose());

        $matrix1 = array(
            array(0, 1, 2),
            array(3, 4, 5)
        );

        $transpose1 = new Matrix($this->matrix1->transpose());

        $this->assertEquals($matrix1, $transpose1->transpose());
    }
}

//echo $matrix->Matrix;
?>