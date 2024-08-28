<?php

  namespace ProgrammerZamanNow\Test;

  use PHPUnit\Framework\TestCase;
  use PHPUnit\Framework\Assert;

  class PersonTest extends TestCase
  {
    public function testSuccess()
    {
      $person = new Person("Eko");
      self::assertEquals("Hello Budi, my name is Eko", $person->sayHello("Budi"));
    }

    public function testException()
    {
      $person = new Person("Eko");
      $this->expectException(\Exception::class);
      $person->sayHello(null);
    }
  }
