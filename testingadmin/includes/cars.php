<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page - Manage Cars</title>
    <link rel="stylesheet" type="text/css" href="../adminCSS/carscss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function readCarData(editingId = '') {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../read_cars.php?edit=' + editingId, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('carContent').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        function updateCarData(carId) {
            var xhr = new XMLHttpRequest();
            var data = new FormData();
            data.append('id', carId);
            data.append('name', document.getElementById('carName' + carId).value);
            data.append('category', document.getElementById('carCategory' + carId).value);
            data.append('model', document.getElementById('carModel' + carId).value);
            data.append('price', document.getElementById('carPrice' + carId).value);
            data.append('kilometers', document.getElementById('carKilometers' + carId).value);
            data.append('engineType', document.getElementById('carEngineType' + carId).value);
            data.append('gearbox', document.getElementById('carGearbox' + carId).value);
            data.append('description', document.getElementById('carDescription' + carId).value);

            xhr.open('POST', '../update_car.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        alert('Car data updated successfully!');
                        readCarData();
                    } else {
                        alert('Error updating car data: ' + xhr.statusText);
                    }
                }
            };
            xhr.send(data);
        }

        document.addEventListener('DOMContentLoaded', function() {
            readCarData();
        });
    </script>
</head>
<body>
    <div class="sidebar">
        <h3>Administrator</h3>
        <ul>
            <li><a href="../admin.php">Dashboard</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="cars.php">Cars</a></li>
        </ul>
    </div>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div class="main-content table-container">
        <div class="add-car-button">
            <a href="add_car.php"><button>Add Car</button></a>
        </div>
        <div id="carContent">
            <?php include '../read_cars.php'; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
