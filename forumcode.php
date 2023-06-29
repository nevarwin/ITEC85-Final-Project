<?php
session_start();

include("connection.php");

$name = isset($_SESSION['studentName']) ? $_SESSION['studentName'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission and save the discussion
    if (isset($_SESSION['studentName'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Sanitize the input to prevent SQL injection
        $title = mysqli_real_escape_string($con, $title);
        $content = mysqli_real_escape_string($con, $content);
        $studentName = mysqli_real_escape_string($con, $name);

        // Insert the discussion into the database
        $query = "INSERT INTO discussions (title, content, studentName) VALUES ('$title', '$content', '$studentName')";
        $result = mysqli_query($con, $query);

        if ($result) {
            // Redirect back to the dashboard after saving the discussion
            header("Location: websiteForum.php");
            exit;
        } else {
            // Handle the error if the query fails
            echo "Error: " . mysqli_error($con);
            // You can redirect to an error page or display an error message here
        }
    } else {
        // Redirect to login page if student is not logged in
        header("Location: loginStudent.php");
        exit;
    }
}

if (isset($_GET['logout'])) {
    // Log out the student
    session_unset();
    session_destroy();
    header("Location: loginStudent.php");
    exit;
}

// Retrieve the discussions from the database
$query = "SELECT * FROM discussions";
$result = mysqli_query($con, $query);
$discussions = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Discussion Forum - Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['studentName'])) : ?>
            <h2>Welcome, <?php echo $name; ?></h2>
            <h3>Post a new discussion</h3>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="title" class="form-label">Discussion Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Discussion Content</label>
                    <textarea name="content" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
            <a href="?logout=true" class="btn btn-primary">Logout</a>
        <?php else : ?>
            <h2>Welcome to the Discussion Forum</h2>
            <h3>Please log in to participate</h3>
            <p>Only logged-in students can post discussions. If you have an account, please log in using the login form. If you don't have an account, please sign up to gain access.</p>
            <a href="loginStudent.php" class="btn btn-primary">Login</a>
            <a href="signupStudent.php" class="btn btn-primary">Sign Up</a>
        <?php endif; ?>

        <h3>Forum</h3>
        <?php if (!empty($discussions)) : ?>
            <div class="list-group">
                <?php foreach ($discussions as $discussion) : ?>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo $discussion['title']; ?></h4>
                        <p class="list-group-item-text"><?php echo $discussion['content']; ?></p>
                        <?php if (isset($discussion['studentName'])) : ?>
                            <p class="list-group-item-text">Created by: <?php echo $discussion['studentName']; ?></p>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p>No discussions found.</p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>