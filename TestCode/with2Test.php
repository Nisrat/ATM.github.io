<?php
class with2Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/with2.php';
$this->assertEquals(20000,totalbalance(25000,5000));

}
}
?>