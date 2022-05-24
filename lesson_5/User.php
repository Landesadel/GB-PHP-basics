<?php


class User
{
    private string $userName;
    private string $email;
    private ?int $age;
    private bool $isActive = true;
    public DateTime $dateCreated;

    function __construct(string $userName, string $email, ?int $age = null)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->age = $age;

        $this->dateCreated = new DateTime();
    }

    function getUserName(): string
    {
        return $this->userName;
    }

    function getEmail(): string
    {
        return $this->email;
    }

    function setAge(?int $age): void
    {
        if($age == null) {
            $this->age = null;
        } elseif ($age > 0 && $age <= 150) {
            $this->age = $age;
        }
    }

    function getAge(): ?int
    {
        return $this->age;
    }
}