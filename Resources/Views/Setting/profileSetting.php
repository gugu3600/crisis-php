<?php

require_once "../../../vendor/autoload.php";

use App\Http\Controllers\RegionsController;
use App\Http\Controllers\UsersController;
use App\Http\Helpers\Auth\Auth;

$auth = Auth::check();
$id = $auth->id;
$userController = new UsersController();
$user = $userController->edit($id);
$regionC = new RegionsController();
$regions = $regionC->index();
// print_r($user);

// print_r($user);
// print_r($auth->id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Name</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>

    <div class="container mt-2">
        <!-- <h2 class="text-lg">Change Username</h2> -->
        <form action="../../../App/Http/Requests/SettingRequest.php" method="post" class="text-center">
            <h2 class="text-2xl">Change User Profile</h2>
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <input type="hidden" name="report_count" value="<?= $user->report_count + 1 ?>">
            <div class="form-group">
                <label for="username">Change Username</label>
                <input type="text" name="username" value="<?=$user->username ?>" class="bg-white w-full border-b-2 border-blue-700 text-2xl focus:outline-none">
            </div>

            <div class="form-group">
                <label for="username">Change Email</label>
                <input type="text" name="email" value="<?=$user->email ?>" class="bg-white w-full border-b-2 border-blue-700 text-2xl focus:outline-none">
            </div>

           <div class="form-group">
                <label for="username">Change Username</label>
                <select name="region_id" id="region_id">
                    <label>Change Region</label>
                    <?php foreach ($regions as $region) : ?>
                        <option value="<?= $region->id ?>" <?php if($region->id == $user->region_id):  ?> selected <?php endif ?> ><?=$region->name?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group text-center">
                <input type="submit" value="Change Name" class="btn w-3/4 text-white bg-green-600 hover:bg-green-400">
                <a href="../../../index.php" class="btn bg-red-600 w-3/4 text-white hover:bg-red-400 block mt-5 mx-auto">Cancel</a>
            </div>
        </form>
    </div>
    
</body>
</html>