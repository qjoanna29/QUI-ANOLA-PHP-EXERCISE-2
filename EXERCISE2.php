<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities List</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>

    <div class="container">
        <h2>PHP EXERCISE 2: List of ten of the Largest Cities</h2>

        <!-- Ten Largest Cities Section -->
        <div class="city-list">
            <h3 class="section-title">Ten Largest Cities</h3>
            <p class="separator">
                <?php
                    $cities = [
                        "Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul",
                        "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"
                    ];

                    // Display the original cities
                    echo implode(", ", $cities);
                ?>
            </p>
        </div>

        <!-- Sorted Original Cities Section -->
        <div class="city-list">
            <h3 class="section-title">Sorted Original Cities</h3>
            <ul>
                <?php
                    // Sort the cities and display them
                    sort($cities);
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>
        </div>

        <!-- Added Section -->
        <div class="city-list">
            <h3 class="section-title">Adding New Cities</h3>
            <p class="separator">Los Angeles, Calcutta, Osaka, Beijing.</p>
        </div>

        <!-- Sorted Final Cities -->
        <div class="city-list">
            <h3 class="section-title">Sorted Final Cities</h3>
            <ul>
                <?php
                    // Add new cities to the array
                    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

                    // Sort the cities again after adding the new cities
                    sort($cities);

                    // Display the final sorted cities
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>
        </div>
    </div>

</body>
</html>
