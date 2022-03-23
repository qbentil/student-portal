<?php
include_once "utilities/auth.php";

function login()
{
    if(isset($_POST['login']))
    {
        session_start();
        $data = $_POST;
        $auth = new Auth();
        $result = $auth->login($data['uid'], $data['pin']);
        if($result  == 1)
        {
            header("location: index.php");
        }
        else{
            echo 
            "
            <div class='alert alert-primary text-center' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong><i class = 'fa fa-bullhorn text-danger'></i></strong> $result
            </div>
            ";
        }
    }
}
function changePin($uid)
{
    if(isset($_POST['changePin']))
    {
        $data = $_POST;
        if($data['nPin'] == $data['rPin'])
        {
            $auth = new Auth();
            $result = $auth->changePin($uid, $data['cPin'], $data['nPin']);
            if($result  == 1)
            {
                echo 
                "
                <div class='alert alert-success text-center' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <strong><i class = 'fa fa-bullhorn text-success'></i></strong> Pin change successfully
                </div>
                ";
            }
            else{
                echo 
                "
                <div class='alert alert-danger text-center' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <strong><i class = 'fa fa-bullhorn text-danger'></i></strong> $result
                </div>
                ";
            }
        }else{
            echo 
            "
            <div class='alert alert-danger text-center' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong><i class = 'fa fa-bullhorn text-danger'></i></strong> Pins do not match!
            </div>
            "; 
        }
    }
}
function changePhoto($uid)
{
    if(isset($_POST['changePhoto']))
    {
        // Accepting and uploading image

        $hasError = false; //A boolean flag to handle errors. 
        $imgName = $_FILES['userPhoto']['name'];
        if(!empty($imgName))
        {
            $target_dir = "./img/";  // directory for images in application
            $target_file = $target_dir . basename($_FILES["userPhoto"]["name"]);
            
            // Select file type
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Valid image extensions acceoted
            $extensions_arr = array("jpg","jpeg","png", "svg");

            // Check if selected image extension is acceptable
            if( in_array($imageFileType,$extensions_arr) ){
                    
                // Upload photo to images directory
                move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target_dir.$imgName);
            }
            else
            {
                $hasError = true; //error flag raised to true 
                echo 
                "
                <div class='alert alert-danger' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <strong><i class = 'fa fa-bullhorn'></i>Invalid image format</strong> Image type should be  '.jpg','.jpeg','.png' or '.svg'
                </div>
                ";
            }

            if(!$hasError) //Insert image in database if error flag is down
            {
                $auth = new Auth();
                $result = $auth->changePhoto($uid, $imgName);
                if($result  == 1)
                {
                    echo 
                    "
                    <div class='alert alert-primary text-center' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong><i class = 'fa fa-bullhorn text-success'></i></strong> Photo update successfully
                    </div>
                    ";
                }
                else{
                    echo 
                    "
                    <div class='alert alert-primary text-center' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <strong><i class = 'fa fa-bullhorn text-danger'></i></strong>Photo uodate failed
                    </div>
                    ";
                }
            }
        }
    }
}
function getPhoto($uid)
{
    $auth = new Auth();
    return $auth->getPhoto($uid);
}





// logout
if(isset($_GET['logout']))
{
    if($_GET['logout'] ==1)
    {
        session_start();
        ob_start();
        session_unset();
        session_destroy();
        header("location: login.php");
    }
}