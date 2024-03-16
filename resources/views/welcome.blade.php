<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Internship</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" sizes="64x64"
        href="{{ asset('images/24077992-woman-enjoying-the-sun.jpg') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-4">
                    <h1>edupath</h1>
                </div>
                <div class="col-4">
                    <p>Test Prep & College Explorer</p>
                </div>
                <div class="col-4">
                    <button class="btn-group" type="submit">Send Your Teen the App</button>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="left-column">
                <h1>Unlock your teen's potential.</h1>
                <p>The only full-service test prep your teen can do anywhere, anytime.</p>
            </div>

            <div class="right-column">
                <form action="#">
                    <p>Send the app to your student now</p>
                    <div class="group">
                        <input class="input-group-text" type="text" name="your_name" placeholder="Your Name">
                        <input class="input-group-text" type="email" name="student_email"
                            placeholder="Student's Email">
                        <input class="input-group-text" type="text" name="student_mobile"
                            placeholder="Student's Mobile #">
                        <select class="form-select" name="exam">
                            <option value="sat">SAT</option>
                            <option value="act">ACT</option>
                        </select>
                        <button onclick="http://internship.local:8000/" class="btn-group" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>Forget classes. Next
                generation SAT & ACT
                prep is here.</p>
            <div class="row">
                <div class="col-4"><i class="bi bi-phone"></i></div>
                <div class="col-4"><i class="bi bi-wifi"></i></div>
                <div class="col-4"><i class="bi bi-chat-dots-fill"></i></div>
            </div>
        </div>
    </div>
</body>

</html>
