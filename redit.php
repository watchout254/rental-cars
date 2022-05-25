
<div class="container">
    <?php
        include_once 'rfeedback.php';
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                try {
                    $stmt = $db->prepare("SELECT * FROM rent WHERE id = ?");
                    $stmt->execute([$id]);
                    $feedback = $stmt->fetch(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    $_SESSION['error'] = $e->getMessage();
                }
            }
        }
            
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $identity = $_POST['identity'];
            $dtime = $_POST['dtime'];
            $car = $_POST['car'];
            $location = $_POST['location'];
            try {
                $stmt = $db->prepare("UPDATE rent SET name = ?, identity = ?,dtime = ?, car = ?, location = ?  WHERE id = ?");
                $stmt->execute([$name, $identity, $dtime, $car, $location, $id]);
                $_SESSION['success'] = 'Message updated successfully';
                header('Location: rview.php');
            } catch (PDOException $e) {
                $_SESSION['error'] = $e->getMessage();
            }
        }

        ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $feedback['name']??"";?>"
        </div>
        <div class="form-group">
            <label for="identity">ID NO:</label>
            <input type="text" name="identity" id="identity" class="form-control"
                value="<?php echo $feedback['identity']??"";?>">
        </div>
        <div class="form-group">
            <label for="dtime">Date,time:</label>
            <input type="text" name="dtime" id="dtime" class="form-control"><?php echo $feedback['dtime']??"";?>
        </div>
        <div class="form-group">
            <label for="car">Type of car:</label>
            <input type="text" name="car" id="car" class="form-control"><?php echo $feedback['car']??"";?>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" class="form-control"><?php echo $feedback['location']??"";?>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>