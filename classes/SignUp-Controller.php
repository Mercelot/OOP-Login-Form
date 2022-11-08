<?php

class SignUpController
{
    private string $uid;
    private string $pwd;
    private string $pwd2;
    private string $email;

    public function __construct($uid, $pwd, $pwd2, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwd2 = $pwd2;
        $this->email = $email;
    }

    // Check for empty input
    private function emptyInput(): bool {
        $result = null;
        // Running error handlers and user signup
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwd2) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Check if uid is valid
    private function invalidUid(): bool {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Check if email is valid
    private function invalidEmail(): bool {
        $result = null;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(): bool {
        $result = null;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}