<?php
include("receiver_dev.php");
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
                                <th>Receiver Name</th>
                                <th>Phone</th>
                                <th>Medicine Name</th>
                                <th>Quantity</th>
                                <th>Done</th>
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
                                        <td><?php echo htmlspecialchars($data['name'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['phone'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['medicine'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['quantity'] ?? ''); ?></td>

                                        <td><input type="checkbox"><a href="donatn_updt.php?id=<?php echo urlencode($data['id']); ?>&nn=<?php echo urlencode($data['med_name'] ?? ''); ?>&ph=<?php echo urlencode($data['phone'] ?? ''); ?>&md=<?php echo urlencode($data['medicine'] ?? ''); ?>
                                                                                                                                                                                                                &qt=<?php echo urlencode($data['quantity'] ?? '');
                                                                                                                                                                                                                    ?>" onclick="return checkupdate()"></a></td>

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