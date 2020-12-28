<?php
class depo3Test extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/depo3.php';
$this->assertEquals(600,totalbalance(200,300));

}
}
?>