<?php

function loginUser($email) {
    global $pdo;

    try {
        $query = "SELECT id, lastName, firstName, password, email, role
        FROM users 
        WHERE email = :email";
        
         //var_dump($query);
        $cursor = $pdo->prepare($query);
        $cursor->bindValue(":email", $email, PDO::PARAM_STR);
        $cursor->execute();

        $user = $cursor->fetch();
        return $user;    
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}


function registerUser($user) {
    global $pdo;

    try {
        $query = "INSERT INTO users (lastName, firstName, email, phone, password, role)
        VALUES
        (:lastName, :firstName, :email, :phone, :password, 'ROLE_USER')";
        
         //var_dump($query);
        $cursor = $pdo->prepare($query);
        $cursor->bindParam(":lastName", $user['lastName'], PDO::PARAM_STR);
        $cursor->bindParam(':firstName', $user['firstName'], PDO::PARAM_STR);
        $cursor->bindParam(':email', $user['email'], PDO::PARAM_STR);
        $cursor->bindParam(':phone', $user['phone'], PDO::PARAM_STR);
        $cursor->bindParam(':password', $user['password'], PDO::PARAM_STR);

        $cursor->execute();

        return TRUE;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}

function profileUser($id) {
    global $pdo;

    try {
        $query = "SELECT id, lastName, firstName, email, phone
        FROM users 
        WHERE id = :id";
        
         //var_dump($query);
        $cursor = $pdo->prepare($query);
        $cursor->bindParam(':id', $id, PDO::PARAM_INT);
        
        $cursor->execute();
        $user = $cursor->fetch();
        return $user;
            
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}

function updateProfileUser($user) {
    global $pdo;
    try {
        $query = "UPDATE users
        SET lastName = :lastName, firstName = :firstName, 
            email = :email, phone = :phone 
        WHERE id = :id";

        $cursor = $pdo->prepare($query);
        $cursor->bindParam(":id", $_SESSION['user']['id'], PDO::PARAM_STR);
        $cursor->bindParam(":lastName", $user['lastName'], PDO::PARAM_STR);
        $cursor->bindParam(':firstName', $user['firstName'], PDO::PARAM_STR);
        $cursor->bindParam(':email', $user['email'], PDO::PARAM_STR);
        $cursor->bindParam(':phone', $user['phone'], PDO::PARAM_STR);

        $cursor->execute();
        $user = $cursor->fetch();
        return $user;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}