<?php
include("med_stock_dev.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        h1 {
            text-align: center;
            margin-right: 200px;
            margin-top: 80px;
        }

        th {
            background-color: black;
            color: white;
            text-align: center;
        }

        td {
            background-color: lightgrey;
        }
    </style>
</head>

<body>

    <h1>MEDICINE DETAILS</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Medicine Name</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Expiry Date</th>
                                <th>UPDATE</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (is_array($fetchData)) {
                                $id = 1;
                                foreach ($fetchData as $data) {
                            ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($id); ?></td>
                                        <td><?php echo htmlspecialchars($data['med_name'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['description'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['quantity'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['expiry_dt'] ?? ''); ?></td>

                                        <td><a href="stock_updt.php?id=<?php echo urlencode($data['id']); ?>&nn=<?php echo urlencode($data['med_name'] ?? ''); ?>&ds=<?php echo urlencode($data['description'] ?? ''); ?>
                                                                                                                                                                                                                &qt=<?php echo urlencode($data['quantity'] ?? '');
                                                                                                                                                                                                                    ?>&ed=<?php echo urlencode($data['expiry_dt'] ?? ''); ?>" onclick="return checkupdate()" class="btn btn-success">Update</a></td>

                                        <td><a href="stock_delete.php?id=$result[id]" onclick="return
                                        checkdelete()" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php
                                    $id++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="8">
                                        <?php echo $fetchData; ?>
                                    </td>
                                <tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>