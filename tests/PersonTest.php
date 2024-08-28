<?php

  namespace ProgrammerZamanNow\Test;

  use PHPUnit\Framework\TestCase;
  use PHPUnit\Framework\Assert;

  class PersonTest extends TestCase
  {
    private Person $person;

    public function setUp(): void
    {
      $this->person = new Person("Eko");
    }

    public function testSuccess()
    {
      self::assertEquals("Hello Budi, my name is Eko", $this->person->sayHello("Budi"));
    }

    public function testException()
    {
      $this->expectException(\Exception::class);
      $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
      $this->expectOutputString("Good bye Budi" . PHP_EOL);
      $this->person->sayGoodBye("Budi");
    }
  }
