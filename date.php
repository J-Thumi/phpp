<?php
//the time() function is used to get the current Unix timestamp. The Unix timestamp is the number of seconds that have passed since the Unix Epoch (January 1, 1970, 00:00:00 GMT), not counting leap seconds.
$currentTimestamp = time();
echo "Current Unix Timestamp: " . $currentTimestamp;  
// Output: Current Unix Timestamp: 1701031185 (example output)


//You can use the date() function in conjunction with time() to convert the timestamp into a human-readable date format.
$currentTimestamp = time();
$formattedDate = date('Y-m-d H:i:s', $currentTimestamp);
echo "Current Date and Time: " . $formattedDate;
// Output: Current Date and Time: 2024-09-24 14:12:05 (example output)


//You can also use the time() function to calculate the difference between two timestamps.
$startTime = time();
// Simulating a delay (for example purposes)
sleep(5);  // Sleep for 5 seconds
$endTime = time();

$timeDifference = $endTime - $startTime;
echo "Elapsed Time: " . $timeDifference . " seconds";  
// Output: Elapsed Time: 5 seconds

//Logging Events: Capture when an event occurred by storing the timestamp.
//Session Management: Track user session expiration times.
// Timers: Measure the duration of processes or actions.
?>