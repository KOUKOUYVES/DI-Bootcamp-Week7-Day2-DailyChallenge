<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">Daily Challenge</h1>
    <div class="container">

        <?php
        
        class User{
            private $name;
            private $age;

            public function setName($name){
                $name = trim($name);
                if (strlen($name) < 3 ){
                    throw new Exception("Le nom doit comporter au moins 3 caractères");
                }
                $this->name = $name;
            }

            public function setAge($age){

                if ($age <= 0){
                    throw new Exception("L'âge ne peut pas être inférieur ou égal à zéro");
                }
                $this->age = $age;
            }

           

            public function getName(){
                return $this->name;
            }

            public function getAge(){
                return $this->age;
            }
        
    }
            // fonction test

    function test() {
                // un tableau 
                $dataForUsers = array(
                array("Ben",4),
                array("Eva",28),
                array("li",29),
                array("Catie","not yet born"),
                array("Sue",1.5),
                array("Yves",25)    
                );
            
                //une boucle foreach
                foreach ($dataForUsers as $data) {
                // creer un nouvel objet
                $user = new User();
                try {
                    // utilisation de l'instruction try
                    $user->setName($data[0]);
                    $user->setAge($data[1]);
                    echo $user->getName() . " is " . $user->getAge() . " years old." . "<br>";
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage() . " in the file: " . $e->getFile() . "<br>";
                    }
                }
                
        }
        test();            
        ?>
    </div>
</body>
</html>