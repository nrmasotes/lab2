		// W3 school - JS Confirm Box
		// W3 school - JS Popup Box
        alert
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