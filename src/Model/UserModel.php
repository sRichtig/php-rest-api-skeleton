<?php declare(strict_types=1);

class UserModel {
    
    private array $users = [];
    private int $id;
    private string $email;
    private string $password;

    /** @return string */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void {
        $this->password = $password;
    }

    /**
     * @param string $password
     * @param callable $checkHash
     */
    public function authenticate(string $password, callable $checkHash): bool
    {
        return $checkHash($password, $this->password);
    }

    /**
     * @param int $id
     */
    public function getUserById(int $id) 
    {
        return $this->users[$id] ?? null;
    }

    /**
     * @return array
     */
    public function getAllUsers(): array 
    {
        return array_values($this->users);
    }

    /**
     * @param array $userData
     */
    public function createUser($userData) 
    {
        $userData['id'] = $this->nextId++;
        $this->users[$userData['id']] = $userData;
        return $userData;
    }

    /**
     * @param int $id
     * @param array $userData
     */
    public function updateUser($id, $userData) 
    {
        if (!isset($this->users[$id])) {
            return null;
        }
        $userData['id'] = $id;
        $this->users[$id] = $userData;
        return $userData;
    }
    
    /**
     * @param int $id
     */
    public function deleteUser($id) 
    {
        if (!isset($this->users[$id])) {
            return false;
        }
        unset($this->users[$id]);
        return true;
    }
}