<?php

declare(strict_types=1);

namespace Tests;

use App\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    /** @var User */
    private $user;

    /** @var string */
    private $greeting;

    public function tearDown(): void
    {
        parent::tearDown();

        $this->user = null;
        $this->greeting = null;
    }

    /** @test */
    public function shouldSayHelloWhenUser(): void
    {
        $this->givenAUser();

        $this->whenItGreets();

        $this->thenItShouldSayCodelyTv();
    }

    private function givenAUser(): void
    {
        $this->user = new User(
            name: "Matias"
        );
    }

    private function whenItGreets()
    {
        $this->greeting = $this->user->greet();
    }

    private function thenItShouldSayCodelyTv()
    {
        $this->assertEquals("Hello " . $this->user->name(), $this->greeting);
    }
}
