<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Club Ride</title>
    <link rel="stylesheet" href="q2a.css">
</head>

<body>
    <header>
        <h1>Add Club Ride</h1>
    </header>
    <nav>
        <!-- Placeholder for navigation features -->
    </nav>
    <main>
        <form action="" method="POST">
            <label for="rideName">Name of Ride:</label>
            <input type="text" id="rideName" name="rideName" required><br>
            
            <label for="rideType">Type of Ride:</label>
            <input type="text" id="rideType" name="rideType" required><br>
            
            <label for="date">Date of Ride:</label>
            <input type="date" id="date" name="date" required><br>
            
            <label for="startTime">Start time:</label>
            <input type="time" id="startTime" name="startTime" required><br>
            
            <label for="duration">Duration (mins):</label>
            <input type="number" id="duration" name="duration" required><br>
            
            <label for="meetingPoint">Meeting point:</label>
            <input type="text" id="meetingPoint" name="meetingPoint" required><br>
            
            <label for="distance">Distance (km):</label>
            <input type="number" id="distance" name="distance" required><br>
            
            <label for="elevation">Elevation (m):</label>
            <input type="number" id="elevation" name="elevation" required><br>
            
            <label for="maxGroupSize">Maximum group size:</label>
            <input type="number" id="maxGroupSize" name="maxGroupSize" required><br>
            
            <label for="leaderName">Name of leader:</label>
            <input type="text" id="leaderName" name="leaderName" required><br>
            
            <label for="contactNumber">Contact number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" required><br>
            
            <label for="altContactNumber">Alternative contact number:</label>
            <input type="tel" id="altContactNumber" name="altContactNumber" required><br>
            
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Proposed">Proposed</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select><br>
            
            <label for="comments">Comments:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50" required></textarea><br>
            
            <button type="submit">Submit</button>
        </form>
        
    </main>
</body>

</html>
