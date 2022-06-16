<html>

<head>
    <title>Document</title>
</head>

<body>
    <h3>Add student</h3>
    <input type="text" id="name" placeholder="name">
    <button onclick="addUser()">Add</button>
    <br>
    <button onclick="getUser()">Get Student</button>
    <div id="display"></div>

    <script>
    function getUser() {
        const xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("display").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET", "server.php", true)

        xhttp.send()
    }

    function addUser() {
        let name = document.getElementById("name").value
        if (name === "") {
            alert("name cannot be empty")
        } else {
            const xhttp = new XMLHttpRequest()
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    getUser()
                }
            }
            xhttp.open("POST", "server.php", true)
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.send(`name=${name}`);
        }
    }
    </script>
</body>

</html>