<?php


class userController
{
    public function users(){        
        try{
            $db = new database();
            $con = $db->initDatabase();
            $statement = $con->prepare("select * from users");
            $statement->execute();
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($row as $data) {
                echo $data['UID']."|".$data['email']."|".$data['password']."|".$data['fname']."|".$data['lname']."<br>";
            }
        }
        catch (PDOException $th) {
            echo $th;
        }
    }

    public function user_login(){
        try {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $db = new database();
            $con = $db->initDatabase();
            
            $statement = $con->prepare("select * from users u LEFT JOIN users_info  ui ON u.UID = ui.UID where email = :email");
            $statement->execute(['email' => $email]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($pass, $user['password'])) {

                session_start();
                $_SESSION['UID'] = $user['UID'];
                $_SESSION['fname'] = $user['fname'];
                $_SESSION['lname'] = $user['lname'];
                $_SESSION['isLoggedin'] = true;

                echo json_encode(['status' => 'success', 'message' => 'Login Successful! Welcome, '.ucwords($_SESSION['fname']).' '.ucwords($_SESSION['lname'])]);    
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid username or password!']);
            }
        } catch (PDOException $th) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $th->getMessage()]);
        }
    }

    public function user_registration(){        
        try {
            $db = new database();
            $con = $db->initDatabase();

            $hashed = password_hash($_POST['pass'],PASSWORD_BCRYPT);

            $statement = $con->prepare("insert into users(email, password) VALUES (:email,:password)");
            $statement->execute(['email' => $_POST['email'], 'password' => $hashed]);

            $uid = $con->lastInsertId();
            
            $statement2= $con->prepare("insert into users_info(UID, fname,lname,DOB) VALUES (:UID,:fname,:lname,:DOB)");
            $statement2->execute(['UID' => $uid, 'fname' => $_POST['fname'], 'lname' => $_POST['lname'],'DOB' => $_POST['DOB']]);      

            echo json_encode(['status' => 'success', 'message' => 'USER REGISTERED SUCCESSFULLY!']);        
        } 
        catch (PDOException $th) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $th->getMessage()]);
        }
    }

    public function user_logout(){
        try {
            session_start();
            session_unset();
            session_destroy();
            echo json_encode(['status' => 'success', 'message' => 'Logging out!']); 
        } catch (PDOException $th) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $th->getMessage()]);
        }
        exit();
    }

    public function update_user(){

    }

    public function delete_user(){

    }
}
