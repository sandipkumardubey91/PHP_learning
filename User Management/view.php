<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>View </title>
    <link rel="stylesheet" href="css/view.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="  container m-auto max-w-[850px] flex flex-col  justify-center items-center">
        <div class="head">
            <h1>User Details</h1>
        </div>
        
        

<div class="mt-3 rows relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class=" mt-3 rows w-full text-sm text-left rtl:text-right ">
        <thead class="text-xs">
            <tr>
                <th scope="col" class=" py-3">Sl.No</th>
                <th scope="col" class="px-6 py-3">UserId</th>
                <th scope="col" class="px-6 py-3">Mobile No.</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Username</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Action</th>
                
            </tr>
        </thead>
        <tbody class="rows">
            <?php
                include 'sql/config.php';
                $sql = mysqli_query($conn, "SELECT * FROM user") or mysqli_error($conn);
                if(mysqli_num_rows($sql)>0){
                    while($row = mysqli_fetch_array($sql)){
                ?>
                        <tr class="text-sm rows  mt-3 hover:bg-[#5fc9f3]">
                        <td scope="row" class=" py-4 font-medium  whitespace-nowrap">
                            <?php echo $row['id'];?>
                        </td>
                        <td class=" py-4">
                        <?php echo $row['userid'];?>
                        </td>
                        <td class="px-2 py-4">
                        <?php echo $row['mobile'];?>
                        </td>
                        <td class="px-2 py-4">
                        <?php echo $row['email'];?>
                        </td>
                        <td class="px-2 py-4">
                        <?php echo $row['username'];?>
                        </td>
                        <td class="px-2 py-4">
                        <?php echo $row['status'];?>
                        </td>
                        <td class=" py-4">
                        <?php echo ' ';?>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php
                    }
                }else{
                ?>
                    <tr>
                        <td colspan="8">
                            <span class="text-red-500"> No Data Available</span>
                        </td>
                    </tr>
                <?php
                }
            ?>
            
            
            
        </tbody>
    </table>
</div>

    </div>
</body>
</html>