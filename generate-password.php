<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<main class="d-flex flex-column align-items-center">
    <h1>Password Generator</h1>
    
    <form class="form-inline">
        <input type="text" class="form-control" id="password" placeholder="Generate Password">
    </form>
    
    <form class="form-inline">
        <button type="button" class="btn btn-primary">Generate</button>
        <button type="button" class="btn btn-outline-primary">Copy</button>
    </form>
    
    <form class="form-inline">
        <div class="form-group">
            <label for="pwLength">Password Length</label>
            <select class="custom-select" id="pwLength">
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option selected="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
            </select>
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="caps">
                A-Z
            </label>
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="special">
                !-?
            </label>
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="numbers" checked="checked">
                1-9
            </label>
        </div>
    </form>
</main>

</body>