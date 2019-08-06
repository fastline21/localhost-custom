<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/png" href="./localhost-custom/assets/favicon.ico" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
        <link rel="stylesheet" href="./localhost-custom/style.css" />
        <title>Xampp - Localhost</title>
    </head>
    <body>
        <?php
        $dir = './';
        $allFiles = scandir($dir);
        $removeFiles = array_diff($allFiles, array('.', '..', 'index.php', 'localhost-custom'));
        $cloneFiles = array();
        foreach ($removeFiles as $val) {
            array_push($cloneFiles, $val);
        }
        $countFiles = count($cloneFiles);
        $perRow = 5;
        $resultRow =  $countFiles / $perRow;
        if (gettype($resultRow) == 'double') {
            $GLOBALS['numberOfRows'] = (int)$resultRow;
            $numberOfRows++;
        } else {
            $GLOBALS['numberOfRows'] = $resultRow;
        }
        ?>
        <div class="item-table">
            <div class="container">
                <h1 class="text-center title">Xampp - Localhost</h1>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <?php
                            $currentFile = 0;
                            for ($row = $numberOfRows; $row > 0; $row--) {
                                echo "<tr>";
                                for ($column = 0; $column < $perRow; $column++) {
                                    if ($currentFile >= $countFiles) {
                                        exit();
                                    } else {
                                        if (is_dir($cloneFiles[$currentFile])) {
                                            echo "<td class='item'><a class='item-link' href='./" . $cloneFiles[$currentFile] . "'><i style='margin-right: 10px;' class='far fa-folder'></i>" . $cloneFiles[$currentFile] . "</a></td>";
                                        } else {
                                            echo "<td class='item'><a class='item-link' href='./" . $cloneFiles[$currentFile] . "'><i style='margin-right: 10px;' class='far fa-file'></i>" . $cloneFiles[$currentFile] . "</a></td>";
                                        }
                                    }
                                    $currentFile++;
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>