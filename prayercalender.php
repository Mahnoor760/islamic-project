<?php

function getPrayerTimes($month) {
    $latitude = 24.906232697185235;
    $longitude = 67.08000914379674;
    $method = 1; // Muslim World League

    $url = "https://api.aladhan.com/v1/calendar/2024/{$month}?latitude={$latitude}&longitude={$longitude}&method={$method}";
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    return $data['data'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

body {
        font-family: "jameel";
        background-color: black;
        color: #bd8908; 
        padding: 20px;
    }
    h1 {
        direction: ltr;
    color: #bd8908; 
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    font-family: serif;
    font-size: 2.3rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    transition: color 0.4s ease, transform 0.4s ease, text-shadow 0.4s ease;
}
 h1:hover {
    color: #bd8908; 
    transform: scale(1.05); 
    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5); 
}
h2 {
    text-align: center;
    color: #bd8908; 
    background-color: #e8eaf6; /* Light indigo background */
    padding: 10px;
    border-radius: 10px;
    margin: 20px 0;
}
table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    background-color: #fff; /* White background */
    border-radius: 10px;
    overflow: hidden;
}
th, td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}
th {
    background-color: #e8eaf6; 
    color: #bd8908; 
}
tr:nth-child(even) {
    background-color: #f1f8e9; /* Light green for even rows */
}
tr:hover {
    background-color: #e8f5e9; /* Slightly darker green on hover */
}
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }
    th {
        display: none;
    }
    td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    td:before {
        content: attr(data-label);
        flex-basis: 50%;
        text-align: left;
        font-weight: bold;
    }
}
</style>
</body>
</html>

<?php

    echo "<h1>Prayer Times Calendar for 2024</h1>";
    
    for ($month = 1; $month <= 12; $month++) {
        $prayerTimes = getPrayerTimes($month);
        
        echo "<h2>" . date('F', mktime(0, 0, 0, $month, 10)) . "</h2>";
        echo "<table>";
        echo "<tr><th>Date</th><th>Fajr</th><th>Dhuhr</th><th>Asr</th><th>Maghrib</th><th>Isha</th></tr>";

        foreach ($prayerTimes as $day) {
            echo "<tr>";
            echo "<td data-label='Date'>" . $day['date']['gregorian']['date'] . "</td>";
            echo "<td data-label='Fajr'>" . $day['timings']['Fajr'] . "</td>";
            echo "<td data-label='Dhuhr'>" . $day['timings']['Dhuhr'] . "</td>";
            echo "<td data-label='Asr'>" . $day['timings']['Asr'] . "</td>";
            echo "<td data-label='Maghrib'>" . $day['timings']['Maghrib'] . "</td>";
            echo "<td data-label='Isha'>" . $day['timings']['Isha'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }


displayPrayerTimes();

?>


