<?php declare(strict_types=1);


class UserService {
    
    private UserModel $userModel;

    /**
     * @param UserModel $userModel
     */
    public function __construct(UserModel $userModel) 
    {
        $this->userModel = $userModel;
    }

    /**
     * @param int $id
     */
    public function getUserById(int $id) 
    {
        return $this->userModel->getUserById($id);
    }

    /**
     * @return array
     */
    public function getAllUsers(): array 
    {
        return $this->userModel->getAllUsers();
    }

    /**
     * @param array $userData
     */
    public function createUser($userData) 
    {
        return $this->userModel->createUser($userData);
    }

    /**
     * @param int $id
     * @param array $userData
     */
    public function updateUser($id, $userData) 
    {
        return $this->userModel->updateUser($id, $userData);
    }

    /**
     * @param int $id
     */
    public function deleteUser($id) 
    {
        return $this->userModel->deleteUser($id);
    }
}