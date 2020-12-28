<?php
class with1Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/with1.php';
$this->assertEquals(22000,totalbalance(24000,2000));

}
}
?>