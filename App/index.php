<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Tabkita</title>
</head>
<body>
    <form action="user.php" method="GET">
        <div class="container shadow-lg">
            <!--
                !user name Input here
            -->
            <div class="input-user">
                <div class="title mb-5 text-center" >TabkitaApps</div>
                <div class="boxwrapper"> 
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                        <input type="username" class="form-control is-invalid" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <!-- <small class="text-danger">username tidak valid</small> -->
                </div>
                <!--
                    ! Email name input here
                -->
                
                <div class="boxwrapper mt-3"> 
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" class="form-control is-invalid" placeholder="abc@gmail.com" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <!-- <small class="text-danger">Email tidak valid</small> -->
                </div>
                 <!--
                ! Password input here
            -->
                <div class="boxwrapper mt-3"> 
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                        <input type="passsword" class="form-control is-invalid" id="password" name="password"  placeholder="password" aria-label="password" aria-describedby="addon-wrapping">
                    </div>
                    <!-- <small class="text-danger">password tidak valid</small> -->
                </div>
                <!-- <button type="button" class="btn btn-primary btn-lg mt-5 "> Submit</button> -->
                <button class="btnSub" name="" id="submit mt">Submit</button>
            </div>   
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>