<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Profile</title>
</head>
<body>
        <?php
            include 'Header.php';
        ?>

        <?php
            include 'dbcon.php';
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $gander = $_POST['gander'];
                $village = $_POST['village'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $pin = $_POST['pin'];
                //$a = $_GET['upd'];
                $sql = "UPDATE `users` SET `Village`='$village',`City`='$city,`State`='$state',`Pin Code`='$pin',`Name`='$name',`Email`='$email',`Phone Number`='$phone', WHERE name='$email'";
                $r=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($r);
                if($r){
                    echo "Seccssefully Submit";
                }
                else{
                    echo "Error To Submit";
                }
            }
        ?>

        <form action="UpdateProfile.php" method="post">
            <div class="py-1 px-0 bg-black items-center">
                <div class="bg-white">
                    <h4 class="flex justify-center p-3 text-[22px]">Update Your Profile</h4>
                    <div class="md:grid grid-cols-12 flex flex-col md:items-center gap-4 p-4">
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">Name</span>
                            <input  type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="name"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">Email</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="email"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">Phone Number</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="phone"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">Gander</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="gander"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">Village</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="village"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">City</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="city"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">State</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="state"/>
                        </div>
                        <div class="col-span-6 relative">
                            <span class="absolute bg-white left-3 -top-[12px] px-2">Pin Code</span>
                            <input type="text" placeholder="" class="text-[13px] h-12 text-gray-700 w-full border-2 px-2 rounded-sm" name="pin"/>
                        </div>
                    </div>
                    <div class="px-4 text-right py-2">
                        <button class="h-10 w-32 rounded-sm shadow-md text-white text-[16px] hover:bg-green-700 bg-green-600" type="submit" name="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>