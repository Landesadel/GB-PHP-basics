<?php


class Task
{
    private User $user;
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdate;
    private DateTime $dateDone;
    private int $priority = 1;
    private bool $isDone = false;
    private array $comments = [];

    public function __construct(User $user)
    {
        $this->user = $user;

        $this->setDateCreated(new DateTime());
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function markIsDone(): void
    {
        $this->setDateUpdate(new DateTime());
        $this->setDateDone(new DateTime());
        $this->setIsDone(true);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDateUpdate(): DateTime
    {
        return $this->dateUpdate;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }



    public function getComments(): array
    {
        return $this->comments;
    }

    public function setDescription(string $description): void
    {
        $this->setDateUpdate(new DateTime());
        $this->description = $description;
    }

    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function setDateUpdate(DateTime $dateUpdate): void
    {
        $this->dateUpdate = $dateUpdate;
    }

    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function setComments(Comment $comment): void
    {
        $this->comments[] = $comment;
    }
}