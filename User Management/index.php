<?php
    session_start();
    if(isset($_SESSION['name'])){
        $msg = $_SESSION['name'];
        echo "<script>
                alert('$msg');
            </script>";
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container m-auto p-5 max-w-[500px] flex flex-col items-center justify-center">
            <div class="form w-full ">
                <form action="sql/adduser.php" method="POST" enctype="multipart/form-data">
                <div class="flex flex-col items-center text-xl ">
                            <img src="img/user.png" alt="" height="80px" width="80px">
                            <h6 class=" mt-3 text-center">User Sign-Up</h6>
                    </div>
                    <div class="form-group mt-2 flex flex-col items-left">
                        <label for="name">Name <span><sup class="text-red-500">*</sup></span></label>
                        <input type="text" id="name" name="name" placeholder="Enter Your Name:" required>
                    </div>
                    <div class="form-group mt-2 flex flex-col items-left">
                        <label for="mobile">Mobile No. <span><sup class="text-red-500">*</sup></span></label>
                        <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile Number:" required maxlength="10">
                    </div>
                    <div class="form-group mt-2 flex flex-col items-left">
                        <label for="email">Email Id <span><sup class="text-red-500">*</sup></span></label>
                        <input type="text" id="email" name="email" placeholder="Enter Your Name:" required >
                    </div>
                    <div class="form-group mt-2 flex flex-col items-left">
                        <label for="uname">User Name <span><sup class="text-red-500">*</sup></span></label>
                        <input type="text" id="uname" name="uname" placeholder="Enter a User Name:" maxlength="10">
                    </div>
                    <div class="form-group mt-2 flex flex-col items-left">
                        <label for="password">Password <span><sup class="text-red-500">*</sup></span></label>
                        <input type="password" id="password" name="password" placeholder="**********" maxlength="8">
                    </div>
                   
                    <div class="flex flex-col justify-center items-center">
                                
                                    <div class=" text-center bg-[#87CEEB] mt-5 btn text-lg font-bold">
                                        <input type="submit" name="ok" value="Submit"
                                        
                                        > 
                                    </div>
                                
                            </div>
                </form>
            </div>
    </div>
</body>
</html>