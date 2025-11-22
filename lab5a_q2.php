<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
        <style>
            table, td{
                border: 1px solid;
                margin: auto;
                border-spacing: 2px;
            }
        </style>
</head>
<body>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ],
        ];
    ?>

    <table>
        <th>
            <tr>
                <td>Name</td>
                <td>Program</td>
                <td>Age</td>
            </tr>
        </th>
        <th>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['program']); ?></td>
                    <td><?php echo htmlspecialchars($student['age']); ?></td><br>
                </tr>
            <?php endforeach; ?>  
        </th>  
    </table> 
</body>
</html>