
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
        $age = isset($_POST["age"]) ? $_POST["age"] : "";
        $food = isset($_POST["food"]) ? $_POST["food"] : "";
        $partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";

        $species = "Not selected";

        if (isset($_POST["species"])) {
            if ($_POST["species"] == "M")
                $species = "Human";
            elseif ($_POST["species"] == "D")
                $species = "Dwarf";
            elseif ($_POST["species"] == "E")
                $species = "Elf";
            elseif ($_POST["species"] == "H")
                $species = "Hobbit";
        }

        $booking = array();

        if (isset($_POST["accom"]))
            $booking[] = "Accommodation";

        if (isset($_POST["4day"]))
            $booking[] = "Four-day tour";

        if (isset($_POST["10day"]))
            $booking[] = "Ten-day tour";

        $bookingText = count($booking) > 0
            ? implode(" and ", $booking)
            : "No tour selected";

        echo "<p>";
        echo "Welcome " . htmlspecialchars($firstname) . " " . htmlspecialchars($lastname) . "!<br>";
        echo "You are now booked on the " . htmlspecialchars($bookingText) . "<br>";
        echo "Species: " . htmlspecialchars($species) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Meal Preference: " . htmlspecialchars($food) . "<br>";
        echo "Number of travellers: " . htmlspecialchars($partysize);
        echo "</p>";
    ?>
</body>
</html>
