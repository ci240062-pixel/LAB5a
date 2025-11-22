    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table, td{
            border: 1px solid;
            border-spacing: 1px;
            border-collapse: collapse;
            padding-right: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Muhammad Hakimi bin Abdul Rawi";
        $matric_number = "CI240062";
        $course = "Information Security";
        $yos = "2024/2025";
        $address = "Lorong Wawasan 1";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo "$matric_number"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$yos"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
    
</body>
</html>         