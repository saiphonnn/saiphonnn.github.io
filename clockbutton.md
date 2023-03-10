<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Clock with Check In/Out Buttons</title>
    <style>
      #clock {
        font-size: 3em;
        text-align: center;
        margin-top: 20px;
      }
      button {
        font-size: 1em;
        margin-top: 10px;
        padding: 5px 10px;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div id="clock"></div>
    <button id="check-in">Check In</button>
    <button id="check-out">Check Out</button>
    <div id="time-diff"></div>
    
    <script>
      // Get the clock element
      const clock = document.getElementById('clock');

      // Update the clock every second
      setInterval(() => {
        const now = new Date();
        const hours = now.getHours() > 12 ? now.getHours() - 12 : now.getHours();
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const ampm = now.getHours() >= 12 ? 'PM' : 'AM';
        const time = `${hours}:${minutes} ${ampm}`;
        clock.textContent = time;
      }, 1000);

      // Get the check-in and check-out buttons
      const checkIn = document.getElementById('check-in');
      const checkOut = document.getElementById('check-out');

      // Initialize the check-in and check-out times
      let checkInTime = null;
      let checkOutTime = null;

      // Set the check-in time when the button is clicked
      checkIn.addEventListener('click', () => {
        checkInTime = new Date();
        alert(`You checked in at ${checkInTime.toLocaleTimeString()}`);
      });

      // Set the check-out time when the button is clicked
      checkOut.addEventListener('click', () => {
        checkOutTime = new Date();
        const diff = checkOutTime.getTime() - checkInTime.getTime();
        const diffSeconds = diff / 1000;
        const diffMinutes = diffSeconds / 60;
        const diffHours = diffMinutes / 60;
        const diffTime = `${Math.floor(diffHours)}:${Math.floor(diffMinutes % 60).toString().padStart(2, '0')}`;
        document.getElementById('time-diff').textContent = `You worked for ${diffTime} hours`;
      });
    </script>
  </body>
  </html>
