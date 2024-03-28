<?php

function getAllCategories() {
    global $pdo;

    try {
        $query = "SELECT id, name
        FROM categories
        
        ORDER BY name ASC";

        $cursor = $pdo->query($query);
        $categories = $cursor->fetchAll(PDO::FETCH_ASSOC);

        return $categories; 
           
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}
