
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

<?php
    $name = "NURULAIN NATASHA BINTI KAMARUZAMAN";
    $matric = "AI250076";
    $course = "BACHELOR OF COMPUTER SCIENCE (WEB TECHNOLOGY) WITH HONOURS";
    $year = "Your 2";
    $address = "100, JALAN PULAI PERDANA 3/8, TAMAN SRI PULAI PERDANA";
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
