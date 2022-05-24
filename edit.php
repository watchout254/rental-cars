
<div class="container">
    <?php
        include_once 'feedback.php';
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                try {
                    $stmt = $db->prepare("SELECT * FROM piga WHERE id = ?");
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
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            try {
                $stmt = $db->prepare("UPDATE piga SET name = ?, email = ?,subject = ?, message = ? WHERE id = ?");
                $stmt->execute([$name, $email, $subject, $message, $id]);
                $_SESSION['success'] = 'Message updated successfully';
                header('Location: view.php');
            } catch (PDOException $e) {
                $_SESSION['error'] = $e->getMessage();
            }
        }

        ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $feedback['name']??"";?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                value="<?php echo $feedback['email']??"";?>">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control"><?php echo $feedback['message']??"";?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>