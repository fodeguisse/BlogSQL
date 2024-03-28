<?php
function getCommentsByPost($id) {
    global $pdo;

    try {
        $query = "SELECT firstName, lastName, A.content, A.createdAt 
        from comments A  
        INNER JOIN users B on B.id = A.id_users 
        where A.id_posts = $id 
        ORDER BY createdAt DESC";
        $cursor = $pdo->query($query);
        $comments = $cursor->fetchAll(PDO::FETCH_ASSOC);
        return $comments;    
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}

function addComment($idUser,$idPost, $comment, $createdAt) {
    global $pdo;

    try {
        $query = "INSERT INTO comments 
        (content, createdAt, id_users, id_posts)
        VALUES
        (:content, :createdAt, :id_users, :id_posts)";
        
         //var_dump($query);
        $cursor = $pdo->prepare($query);
        $cursor->bindParam(":content", $comment, PDO::PARAM_STR);
        $cursor->bindParam(':createdAt', $createdAt, PDO::PARAM_STR);
        $cursor->bindParam(':id_users', $idUser, PDO::PARAM_INT);
        $cursor->bindParam(':id_posts', $idPost, PDO::PARAM_INT);
    
        $cursor->execute();
        return TRUE;

    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}