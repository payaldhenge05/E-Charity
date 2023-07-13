<?php
include("donar_dev.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        h1 {
            text-align: center;
            margin-right: 200px;
            margin-top: 70px;
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
    <h1>DONAR DETAILS</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-11">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>PHONE</th>
                                <th>Address</th>
                                <th>City</th>
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
                                        <td><?php echo htmlspecialchars($data['city'] ?? ''); ?></td>
                                        <td><a href="donar_updt.php?id=<?php echo urlencode($data['id']); ?>&nn=<?php echo urlencode($data['name'] ?? '');
                                                                                                                ?>&em=<?php echo urlencode($data['email'] ?? ''); ?>&ph=<?php echo urlencode($data['phone'] ?? '');
                                                                                                                                                                        ?>&ad=<?php echo urlencode($data['address'] ?? ''); ?> &ct=<?php echo urlencode($data['city'] ?? ''); ?>" onclick="return checkupdate()" class="btn btn-success">Update</a></td>

                                        <td><a href="donar_delete.php?id=$result[id]" onclick="return
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