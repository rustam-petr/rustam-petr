<?php
include "calc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row one" >
        <div class="col-sm"></div>
        <div class="col-sm">

            <table class="tab">
                <tr>
                    <td>
                        <button class=" but" onclick="insert(0)">0</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(1)">1</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(2)">2</button>
                    </td>
                    <td>
                        <button class=" but" onclick="f()">С</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class=" but" onclick="insert(3)">3</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(4)">4</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(5)">5</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(6)">6</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class=" but" onclick="insert(7)">7</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(8)">8</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(9)">9</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('+')">+</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class=" but" onclick="insert('-')">-</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('*')">*</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('/')">/</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('^')">^</button>
                    </td>

                </tr>

            </table>
            <form action="?" method="post">
                <input value="<?= $result;?>" type="text" class="txt" id="text" name="calc">

                <input type="submit" class="rav" value="=">
            </form>
        </div>
        <div class="col-sm">

        </div>


    </div>
</div>
<script>
    function f() {
        document.getElementById("text").value = ""

    }

    function insert(value) {
        document.getElementById("text").value += value
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">

</script>
</body>

</html>