<?php
class with4Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/with4.php';
$this->assertEquals(50000,totalbalance(70000,20000));

}
}
?>