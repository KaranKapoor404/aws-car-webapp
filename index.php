<?php
$conn = mysqli_connect("localhost", "root", "", "cars_db");

$results = [];

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM cars WHERE make LIKE '%$search%' OR model LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $results[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Explorer</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>

<div class="hero">
    <h1>🚗 Car Explorer</h1>
    <p>Search and explore cars instantly</p>

    <form method="GET">
        <input type="text" name="search" placeholder="Search by brand or model..." required>
        <button type="submit">Search</button>
    </form>
</div>

<div class="results">
    <?php if (!empty($results)): ?>
        <?php foreach ($results as $car): ?>
            <div class="card">
                <img src="<?php echo $car['image_url']; ?>" alt="car">
                <div class="card-content">
                    <h3><?php echo $car['make'] . " " . $car['model']; ?></h3>
                    <p>Year: <?php echo $car['year']; ?></p>
                    <p>Color: <?php echo $car['color']; ?></p>
                    <p class="price">$<?php echo $car['price']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php elseif (isset($_GET['search'])): ?>
        <p class="no-result">No cars found. Try another search.</p>
    <?php endif; ?>
</div>

<footer>
    <p>© 2026 Car Explorer | Built with PHP & MySQL</p>
</footer>

</body>
</html>