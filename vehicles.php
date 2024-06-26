<?php
include 'database/carsDB.php'; // Ensure this includes your database connection

// Initialize filter criteria
$usedNew = $_POST['usedNew'] ?? '';
$model = $_POST['model'] ?? '';
$kilometers = $_POST['kilometers'] ?? '';
$gearbox = $_POST['gearbox'] ?? '';
$sortOrder = $_POST['sortOrder'] ?? '';
$sortPrice = $_POST['sortPrice'] ?? '';

// Build the SQL query with filter criteria
$sql = "SELECT * FROM cars WHERE 1=1";

// Add filter conditions to the query
if ($usedNew !== '') {
    $sql .= " AND category = '$usedNew'";
}
if ($model !== '') {
    $sql .= " AND model = '$model'";
}
if ($gearbox !== '') {
    $sql .= " AND gearbox = '$gearbox'";
}
if ($kilometers !== '') {
    $sql .= " AND ";
    switch ($kilometers) {
        case 'kmRange1':
            $sql .= "kilometers <= 50000";
            break;
        case 'kmRange2':
            $sql .= "kilometers > 50000 AND kilometers <= 100000";
            break;
        case 'kmRange3':
            $sql .= "kilometers > 100000 AND kilometers <= 150000";
            break;
        case 'kmRange4':
            $sql .= "kilometers > 150000 AND kilometers <= 250000";
            break;
        case 'kmRange5':
            $sql .= "kilometers > 250000";
            break;
    }
}

// Add sorting to the query
if ($sortOrder === 'A-Z') {
    $sql .= " ORDER BY name ASC";
} elseif ($sortOrder === 'Z-A') {
    $sql .= " ORDER BY name DESC";
} elseif ($sortPrice === 'lowestToHighest') {
    $sql .= " ORDER BY price ASC";
} elseif ($sortPrice === 'highestToLowest') {
    $sql .= " ORDER BY price DESC";
}

// Fetch product data from the database
try {
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Error executing SQL query: " . $conn->error);
    }

    $products = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    } else {
        throw new Exception("No products found in the database.");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MotorEmpire | Vehicles</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--External Css-->
    <link rel="stylesheet" href="stylecards.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .heading {
            padding-bottom: 2rem;
            font-size: 4.5rem;
            text-align: center;
        }
        header {
            z-index: 10000;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 2rem 9%;
            background-color: <?php echo htmlspecialchars($backgroundColor); ?>;
            box-shadow: var(--box_shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            color: #000;
            border: #000;
            font-size: 2.5rem;
            font-weight: 700;
        }
        header .logo span {
            color: var(--main);
        }
        header .navbar a {
            color: <?php echo htmlspecialchars($_Color); ?>;
            font-size: 1.6rem;
            margin: 0.6rem;
        }
        header .navbar a:hover {
            color: var(--main);
            text-decoration: none;
        }
        .featured-places .featured-item .card-image {
            overflow: hidden;
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .featured-places .featured-item {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .featured-item:hover {
            box-shadow: 0 20px 16px rgba(0, 0, 0, 0.4);
            transform: scale(1.05);
        }
        .no-products {
            text-align: center;
            margin-top: 50px;
            font-size: 24px;
            color: red;
        }
        .filter-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .filter-container h3 {
            color: #333;
            border-bottom: 2px solid #ff0000;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .filter-container select, .filter-container .btn {
            width: 100%;
            height: 40px;
            border-radius: 7px;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 5px 10px;
            font-size: 14px;
            color: #333;
        }
        #Searchbtn {
            background-color: #ff0000;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }
        #Searchbtn:hover {
            background-color: #ffffff;
            color: #ff0000;
            border: 1px solid #ff0000;
            font-size: 16px;
        }
        @media (max-width: 768px) {
            .form-group {
                margin-bottom: 10px;
            }
            .filter-container select, .filter-container .btn {
                font-size: 14px;
            }
        }
        .card-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #ff0000;
            color: #fff;
            padding: 10px;
            margin-top: 10px;
            text-transform: uppercase;
            border-radius: 5px;
            text-decoration: none;
        }
        .card-button:hover {
            background-color: #ffffff;
            color: #ff0000;
            border: 1px solid #ff0000;
        }
    </style>
</head>
<body onload="document.getElementById('filterForm').reset();">
    <header>
        <div id="MenuBtn" class="fas fa-bars"></div>
        <a href="Home/index.php" class="logo"><img src="images/logo2.png" width="100px" height="50px"></a>
        <nav class="navbar">
            <a href="Home/index.php">Home</a>
            <a href="vehicles.php">Vehicles</a>
            <a href="src/ContactUs/contact.php">Contact</a>
        </nav>
    </header>
    <br><br>

    <div style="margin-top: 70px;" class="filter-container">
        <h3 class="text-center text-uppercase font-monospace m-3">Filter</h3>
        <div class="container mt-1">
            <form method="post" id="filterForm">
                <div class="row" style="margin-top: 20px">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Used/New:</label>
                            <select class="form-control" name="usedNew">
                                <option value="">-- All --</option>
                                <option value="new vehicles">New vehicle</option>
                                <option value="used vehicles">Used vehicle</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Model:</label>
                            <select class="form-control" name="model">
                                <option value="">-- All --</option>
                                <option value="BMW 7 series">BMW 7 series</option>
                                <option value="BMW X7">BMW X7</option>
                                <option value="BMW M5 CS">BMW M5</option>
                                <option value="BMW 5 series">BMW 5 series</option>
                                <option value="BMW M4 Competition">BMW M4</option>
                                <option value="BMW M3 CS">BMW M3 CS</option>
                                <option value="BMW M3 Competition">BMW M3 Competition</option>
                                <option value="BMW 3 series">BMW 3 Series</option>
                                <option value="BMW iX2">BMW iX2</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="sortOrder">Sort Names:</label>
                            <select class="form-control" name="sortOrder">
                                <option value="">Select Order</option>
                                <option value="A-Z">A to Z</option>
                                <option value="Z-A">Z to A</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Kilometers:</label>
                            <select class="form-control" name="kilometers">
                                <option value="">-- All --</option>
                                <option value="kmRange1">0Km- 50000Km</option>
                                <option value="kmRange2">50000Km - 100000km</option>
                                <option value="kmRange3">100000Km - 150000Km</option>
                                <option value="kmRange4">150000Km - 250000Km</option>
                                <option value="kmRange5">250000Km - ...</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Price:</label>
                            <select class="form-control" name="sortPrice">
                                <option value="">Select</option>
                                <option value="lowestToHighest">Lowest to Highest</option>
                                <option value="highestToLowest">Highest to Lowest</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Gearbox:</label>
                            <select class="form-control" name="gearbox">
                                <option value="">-- All --</option>
                                <option value="Manual">Manual</option>
                                <option value="Automatic">Automatic</option>
                            </select>
                        </div>
                    </div>

                    <button id="Searchbtn" class="btn" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <section class="featured-places">
        <div class="container" style="margin-top:50px;">
            <div class="row" id="productContainer">
                <?php if (empty($products)): ?>
                    <div class="col-12">
                        <div class="no-products text-center">
                            No products found
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-4">
                            <div class="featured-item">
                                <div class="card-image">
                                    <img src="<?= htmlspecialchars($product['image']); ?>" alt="Loading image...">
                                </div>
                                <div class="d-flex justify-content-around mt-2">
                                    <strong class="text-muted"><i class="fa fa-dashboard"></i> <?= htmlspecialchars($product['kilometers']); ?> km</strong>
                                    <strong class="text-muted"><i class="fa fa-cube"></i> <?= htmlspecialchars($product['engineType']); ?></strong>
                                    <strong class="text-muted"><i class="fa fa-cog"></i> <?= htmlspecialchars($product['gearbox']); ?></strong>
                                </div>
                                <div class="card-heading"><?= htmlspecialchars($product['name']); ?></div>
                                <div class="card-text">
                                    <?php
                                    // Shorten description if it's longer than 100 characters
                                    echo strlen($product['description']) > 100 ? substr($product['description'], 0, 100) . '...' : $product['description'];
                                    ?>
                                </div>
                                <div class="card-text">$<?= htmlspecialchars($product['price']); ?></div>
                                <form action="src/CarDemo/generateCarDemo.php" method="post">
                                    <input type="hidden" name="carId" value="<?= htmlspecialchars($product['carID']); ?>">
                                    <button type="submit" class="card-button">Purchase</button>
                                </form>


                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!--Bootstrap5 JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var products = <?php echo json_encode($products); ?>;
    </script>
</body>
</html>
