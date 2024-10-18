<?php

class todoController{
    public function todoList(){
        try{
            $db = new database();
            $con = $db->initDatabase();
            $statement = $con->prepare("select * from users_todo ut INNER JOIN users u ON ut.UID = u.UID where ut.UID = :UID;");
            $statement->execute(['UID' => $_SESSION['UID']]);
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            // foreach ($row as $data) {
            //     echo "<div class='td'>
            //     <h4>TODO: ".$data['TODO']."<br>
            //     DATE TO DO: ".$data['DateToDo']."<br>
            //     DATE CREATED: ".$data['Created']."<br></h4></div><br>";                
            // }
            echo json_encode(['response' => $row]);
        }
        catch (\Throwable $th) {
            echo $th;
        }
    }

    public function addTodo(){
        try {
            $db = new database();
            $con = $db->initDatabase();

            $currentDateTime = date('Y-m-d H:i:s');

            $statement = $con->prepare("insert into users_todo(UID, TODO,DateToDo,Created,Modified) VALUES (:UID,:TODO,:DateToDO,:Created,:Modified)");
            $statement->execute(['UID' => $_SESSION['UID'], 'TODO' => $_POST['TODO'], 'DateToDO' => $_POST['DTD'],'Created' => $currentDateTime, 'Modified' => '']);   

            echo json_encode(['status' => 'success', 'message' => 'TODO ADDED SUCCESSFULLY!']);        
        } 
        catch (PDOException $th) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $th->getMessage()]);
        }
    }

    public function updateToDo() {
        // Check if 'id' and 'todo' keys exist in $_POST
        if (!isset($_POST['id']) || !isset($_POST['todo'])) {
            echo json_encode(['status' => 'error', 'message' => 'ID or To-do is missing', 'todo' => $_POST['todo']]);
            return;
        }

        $id = $_POST['id'];
        $todo = htmlspecialchars($_POST['todo'], ENT_QUOTES, 'UTF-8');

        // Assuming you have a method to update a to-do item in your model.
        $result = $this->updateToDoInDB($id, $todo);
        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'To-do updated successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update to-do.']);
        }
    }

    private function updateToDoInDB($id, $todo) {
        // Your database update logic here
        $db = new Database();
        $con = $db->initDatabase();

        $stmt = $con->prepare("UPDATE users_todo SET TODO = ? WHERE id = ?");
        return $stmt->execute([$todo, $id]);
    }

    public function deleteTodo() {
        // Your database update logic here
        $db = new Database();
        $con = $db->initDatabase();

        $id = $_POST['id'];
        $stmt = $con->prepare("DELETE FROM users_todo  WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'To-do delete successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete to-do.']);
        }
    }

    public function updateToDoStatus() {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    
        $id = $_POST['id'];
        $completed = $_POST['completed'];
    
        $db = new Database();
        $con = $db->initDatabase();
    
        $stmt = $con->prepare("UPDATE users_todo SET completed = ? WHERE id = ?");
        if ($stmt->execute([$completed, $id])) {
            echo json_encode(['status' => 'success', 'message' => 'Todo status updated']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update status']);
        }
    }

}




