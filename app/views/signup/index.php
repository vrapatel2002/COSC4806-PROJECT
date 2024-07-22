<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Movie Website</title>
    <style>
        body {
            background: url('https://images5.alphacoders.com/105/1052906.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .sign-up-container {
            max-width: 400px;
            margin: 5% auto;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
        }
        .page-header {
            margin-bottom: 2rem;
        }
        .page-header h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <?php require_once 'app/views/templates/header.php'; ?>

    <main role="main" class="container sign-up-container">
        <div class="page-header text-center mb-4">
            <h1 class="display-4">Sign Up</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/signup/newUser" method="post">
                            <fieldset>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input required type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input required type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'app/views/templates/footer.php'; ?>
</body>
</html>
