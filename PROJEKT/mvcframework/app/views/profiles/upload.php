<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<?php
$target_dir = URLROOT . '/public/img/pfp/';
$target_file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sajnaljuk, csak JPG, JPEG, PNG & GIF fileokat lehet feltolteni.";
        $uploadOk = 0;
    }
    move_uploaded_file($target_file,$target_dir);
    $data = [
        'user_id' => $_SESSION['user_id'],
        'username' => $_SESSION['username'],
        'pfpname' => $target_file
    ];
    if($check !== false) {
        echo "Sikeres feltoltes " . $check["mime"] . ".";
        $uploadOk = 1;
  } else {
        echo "Hiba tortent a feltoltesnel! Probalja ujra!";
        $uploadOk = 0;
  }
}
?>