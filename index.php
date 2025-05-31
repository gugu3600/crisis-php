<?php

include "vendor/autoload.php";

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegionsController;

$rc = new RegionsController();
$categoryController = new CategoryController();
// print_r(Regions::all());
$regions = $rc->index();
// print_r($regions);
// echo "<br/><br/><br/>";     
$categories = $categoryController->index();

// print_r(count($categories));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crisis App</title>
    <link rel="stylesheet" href="Resources/Views/assets/css/style.css">
</head>

<body>

    <header class=" bg-orange-500">
        <nav class="container flex py-3  items-center justify-around gap-5">
            <ul class="flex gap-5 text-xl">
                <li><a href="">Home</a></li>
                <li><a href="">Map</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Donations</a></li>
                <li><a href="">Map</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>

            <h1 class="text-3xl font-bold"><a href="/index.php">Heal The World</a></h1>
            <div class="btn-group">
                <button class="btn bg-blue-300 hover:bg-blue-600 hover:text-white" id="signup" onclick="showSignup()">Sign Up</button>
                <button class="btn bg-green-500 ms-3 hover:bg-green-600 hover:text-white transition" id="login" onclick="showSignin()">Log In</button>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="banner">

        </div>
    </div>

    <main>

    </main>



    <footer>

    </footer>


    <div id="modal-sign-up" class="modal hidden">
        <div class="modal-dialog">
            <h2>Sign Up</h2>
            <form action="" method="post" class="form">
                <input type="hidden" name="role_id" value="2">
                <div class="form-group">
                    <label for="username">Enter A Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Enter A Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group relative">
                    <label for="password">Enter A Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <button class="absolute right-2 top-1/2 translate-y-1/2" id="eye"><i class="fas fa-eye"></i></button>
                </div>

                <div class="form-group relative">
                    <label for="confirm-password">Enter A Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                    <button class="absolute right-2 top-1/2 translate-y-1/2" id="confirm-eye"><i class="fas fa-eye"></i></button>
                </div>

                <div class="form-group">
                    <label for="region">Enter Your Regions</label>
                    <select name="reigon_id" class="form-select" id="region">
                        <option value="" selected disabled>Choose Your Regions</option>
                        <?php foreach ($regions as $region) : ?>
                            <option value="<?= $region->id ?>"><?= $region->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">

                    <button class="btn bg-red-600 text-white hover:bg-red-300 hover:text-black" id="cancel" onclick="cancel()">Cancle</button>

                    <a href="" class="btn w-40 bg-lime-500 text-black hover:bg-lime-700 hover:text-white mx-3"><i class="fas fa-user"></i> Log In As Guests</a>

                    <input type="submit" value="Sign Up" class="btn bg-blue-300 hover:bg-blue-600 hover:text-white">
                </div>

                <p>Already Have An Account ?<button type="button" id="btn-login" class="underline text-blue-900 fw-bold" onclick="showSignin()"> Sign In Here</button></p>
            </form>
        </div>
    </div>

    <div id="modal-sign-in" class="modal hidden">
        <div class="modal-dialog">
            <h2>Log In</h2>
            <form action="" method="post" class="form">
                <div class="form-group">
                    <label for="login-username">Enter A Username</label>
                    <input type="text" name="username" id="login-username" class="form-control">
                </div>

                <div class="form-group relative">
                    <label for="password">Enter A Password</label>
                    <input type="password" name="password" id="login-password" class="form-control">
                    <button class="absolute right-2 top-1/2 translate-y-1/2" id="login-eye"><i class="fas fa-eye"></i></button>
                </div>

                <div class="form-group">

                    <button type="button" class="btn bg-blue-600 text-white hover:bg-blue-300 hover:text-black" id="btn-signup" onclick="showSignup()">Sign Up</button>


                    <button class="btn bg-red-600 text-white mx-3 hover:bg-red-300 hover:text-black" id="login-cancel" onclick="cancel()">Cancel</button>

                    <input type="submit" value="Log In" class="btn bg-blue-300  hover:bg-blue-600 hover:text-white">
                </div>
            </form>
        </div>
    </div>

    <script src="Resources/Views/assets/js/index.js"></script>
</body>

</html>