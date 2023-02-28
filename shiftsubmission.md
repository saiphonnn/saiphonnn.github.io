<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Shift Submission</title>
</head>
<body>
    <h1>Shift Update</h1>
    <form action="/action_page.php">
        <h3>Type</h3>
        <input type="radio" id="clockin" name="shifttype" value="Clock-in">
        <label for="html">Clock-in</label><br>
        <input type="radio" id="clockout" name="shifttype" value="Clock-out">
        <label for="css">Clock-out</label><br>
        <input type="radio" id="break" name="shifttype" value="Break">
        <label for="css">Break</label><br>
        <h3>Time</h3>
        <label for="hours">Hour:</label>
        <input type="text" id="hour" name="hour" placeholder="A value 1 to 12"><br>
        <label for="minute">Minute:</label>
        <input type="text" id="minute" name="minute" placeholder="A value 0 to 59"><br><br>
        <input type="radio" id="am" name="ampm" value="AM">
        <label for="html">AM</label><br>
        <input type="radio" id="pm" name="ampm" value="PM">
        <label for="css">PM</label><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
