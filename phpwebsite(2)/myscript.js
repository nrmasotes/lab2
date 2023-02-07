		// W3 school - JS Confirm Box
		// W3 school - JS Popup Box
        // contactmentor.com - JS visitor counter
        // W3 school -JS Functions
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
        

                    