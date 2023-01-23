		// W3 school - JS Confirm Box
		// W3 school - JS Popup Box
        // contactmentor.com - JS visitor counter
        var counterContainer = document.querySelector(".website-counter");
        var resetButton = document.querySelector("#reset");
        var visitCount = localStorage.getItem("page_view");
        alert("This website created by Nathaniel Masotes has been visited " + visitCount + " times.");
        // Check if page_view entry is present
        if (visitCount) {
          visitCount = Number(visitCount) + 1;
          localStorage.setItem("page_view", visitCount);
        } else {
          visitCount = 1;
          localStorage.setItem("page_view", 1);
        }
        counterContainer.innerHTML = visitCount;
            

        function doDate()
        {
            var str = "";

            var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

            var now = new Date();

            str += "Today is: " + days[now.getDay()] + ", " + now.getDate() + " " + months[now.getMonth()] + " " + now.getFullYear() + " " + now.getHours() +":" + now.getMinutes() + ":" + now.getSeconds();
            document.getElementById("todaysDate").innerHTML = str;
        }

setInterval(doDate, 1000);

        function myFunction() {
            let text;
            let person = prompt("Please enter your full name, my friendly visitor:", "Harry Potter");
            var txt;
            if (confirm("You've been hacked, " + person + "!")) {
                txt = " Oh! so you just given up, " + person + "?" + " Just kidding its just a prank.";
            } else {
                txt = person + ", you cant accept defeat?" + " Just kidding its just a prank.";
            }
            document.getElementById("demo").innerHTML = txt;
            }

           