<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>My PHP Website - Home</title>
    <!-- Include your CSS here -->
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h2>Home Page</h2>
        <p>Welcome to the home page of my PHP website.</p>
    </main>
    
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My PHP Website</p>
    </footer>
</body>
</html>
