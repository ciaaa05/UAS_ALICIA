<nav class="navbar" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand">SKY</a>

        <a class="nav-link active mx-3" aria-current="page" href="/home">Home</a>
        <a class="nav-link" href="/transaction">Transaction</a>

        <div>
            Saldo: @yield('balance')

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                TopUp
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <form action="/top-up" method="POST">
                    @method('put')
                    @csrf
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Top Up Balance</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Your Current Balance: {{ $auth->balance }}
                            </div>
                            <div class="d-flex mx-3">
                                Input top up:
                                <input type="number" name="balance" id="balance">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Confirm TopUp</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
    </div>
</nav>
