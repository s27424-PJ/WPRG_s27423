<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Reservation Summary</h2>
    <?php
    
        $num_of_people = isset($_POST['num_of_people']) ? $_POST['num_of_people'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $credit_card = isset($_POST['credit_card']) ? $_POST['credit_card'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $arrival_date = isset($_POST['arrival_date']) ? $_POST['arrival_date'] : '';
        $arrival_time = isset($_POST['arrival_time']) ? $_POST['arrival_time'] : '';
        $child_bed = isset($_POST['child_bed']) ? "Yes" : "No";
        $amenities = isset($_POST['amenities']) ? $_POST['amenities'] : array();
        $first_names = array();
        $last_names = array();


        for ($i = 1; $i <= $num_of_people; $i++) {
            $first_name_key = 'first_name_' . $i;
            $last_name_key = 'last_name_' . $i;
            $first_names[] = isset($_POST[$first_name_key]) ? $_POST[$first_name_key] : '';
            $last_names[] = isset($_POST[$last_name_key]) ? $_POST[$last_name_key] : '';
        }
        if ($num_of_people ==1) {
            echo "<p>First Name: $first_names[0]</p>";
            echo "<p>Last Name: $last_names[0]</p>";
        }
        echo "<p>Number of people: $num_of_people</p>";
        echo "<p>Booking Person's Information:</p>";
        echo "<ul>";
        echo "<li>Address: $address</li>";
        echo "<li>Credit Card Information: $credit_card</li>";
        echo "<li>Email: $email</li>";
        echo "<li>Arrival Date: $arrival_date</li>";
        echo "<li>Arrival Time: $arrival_time</li>";
        echo "<li>Need additional bed for child: $child_bed</li>";
        echo "<li>Amenities: " . implode(", ", $amenities) . "</li>";
        echo "</ul>";

        if ($num_of_people > 1) {
            echo "<p>Guests Information:</p>";
            echo "<ul>";
            for ($i = 0; $i < $num_of_people; $i++) {
                echo "<li>Person " . ($i + 1) . " - First Name: " . $first_names[$i] . ", Last Name: " . $last_names[$i] . "</li>";
            }
            echo "</ul>";
        }
    
    ?>
</body>
</html>
