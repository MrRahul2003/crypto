<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crypto Parser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <style>
    body {
        margin-top: 20px;
        background-color: #eee;
    }

    .project-list-table {
        border-collapse: separate;
        border-spacing: 0 12px
    }

    .project-list-table tr {
        background-color: #fff
    }




    .avatar-sm {
        height: 2rem;
        width: 2rem;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .me-2 {
        margin-right: 0.5rem !important;
    }

    img,
    svg {
        vertical-align: middle;
    }

    a {
        color: #3b76e1;
        text-decoration: none;
    }

    .badge-soft-danger {
        color: #f56e6e !important;
        background-color: rgba(245, 110, 110, .1);
    }

    .badge-soft-success {
        color: #63ad6f !important;
        background-color: rgba(99, 173, 111, .1);
    }

    .badge-soft-primary {
        color: #3b76e1 !important;
        background-color: rgba(59, 118, 225, .1);
    }

    .badge-soft-info {
        color: #57c9eb !important;
        background-color: rgba(87, 201, 235, .1);
    }

    .avatar-title {
        align-items: center;
        background-color: #3b76e1;
        color: #fff;
        display: flex;
        font-weight: 500;
        height: 100%;
        justify-content: center;
        width: 100%;
    }
    </style>
</head>

<body>

    <?php
        $response = file_get_contents("https://api.coinstats.app/public/v1/coins?skip=0&limit=100&currency=INR");
        $NewsData = json_decode($response,true);
        // print_r($NewsData);
    ?>






    <div class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Crypto currency</h6>


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(100)</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table project-list-table table-nowrap align-middle table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col"></th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">PriceBtc</th>
                                            <th scope="col">websiteUrl</th>
                                            <th scope="col">twitterUrl</th>
                                            <th scope="col" style="width: 200px;">Price Change/per hour</th>
                                            <th scope="col" style="width: 200px;">Price Change/per day</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                        $i = 0;
                        foreach ($NewsData['coins'] as $currency) 
                        {
                    ?>

                                        <tr>
                                            <td><?=$currency['rank'] ?></td>
                                            <td><img src="<?=$currency['icon'] ?>" alt=""
                                                    class="avatar-sm rounded-circle me-2" /></td>
                                            <td><?=$currency['name'] ?> / <?=$currency['symbol'] ?></a></td>
                                            <td><span class="badge badge-soft-success mb-0"><?=$currency['price'] ?></span></td>
                                            <td><span class="badge badge-soft-success mb-0"><?=$currency['priceBtc'] ?></span></td>
                                            <td><a href="<?=$currency['websiteUrl'] ?>"><?=$currency['websiteUrl'] ?></a></td>
                                            <td><a href="<?=$currency['twitterUrl'] ?>"><?=$currency['twitterUrl'] ?></a></td>
                                            <td><?=$currency['priceChange1h'] ?></td>
                                            <td><?=$currency['priceChange1d'] ?></td>
                                        </tr>
                                        <?php 
                        $i++;
                        if ($i == 0) {
                            break;
                        }
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

</html>