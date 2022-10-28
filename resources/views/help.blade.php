@extends('layout.layout')
@section('content')
    <div class="container" id="help-card">
        <div class="card" id="card">
            <div class="card-header">
                Help Desk for Developers
            </div>
            <div class="card-body">
                <h5>Prequisties</h5>
                <ul>
                    <li>
                        <p>Github Desktop</p>
                    </li>
                    <li>
                        <p>VSCode</p>
                    </li>
                </ul>
                <h5 class="card-title">Dont Forget these when you start developing</h5>
                <ul>
                    <li>
                        <p>Type this command in your terminal <code>php artisan serve</code></p>
                    </li>
                    <li>
                        <p class="card-text">Don't forget to execute the sass, go to the public folder, and
                            type :
                            <code>sass --watch scss:css</code>
                        </p>
                    </li>
                    <li>
                        <p class="card-text">These are the steps if you want to push your code to the repository :</p>
                        <ul>
                            <li>
                                <p>Open your Github Desktop, and click fetch origin, this step is to update your local
                                    repository to the newest commit.</p>
                            </li>
                            <li>
                                <p>Make sure to <b style="color: red">contact</b> the coordinator to notify, there will be a
                                    commit from you.
                                </p>
                            </li>
                            <li>
                                <p><code>git add .</code></p>
                            </li>
                            <li>
                                <p><code>git commit -m "(your change or update)"</code></p>
                            </li>
                            <li>
                                <p><code>git push</code></p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="#" class="btn btn-success">Contact the Coordinator!</a>
            </div>
        </div>
    </div>
@endsection
