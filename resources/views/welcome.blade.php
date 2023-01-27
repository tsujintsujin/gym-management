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
        <h1 class="mb-5 text-center">🏋 Gym 🏋</h1>
        <hr>

        <a class="btn btn-primary" data-mdb-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample">
            Registration Form
        </a>

        <!-- Collapsed content -->
        <div class="collapse mt-3" id="collapseExample">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                        aria-controls="ex1-tabs-1" aria-selected="true">Member</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                        aria-controls="ex1-tabs-2" aria-selected="false">Trainer</a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">
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
                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                    <form method="POST" action="{{ route('createtrainer') }}" class="form-control border-0 mt-3 px-0">
                        @csrf
                        <div class="row d-flex gx-0 text-center">

                            <div class="col m-1">
                                <input class="form-control" type="text" placeholder="Name" name="name" required>
                            </div>

                            <div class="col m-1">
                                <input class="form-control" type="text" placeholder="Email" name="email" required>
                            </div>
                            <div class="col m-1">
                                <input class="form-control" type="text" placeholder="Specialization"
                                    name="specialization" required>
                            </div>
                            <div class="col m-1">
                                <input class="form-control" type="text" placeholder="Phone" name="phone" required>
                            </div>
                            <div class="col-1 m-1">
                                <button class="form-control btn btn btn-secondary" type="submit" required>✔</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Tabs content -->
        </div>














        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3 mt-5" id="ex2" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab">Member
                    List</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab">Trainer
                    List</a>
            </li>
        </ul>
        <!-- Tabs navs -->
        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
            <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel">
                <div class="mt-3">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Expiration</th>
                            <th>Trainer</th>
                            <th>Actions</th>
                        </thead>
                        @if ($members->count() > 0)
                        @foreach ($members as $member)
                        <tbody>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <th>{{ $member->membership_expiration }}</th>
                            <th>{{ $member->trainer_id}}</th>

                            <td> <a href="" class="btn-tertiary fs-5 p-0 m-0">🖊</a>
                                {{-- <a href="" class="btn btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">🖊</a> --}}
                                <a href="{{ route('delete', $member->id) }}"
                                    class="btn-tertiary fs-5 p-0 m-0 ms-5">❌</a>
                            </td>
                        </tbody>
                        @endforeach
                        @else
                        <tbody>
                            <td>-</td>
                            <td>-</td>
                            <th>-</th>
                            <th>-</th>
                            <td>-</a>
                            </td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel">
                <div class="mt-3">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Specialization</th>
                            <th>Phone</th>
                            <th>Actions</th>

                        </thead>
                        @if ($trainers->count() > 0)
                        @foreach ($trainers as $trainer)
                        <tbody>
                            <td>{{ $trainer->name }}</td>
                            <td>{{ $trainer->email }}</td>
                            <th>{{ $trainer->specialization }}</th>
                            <th>{{ $trainer->phone }}</th>
                            <td> <a href="" class="btn-tertiary fs-5 p-0 m-0">🖊</a>
                                {{-- <a href="" class="btn btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">🖊</a> --}}
                                <a href="{{ route('delete', $trainer->id) }}"
                                    class="btn-tertiary fs-5 p-0 m-0 ms-5">❌</a>
                            </td>
                        </tbody>
                        @endforeach
                        @else
                        <tbody>
                            <td>-</td>
                            <td>-</td>
                            <th>-</th>
                            <th>-</th>
                            <td>-</a>
                            </td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>

        </div>
        <!-- Tabs content -->
    </div>







    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>