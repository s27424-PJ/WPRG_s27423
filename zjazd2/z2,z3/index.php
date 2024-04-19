<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Hotel Reservation Form</h2>
    <form id="reservationForm" action="operations.php" method="post">
        <label for="num_of_people">Number of People:</label>
        <select name="num_of_people" id="num_of_people" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>

        <div id="personFields">
        </div>

        <fieldset>
            <legend>Booking Person's Information:</legend>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>
            
            <label for="credit_card">Credit Card Information:</label>
            <input type="text" id="credit_card" name="credit_card" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="arrival_date">Arrival Date:</label>
            <input type="date" id="arrival_date" name="arrival_date" required><br><br>
            
            <label for="arrival_time">Arrival Time:</label>
            <input type="time" id="arrival_time" name="arrival_time" required><br><br>
            
            <input type="checkbox" id="child_bed" name="child_bed">
            <label for="child_bed">Need additional bed for child</label><br><br>
            
            <label for="amenities">Amenities:</label><br>
            <select name="amenities[]" id="amenities" multiple>
                <option value="Air_Conditioning">Air Conditioning</option>
                <option value="Smoking_Room">Smoking Room</option>
            </select><br><br>
        </fieldset><br>
        
        <input type="submit" value="Reserve">
    </form>

    <script>
        document.getElementById('num_of_people').addEventListener('change', function() {
            var numPeople = parseInt(this.value);
            var personFields = document.getElementById('personFields');
            personFields.innerHTML = ''; 

            for (var i = 1; i <= numPeople; i++) {
                var fieldset = document.createElement('fieldset');
                fieldset.innerHTML = `
                    <legend>Person ${i} Information:</legend>
                    <label for='first_name_${i}'>First Name:</label>
                    <input type='text' id='first_name_${i}' name='first_name_${i}' required><br><br>
                    <label for='last_name_${i}'>Last Name:</label>
                    <input type='text' id='last_name_${i}' name='last_name_${i}' required><br><br>
                  
                `;
                personFields.appendChild(fieldset);
            }
        });
    </script>
</body>
</html>
