<h1>Rekayasa Perangkat Lunak</h1>
<div id="countdown"></div>

<script>
    // Set the date and time to count down to
    var countDownDate = new Date("March 13, 2023 23:59:59").getTime();

    // Update the countdown every second
    var x = setInterval(function() {

    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the time remaining
    var distance = countDownDate - now;

    // Calculate days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
`
    // Output the countdown in the HTML element with id="countdown"
    document.getElementById("countdown").innerHTML = "Time remaining: " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    // If the countdown is finished, display a message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>