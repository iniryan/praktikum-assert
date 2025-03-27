<?php
class User
{
    public string $name;
    public string $email;
    public bool $active;

    public function __construct($name, $email, $active = false)
    {
        $this->name = $name;
        $this->email = $email;
        $this->active = $active;
    }

    public function isValidEmail(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function activate()
    {
        $this->active = true;
    }
}
