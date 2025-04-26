<!-- Mixing PHP with HTML  concept  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mixing PHP with HTML</title>
    </head>
    <style>
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;   /* Merges the 2 borders */
        }
        td,th {
            border: 1px solid #ccc;
            padding: 5px 10px;   /* width   height */
        }
    </style>
    <body>
        <h1>Mixing PHP with HTML code</h1>
        <table>
            <thead>
                <tr>
                    <th>Sl.no</th>
                    <th>Name</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <!-- html code -->
                <tr>
                    <td>1</td>
                    <td>Ram</td>
                    <td>Chennai</td>
                </tr>
                <!-- PHP code -->
                <?php 
                    echo "
                    <tr>
                        <td>2</td>
                        <td>John</td>
                        <td>US</td>
                    </tr>
                    "
                ?>
                <!-- html code -->
                <tr>
                    <td>3</td>
                    <td>Elsa</td>
                    <td>UK</td>
                </tr>

            </tbody>
        </table>
    </body>
</html>

