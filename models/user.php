 <?php
 
 class User{
        // static public function createUser ($data)
        // {
        //     $stmt = DB::connect()->prepare("INSERT INTO users(username, email, password)
        //                                     VALUES (:username,:email, :password)");
        //     $stmt->bindParam(':username', $data['username']);
        //     $stmt->bindParam(':email', $data['email']);
        //     $stmt->bindParam(':password', $data['password']);

        //     if ($stmt->execute()) {
        //         return 'ok';
        //     } 
        //     else 
        //     {
        //         return 'error';
        //     }
        // }

        static public function login($data){
            $username = $data['username'];
            try {
                $query = "SELECT * FROM admin WHERE username= :username";
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":username" => $username));
                $user = $stmt->fetch(PDO::FETCH_OBJ);
                return $user;
                print_r($user);
                if ($stmt->execute()) {
                    return 'ok';
                }
            } 
                catch (PDOException $ex) {
                echo 'erreur' . $ex->getMessage();
            }
        }
 }
 
 