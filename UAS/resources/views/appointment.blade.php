<!DOCTYPE html>
<html>
<head>
    <title>Make an Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 5px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Make an Appointment</h1>

    <form method="POST" action="{{ route('appointment') }}">
        @csrf

        <div>
            <label for="doctor">Select Doctor:</label>
            <select name="doctor" id="doctor">
                <option value="">Select a doctor</option>
                <option value="1">Doctor 1</option>
                <option value="2">Doctor 2</option>
                <option value="3">Doctor 3</option>
                <!-- Add more options for other doctors -->
            </select>
        </div>

        <div id="doctor-schedule" style="display: none;">
            <label>Select Schedule:</label>
            <select name="schedule" id="schedule">
                <!-- Schedule options will be dynamically added here based on the selected doctor -->
            </select>
        </div>

        <button type="submit" id="submit-appointment" style="display: none;">Submit Appointment</button>
    </form>

    <script>
        // Add event listener to the doctor select element
        document.getElementById('doctor').addEventListener('change', function() {
            var selectedDoctor = this.value;

            // Hide schedule and submit button initially
            document.getElementById('doctor-schedule').style.display = 'none';
            document.getElementById('submit-appointment').style.display = 'none';

            if (selectedDoctor) {
                // Show schedule and load schedule options based on selected doctor
                document.getElementById('doctor-schedule').style.display = 'block';

                // Simulating asynchronous request to retrieve doctor schedules
                // Replace with actual AJAX call to retrieve doctor schedules from the server
                setTimeout(function() {
                    var scheduleSelect = document.getElementById('schedule');
                    scheduleSelect.innerHTML = ''; // Clear previous options

                    // Add schedule options based on the selected doctor
                    if (selectedDoctor === '1') {
                        addScheduleOption(scheduleSelect, 'Schedule 1');
                        addScheduleOption(scheduleSelect, 'Schedule 2');
                    } else if (selectedDoctor === '2') {
                        addScheduleOption(scheduleSelect, 'Schedule 3');
                        addScheduleOption(scheduleSelect, 'Schedule 4');
                    } else if (selectedDoctor === '3') {
                        addScheduleOption(scheduleSelect, 'Schedule 5');
                        addScheduleOption(scheduleSelect, 'Schedule 6');
                    }

                    // Show submit button after loading the schedule options
                    document.getElementById('submit-appointment').style.display = 'block';
                }, 1000); // Adjust the delay as needed
            }
        });

        // Function to add an option to the schedule select element
        function addScheduleOption(selectElement, schedule) {
            var option = document.createElement('option');
            option.text = schedule;
            option.value = schedule;
            selectElement.add(option);
        }
    </script>
</body>
</html>
