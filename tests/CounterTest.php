<?php

  namespace ProgrammerZamanNow\Test;

  use PHPUnit\Framework\TestCase;
  use PHPUnit\Framework\Assert;

  class CounterTest extends TestCase
  {
    private Counter $counter;

    public function setUp(): void
    {
      $this->counter = new Counter();
    }

    public function testIncrement()
    {
      self::assertEquals(0, $this->counter->getCounter());
      self::markTestIncomplete("TODO not complete");
      echo "TEST TEST";
    }

    public function testCounter()
    {
      $this->counter->increment();
      Assert::assertEquals(1, $this->counter->getCounter());
      $this->counter->increment();
      $this->assertEquals(2, $this->counter->getCounter());
      $this->counter->increment();
      self::assertEquals(3, $this->counter->getCounter());
    }

    /**
    * @test
    */
    public function increment()
    {
      $this->counter->increment();
      $this->assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
      $this->counter->increment();
      $this->assertEquals(1, $this->counter->getCounter());
      return $this->counter;
    }

    /**
    * @depends testFirst
    */
    public function testSecond(Counter $counter)
    {
      $counter->increment();
      $this->assertEquals(2, $counter->getCounter());
    }

    protected function tearDown(): void
    {
      echo "Tear Down" . PHP_EOL;
    }

    /**
    * @after
    */
    protected function after(): void
    {
      echo "After" . PHP_EOL;
    }

    /**
    * @requires OSFAMILY Windows
    */
    public function testOnlyWindows()
    {
      self::assertTrue(true, "Only in Windows");
    }

    /**
    * @requires PHP >= 8
    * @requires OSFAMILY Darwin
    */
    public function testOnlyForMacAndPHP8()
    {
      self::assertTrue(true, "Only for Mac and PHP 8");
    }
  }
