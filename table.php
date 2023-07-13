<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        h1 {
            text-align: center;
            margin-right: 200px;
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
    <h1>NGO DETAILS</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NGO Name</th>
                                <th>Email</th>
                                <th>PHONE</th>
                                <th width="180px">Address</th>
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
                                        <td><?php echo htmlspecialchars($data['name'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['email'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['phone'] ?? ''); ?></td>
                                        <td><?php echo htmlspecialchars($data['address'] ?? ''); ?></td>
                                        <td><a href="update.php?id=<?php echo urlencode($data['id']); ?>&nn=<?php echo urlencode($data['name'] ?? ''); ?>&em=<?php echo urlencode($data['email'] ?? ''); ?>&ph=<?php echo urlencode($data['phone'] ?? ''); ?>&ad=<?php echo urlencode($data['address'] ?? ''); ?>" onclick="return checkupdate()" class="btn btn-success">Update</a></td>

                                        <td><a href="delete.php?id=$result[id]" onclick="return
                                        checkdelete()" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php
                                    $id++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="9">
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