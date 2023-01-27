<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body class="container">

    <div class="row shadow m-5 p-5 ">
        <h1 class="mb-5">🏋 Gym Membership Registration</h1>
        <hr>
        <button class="btn btn-primary col-3 ms-1" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#collapseRegistration">
            Register Member
        </button>
       

        <form method="POST" action="{{route('create')}}" class="form-control border-0 mt-3 collapse px-0" id="collapseRegistration">
            @csrf
            <div class="row d-flex gx-0 text-center">

                <div class="col m-1">
                    <input class="form-control" type="text" placeholder="Name" name="name" required>
                </div>

                <div class="col  m-1">
                    <input class="form-control" type="text" placeholder="Email" name="email" required>
                </div>

                <div class="col-1 m-1">
                    <button class="form-control btn btn btn-secondary" type="submit" required>✔</button>
                </div>
            </div>
        </form>

        <div>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Expiration</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <td>Name</td>
                    <td>Email</td>
                    <th>Expiration</th>
                    <td> <a href="" class="btn-tertiary fs-5 p-0 m-0">🖊</a>
                        {{-- <a href="" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">🖊</a> --}}
                        <a href="" class="btn-tertiary fs-5 p-0 m-0 ms-5">❌</a></td>
                </tbody>
        </div>

    </div>







    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>