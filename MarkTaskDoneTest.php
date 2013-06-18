<?php

class MarkTaskDoneTest extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*firefox");
    $this->setBrowserUrl("http://www.theialive.com/");
  }

  public function testMyTestCase()
  { 
    $this->windowMaximize();
    $this->open("/");
    $this->click("link=login");
    $this->waitForPageToLoad("30000");
    $this->type("id=email", "vancouversage@gmail.com");
       for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("id=password")) break;
        } catch (Exception $e) {}
        sleep(1);
    }
    $this->type("id=password", "test1234");

    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("id=signin")) break;
        } catch (Exception $e) {}
        sleep(1);
    }
    
    $this->click("id=signin");
    $this->waitForPageToLoad("30000");
    $this->assertTrue($this->isElementPresent("id=topnav"));
    

    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ($this->isElementPresent("link=Add a project now")) break;
        } catch (Exception $e) {}
        sleep(1);
    }
    
    
    $this->click("link=Add a project now");
    $this->waitForPageToLoad("30000");
    $this->click("link=sign off");
    $this->waitForPageToLoad("30000");
  }
}
?>