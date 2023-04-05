<!-- 
->height
->width
->number of divs
->background color
->text
->text color -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-12 offset-sm-2">
                <h1 align="center">Simple Div Generator</h1>
                <hr>
                <form action="success2.php" method="post">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Enter Height</td>
                            <td>
                                <input type="text" name="Height" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Enter Width</td>
                            <td>
                                <input type="text" name="Width" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Number of Divs</td>
                            <td>
                                <input type="Number" name="Div" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Background Color</td>
                            <td>
                                <input type="Color" name="" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Div Text</td>
                            <td>
                                <input type="text" name="Div Text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Text Color</td>
                            <td>
                                <select name="text_color" id="">
                                    <option value="0">Black</option>
                                    <option value="1">White</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Success" class="btn btn-success">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c98716b67d.js" crossorigin="anonymous"></script>
</body>

</html>