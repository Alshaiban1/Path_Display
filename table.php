<?php
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
        </script>
    <title>Path Table</title>
</head>

<body>
    <div style="position: relative; left: 5px; top: 5px; text-align:center;">
        <div class="container-fluid px-4">
            <div class="col-md-4">
                <div class="col-md-6">
                    <div>
                        <div>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>Distance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = new Data;
                                        $result = $data->showDirections();
                                        if ($result) {
                                            foreach ($result as $row) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $row['direction'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['distance'] ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "no record found";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>