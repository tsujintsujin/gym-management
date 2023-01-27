<!DOCTYPE html>
<html lang="en">

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
        <h1 class="mb-5 text-center">🏋 Gym 🏋</h1>
        <hr>
 
        <h4>Update Form</h4>

        <!-- Tabs content -->
        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
            <form method="POST" action="{{ route('createmember') }}" class="form-control border-0 mt-3 px-0">
                @csrf
                <div class="row d-flex gx-0">

                    <div class="col m-1">
                        <input class="form-control" type="text" placeholder="Name" name="name" required>
                    </div>

                    <div class="col m-1">
                        <input class="form-control" type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="row p-0 mt-3">
                        <div class="col-2">
                            <label for="trainer_id">Trainer</label>
                            <select id="trainer_id" name="trainer_id" class="col-4 m-1 form-select">
                                <ul class="dropdown-menu">
                                    @if ($trainers->count() > 0)
                                    @foreach ($trainers as $trainer)
                                    <option value="{{ $trainer->id }}"">{{ $trainer->name }}</option>
                                        @endforeach
                                    @else
                                        <option selected>No Trainers</option>
                                    @endif
                                </ul>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for=" membership_id">Membership</label>
                                        <select id="membership_id" name="membership_id"
                                            class="col-4 m-1 form-select">
                                            <ul class="dropdown-menu">
                                                @if ($memberships->count() > 0)
                                                @foreach ($memberships as $membership)
                                                <option value="{{ $membership->id }}"">
                                                {{ $membership->membership_type }}</option>
                                        @endforeach
                                    @else
                                        <option selected>No Memberships</option>
                                    @endif
                                </ul>
                            </select>
                        </div>
                    </div>
                    <div class=" col-1 m-1 mt-4">
                                                    <button class="form-control btn btn btn-secondary"
                                                        type="submit" required>✔</button>
                        </div>
                    </div>
            </form>
    </div>








    </div>






    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>