<!DOCTYPE html>
<html>
<head>
    <title>My PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
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
        <?php
        // Dynamic content based on the page
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'home':
                include('home.php');
                break;
            case 'about':
                include('about.php');
                break;
            case 'contact':
                include('contact.php');
                break;
            default:
                include('404.php');
        }
        ?>
    </main>
    
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My PHP Website</p>
    </footer>
</body>
</html>
