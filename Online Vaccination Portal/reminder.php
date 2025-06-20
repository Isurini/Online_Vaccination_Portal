<?php
session_start();
require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Shield - Services</title>
    <link rel="stylesheet" href="reminder.css">
    <script src="https://kit.fontawesome.com/20f08145b4.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>


    <main>
        <section class="notifications">
            <h2>Latest Vaccine Notifications</h2>
            <p>Stay up to date with the latest vaccine information for your child.</p>
            <button id="getNotificationBtn" class="btn"><i class="fas fa-bell"></i> Get Notifications</button>
        </section>
    </main>

    <footer>
        


    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            const getNotificationBtn = document.getElementById('getNotificationBtn');

           

            getNotificationBtn.onclick = function() {
                alert('You have successfully subscribed to notifications!');
            }

            const viewRecordBtns = document.getElementsByClassName('view-record-btn');
            for (let btn of viewRecordBtns) {
                btn.onclick = function() {
                    const babyId = this.getAttribute('data-id');
                    window.location.href = 'baby-record-book.php?baby_id=' + babyId;
                }
            }
        });

        function generateCalendar() {
            const today = new Date();
            const month = today.getMonth();
            const year = today.getFullYear();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let calendarHTML = '<table>';
            calendarHTML += '<tr><th colspan="7">' + today.toLocaleString('default', { month: 'long' }) + ' ' + year + '</th></tr>';
            calendarHTML += '<tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>';

            let day = 1;
            for (let i = 0; i < 6; i++) {
                calendarHTML += '<tr>';
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < new Date(year, month, 1).getDay()) {
                        calendarHTML += '<td></td>';
                    } else if (day > daysInMonth) {
                        break;
                    } else {
                        if (day === today.getDate()) {
                            calendarHTML += '<td class="today">' + day + '</td>';
                        } else {
                            calendarHTML += '<td>' + day + '</td>';
                        }
                        day++;
                    }
                }
                calendarHTML += '</tr>';
                if (day > daysInMonth) {
                    break;
                }
            }
            calendarHTML += '</table>';

            document.getElementById('calendar').innerHTML = calendarHTML;
        }

        document.addEventListener('DOMContentLoaded', function() {
            generateCalendar();
        });
    </script>
</body>
</html>