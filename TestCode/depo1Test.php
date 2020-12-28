<?php
class depo1Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/depo1.php';
$this->assertEquals(600,totalbalance(200,300));

}
}
?>