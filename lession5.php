<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1> Simple Interest Calculator </h1>
    <hr>
    <form method="post" action="success.php">
        <table border="2" width="40%" align="center" cellpadding="10">
            <tr>
                <td>Enter the Principal Amount</td>
                <td>
                    <input type="number" name="pname" placeholder="Enter the Principal Amount" required>
                </td>
            </tr>
            <tr>
                <td>Enter the Rate of Interest</td>
                <td>
                    <input type="number" name="rname" placeholder="Enter the Rate of Interest" required>
                </td>
            </tr>
            <tr>
                <td>Enter the Month</td>
                <td>
                    <input type="number" name="tname" placeholder="Enter the Month" required>
                </td>
            </tr>
            <td align="center" colspan="2">
                <input type="submit" name="submit" value="Submit" />
                <input type="reset" name="reset" value="Clear all" />
            </td>
</body>

</html>