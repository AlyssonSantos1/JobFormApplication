<?php

if ($_SERVER['REQUEST_METHOD'] ===  'POST'){

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if(isset($_FILES['resume']) && $_FILES['resume']['error'] === 0){
        $originname = basename($_FILES['resume']['name']);
        $archive = strtolower(pathinfo($originname, PATHINFO_EXTENSION));

        if ($archive == 'pdf'){
            $folder = 'download/' . $originname;
        

        if (file_exists($folder)){
            echo 'Already Exists Archive with the same name';
            exit;
        }

        if(!is_dir('download')){
            mkdir('download', 0755, true);
        }

            if (move_uploaded_file($_FILES['resume']['tmp_name'], $folder)){
            $stmt = $connection->prepare("INSERT INTO employees(name, email, archive) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $originname);
            $stmt->execute();
        
        // sss parameter-> string for each values 
        //form -> name of the table in database

            echo 'Resume has been submited';

            } else {                
                echo 'Error to upload archive';
            }

    } else {
        echo 'Just PDF format archives are authorized';
    }

    } else {
        echo 'Requires PDF archive';
    }

    } else {
        echo 'Invalid Submit';
    }
?>