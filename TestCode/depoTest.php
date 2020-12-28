
<?php
class depoTest extends \PHPUnit\Framework\TestCase
{
public function testtotalbalance()
{

require './app/Model/depo.php';
$this->assertEquals(600,totalbalance(200,300));

}
}
?>