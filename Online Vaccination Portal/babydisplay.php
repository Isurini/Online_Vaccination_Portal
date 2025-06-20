<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4a4a4a;
            margin-top: 20px;
        }

       
        .dashboard-container {
            margin: 40px auto;
            width: 95%;
            max-width: 1200px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color:dimgray;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        table tr:nth-child(even) {
            background-color:#e9ecef;
        }

        table tr:hover {
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }

        .update {
            background-color:crimson;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 10px 2px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete
        {
            background-color:cadetblue; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 10px 2px;
            border-radius: 5px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
        <h1> Baby Information Display Page</h1>
        <table >
        <tr>
            <th> Baby ID</th>
            <th> Name </th>
            <th> Age-Year </th>
            <th> Age-Month </th>
            <th> DOB </th>
            <th> Weight </th>
            <th> Height </th>
            <th> Parent Name</th>
            <th> Email </th>
            <th> Contact No </th>
            <th> Address </th>

        </tr>
        <?php include 'babydisplay.inc.php';?>
    </table>
        <script src="js/update.js"></script>

        <button type="submit"><a href="baby-record-book.php">View Baby Record</button>
</body>
</html>