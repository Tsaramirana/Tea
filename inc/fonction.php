<?php
    include "pdo.php";
    function authentication($email, $mdp, $status) {
        $db = myConnect();
    
        $query = "SELECT * FROM user WHERE email = :email AND pswd = SHA1(:mdp) AND status = :status";
    
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $db = null;
        
        if ($result !== false) {
            return $result ;
        } else {
            return null;
        }
    }
?>