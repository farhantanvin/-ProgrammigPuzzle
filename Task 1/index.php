<!DOCTYPE html>
<html>

<head>
    <title>Field Nation Task 2</title>
</head>

<body>
    <?php
    class CustomArrayObject extends ArrayObject
    {
        public function displayAsTable()
        {
            echo "<table border='1'>";
            echo "<tr><th>Key</th><th>Value</th></tr>";

            foreach ($this as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }

            echo "</table>";
        }
    }

    // Instantiate the CustomArrayObject class
    $customArray = new CustomArrayObject();

    // Set some keys and values for Instantiate
    $customArray['Name'] = 'Farhan Tanvin';
    $customArray['Age'] = 27;
    $customArray['Location'] = 'Dhaka Bangladesh';

    // Display the data as an HTML table
    $customArray->displayAsTable();
    ?>

</body>

</html>