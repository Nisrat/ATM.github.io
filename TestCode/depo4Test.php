<?php
class depo4Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/depo4.php';
$this->assertEquals(600,totalbalance(200,300));

}
}
?>