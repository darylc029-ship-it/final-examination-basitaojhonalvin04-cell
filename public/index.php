<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <img src="../images/northhub.svg" id="logo" alt="Logo">

        <button class="navbarbuttons" onclick="showSection('create')">Create</button>
        <button class="navbarbuttons" onclick="showSection('read')">Read</button>
        <button class="navbarbuttons" onclick="showSection('update')">Update</button>
        <button class="navbarbuttons" onclick="showSection('delete')">Delete</button>
    </nav>

    <section id="home" class="homecontent">
        <h1 class="splash">Welcome to Student Management System</h1>
        <h2 class="splash">A Project in Integrative Programming Technologies</h2>
    </section>

    <section id="create" class="content">
        <h1 class="contenttitle">Insert New Student</h1>

        <form action="../includes/insert.php" method="POST">
            <label class="label">Surname</label>
            <input type="text" name="surname" class="field" required><br/>

            <label class="label">Name</label>
            <input type="text" name="name" class="field" required><br/>

            <label class="label">Middle name</label>
            <input type="text" name="middlename" class="field"><br/>

            <label class="label">Address</label>
            <input type="text" name="address" class="field"><br/>

            <label class="label">Mobile Number</label>
            <input type="text" name="contact" class="field"><br/>

            <div id="btncontainer">
                <button type="button" id="clrbtn" class="btns">Clear Fields</button>
                <button type="submit" id="savebtn" class="btns">Save</button>
            </div>
        </form>

        <div id="success-toast" class="toast-hidden">
            Registration Successful!
        </div>
    </section>

    <section id="read" class="content">View Students</section>
    <section id="update" class="content">Update Student Records</section>
    <section id="delete" class="content">Remove Student Records</section>

    <script>
        // SECTION SWITCHER
        function showSection(sectionId) {
            const sections = document.querySelectorAll(".content, .homecontent");

            sections.forEach(sec => {
                sec.style.display = "none";
            });

            document.getElementById(sectionId).style.display = "block";
        }

        // SHOW HOME ON LOAD
        window.onload = function () {
            showSection("home");

            // toast message
            const urlParams = new URLSearchParams(window.location.search);

            if (urlParams.get("status") === "success") {
                const toast = document.getElementById("success-toast");

                if (toast) {
                    toast.classList.remove("toast-hidden");
                    toast.classList.add("toast-show");

                    setTimeout(() => {
                        toast.classList.remove("toast-show");
                        toast.classList.add("toast-hidden");
                    }, 3000);
                }
            }
        };

        // CLEAR BUTTON
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("clrbtn").addEventListener("click", function () {
                document.querySelector("form").reset();
            });
        });
    </script>

</body>
</html>