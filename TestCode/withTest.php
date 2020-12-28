<?php
class withTest extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/with.php';
$this->assertEquals(1600,totalbalance(2000,400));

}
}
?>