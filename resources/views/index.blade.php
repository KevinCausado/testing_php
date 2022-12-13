<!doctype html>
<html lang="en">

<head>
    <title>Table 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Table #05</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-responsive-xl">
                            <thead>
                                <tr>
                                    <th>Número Identificacíon</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Fecha de Creación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($api as $user)
                                    <tr class="alert" role="alert">
                                        <td class="d-flex align-items-center">
                                            <div class="img" style="background-image: url(images/person_1.jpg);">
                                            </div>
                                            <div class="pl-3 email">
                                                <span>{{ $user['identification_number'] }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $user['birth_date'] }}</td>
                                        <td>{{ $user['created_at'] }}</td>
                                        <td>
                                            <button type="button" class="text-center" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>
