<?php
class Matrix {

    /**
     * This function is expected to construct a new matrix
     * class with the provided matrix
     *
     * @param array A multidimensional array representing a matrix
     */
    public function  __construct($matrix) {
		##############
		$this->matrix = $matrix;
		//var_dump($matrix);
		##############
    }

    /**
     * Counts and returns the number of rows of a matrix
     *
     * @return int
     */
    public function countRows() {
		##############
		$column_row = count($row);
		return $column_row;
		##############
    }

    /**
     * Counts and returns the number of columns of a matrix
     *
     * @return int
     */
    public function countColumns() {
		##############
		$column_count = count($column);
		return $column_count;
		##############
    }

    /**
     * Finds the max value in the matrix
     *
     * @return int
     */
    public function getMax() {
		##############
		$max_value = max($matrix);
		return $max_value;
		##############
    }

    /**
     * Finds the min value in the matrix
     *
     * @return int
     */
    public function getMin() {
		##############
		$min_value = min($matrix);
		return $min_value;
		##############
    }

    /**
     * Returns the value of the element at the given position.  If the
     * element is not set an exception is thrown.
     *
     * @return int
     */
    public function getElement($row, $column) {
		##############
		for($r = 0;  $r < $row; $r++){
			for($c = 0; $c < $column; $c++){
				if($r$c == null)
					throw new Exception('Element is not set');
				else
					return $r$c;
			}
		}
		##############
    }

    /**
     * Checks if the number of rows equals the number of columns.
     *
     * @return bool
     */
    public function isSquare() {
		##############
		if($row == $column)
			return true;
		else
			return false;
		##############
    }

    /**
     * Transposes the matrix.  IE: rows become columns
     *
     * @return array
     */
    public function transpose() {
		##############
		for($r = 0;  $r < $row; $r++){
			for($c = 0; $c < $column; $c++){
				$matrix[$r][$c] = $matrix[$c][$r];
			}
		}
		
		return $matrix;
		##############
    }
	
	####################
	public function  PHPUnit_Framework_TestCase(){
		///////?
	}
	###################
}