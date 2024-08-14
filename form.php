
<?php
    $number = $_POST['number'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    switch ($gender) {
        case 1:
            $gen = "ชาย";
        break;
        case 2:
            $gen = "หญิง";
        break;
        default:
            $gen = "อื่นๆ";
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mb-5 py-3">
        <form>
            <h2>ข้อมูลของคุณ</h2>
                <p class="mb-2">ชื่อ: <?php echo $name;?></p>
                <p class="mb-2">ชั้น: <?php echo $class;?></p>
                <p class="mb-2">เลขที่: <?php echo $number;?></p>
                <p class="mb-2">เพศ: <?php echo $gen;?></p>
            <a href="index.php" class="btn btn-primary">กลับ Home</a>
        </form>
    </div>
</body>
</html>
