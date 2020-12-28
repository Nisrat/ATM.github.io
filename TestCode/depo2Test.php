<?php
class depo2Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/depo2.php';
$this->assertEquals(600,totalbalance(200,300));

}
}
?>