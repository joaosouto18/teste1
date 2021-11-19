<!DOCTYPE html>
<html lang="en">
<head>
  <title>API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table table-dark">
    <thead>
     

              <?php

            $url = "https://swapi.dev/api/";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            curl_close($curl);

            $manage = json_decode($resp);

            //var_dump($manage);

            ?>

                <tr>
                    <th>API</th>
                    <th>LINK</th>
                </tr>

            <?php
            foreach ($manage as $key => $value) {
            ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <th>
                        <a href="<?php echo url($value) ?>" target="_blank"><?php echo $value ?></a>
                    </th>
                </tr>
        <?php
            }
        ?>
          
    </thead>
  </table>
</div>

</body>
</html>
