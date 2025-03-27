<?php

require_once "User.php";

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testUserProperties()
    {
        $user = new User("John Doe", "john@example.com");

        // assertTrue: Memeriksa apakah bernilai true
        $this->assertTrue($user->isValidEmail(), "Email tidak valid");

        // assertTrue: contoh assertTrue failed
        // $this->assertTrue($user->active, "User harusnya aktif");

        // assertFalse: Memeriksa apakah bernilai false
        $this->assertFalse($user->active, "User harusnya tidak aktif");

        // assertFalse: contoh assertFalse failed
        // $this->assertFalse($user->isValidEmail(), "Email tidak valid");

        // assertEquals: Memeriksa apakah nilai sama
        $this->assertEquals("John Doe", $user->name, "Nama tidak sama");
        $this->assertEquals("john@example.com", $user->email, "Email tidak sama");

        // assertEquals: contoh assertEquals failed
        // $this->assertEquals("Jane Doe", $user->name, "Nama tidak sama");

        // assertSame: Memeriksa apakah referensi sama
        $this->assertSame("John Doe", $user->name, "Nama tidak sama");

        // assertSame: contoh assertSame failed
        // $this->assertSame("Jane Doe", $user->name, "Nama tidak sama");

    }

    public function testEmailValidation()
    {
        /// Format email: namaEmail @ domain 

        $validUser = new User("Alice", "alice@example.com");
        $invalidUser = new User("Bob", "invalid-email");

        // assertTrue: Email valid harus return true
        $this->assertTrue($validUser->isValidEmail()); // true --> SUCCESS

        // assertFalse: Email invalid harus return false
        $this->assertFalse($invalidUser->isValidEmail()); // false --> SUCCESS
    }

    public function testSameReference()
    {
        $user1 = new User("User1", "user1@example.com");
        $user2 = $user1;

        $user3 = new User("Charlie", "charlie@example.com");

        // assertSame: Pastikan referensi sama
        $this->assertSame($user1, $user2); // sama --> SUCCESS

        // $this->assertSame($user2, $user3); // ga sama --> FAILURED
    }

    public function testActivateUser()
    {
        $user = new User("Charlie", "charlie@example.com");

        // assertFalse sebelum diaktifkan
        $this->assertFalse($user->active); // false --> SUCCESS
        
        // Aktivasi user
        $user->activate();
        // $this->assertFalse($user->active); // true --> FAILURED

        // assertTrue setelah diaktifkan
        $this->assertTrue($user->active); //true --> SUCCESS
    }

    public function testUserExistsInArray()
    {

        $user1 = new User("Alice", "alice@example.com");
        $user2 = new User("Bob", "bob@example.com");
        $user3 = new User("Charlie", "charlie@example.com");
        $user4 = new User("Joko", "joko@mail.com");

        $users = [$user1, $user2, $user3];

        // assertContains: Memastikan bahwa $user2 ada dalam array $users
        $this->assertContains($user4, $users);
    }

    public function testStringInArray()
    {
        $fruits = ["Apple", "Banana", "Orange"];

        // assertContains: Memastikan bahwa "Banana" ada di dalam array
        $this->assertContains("Banana", $fruits);
    }

    public function testObjectInstance()
    {
        $user = new User("David", "david@example.com");

        // assertInstanceOf: Pastikan objek bertipe User
        $this->assertInstanceOf(User::class, $user);
    }

    public function testArrayHasKey()
    {
        $userData = ["name" => "Eve", "email" => "eve@example.com"];

        // assertArrayHasKey: Pastikan array punya key "email"
        $this->assertArrayHasKey("email", $userData);
    }

    public function testCountUsers()
    {
        $users = [
            new User("User1", "user1@example.com"),
            new User("User2", "user2@example.com")
        ];

        // assertCount: Pastikan ada 2 user
        $this->assertCount(2, $users);
    }

    public function testStringContains()
    {
        $message = "Welcome to PHPUnit testing";

        // assertStringContainsString: Pastikan teks mengandung kata "PHPUnit"
        $this->assertStringContainsString("PHPUnit", $message);
    }

    public function testNotSameReference()
    {
        $user1 = new User("User1", "user1@example.com");
        $user2 = new User("User1", "user1@example.com");

        $user3 = $user1;

        // assertNotSame: Pastikan referensi berbeda
        $this->assertNotSame($user1, $user2); // beda --> SUCCESS

        $this->assertNotSame($user1, $user3); // sama --> FAILURED

        // assertNotSame --> Memastikan referensi berbeda
        // assertSame --> Memastikan referensi sama
    }

}
