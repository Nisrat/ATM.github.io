<?php
class with3Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/with3.php';
$this->assertEquals(10000,totalbalance(20000,10000));

}
}
?>