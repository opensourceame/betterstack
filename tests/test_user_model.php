<?php

require '../core/app.php';

use PHPUnit\Framework\TestCase;

final class UserModelTest extends TestCase
{
    public function testValidNumber() {

        $phone_number = '1-800 BTTRSTCK';
        $user = new User();

        $result = $user->insert(array(
            'phone_number' => $phoneNumber
        ));

        $this->assertSame($result, true);
        $this->assertSame($user->errors(), []);
    }

    public function testShortPhoneNumberFailsValidation() {

        $phone_number = '123';
        $user = new User();

        $result = $user->insert(array(
            'phone_number' => $phoneNumber
        ));

        $this->assertSame($result, false);
        $this->assertSame($user->errors()['phone_number'], 'too short');
    }
}
