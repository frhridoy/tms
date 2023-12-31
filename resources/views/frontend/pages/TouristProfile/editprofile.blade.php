@extends('frontend.master')
@section('content')
    <br>
    <form action="{{ route('touristprofile.update', $touristprofileval->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <style>
                body {
                    background-color: #f8f9fa;
                }

                .login-panel {
                    max-width: 400px;
                    margin: auto;
                    margin-top: 100px;
                    background-color: #ffffff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .login-panel h2 {
                    text-align: center;
                    color: #343a40;
                }

                .login-panel form {
                    margin-top: 20px;
                }

                .login-panel .form-group {
                    margin-bottom: 20px;
                }

                .login-panel label {
                    color: #495057;
                }

                .login-panel input[type="text"],
                .login-panel input[type="password"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ced4da;
                    border-radius: 4px;
                    box-sizing: border-box;
                }

                .login-panel button {
                    background-color: #007bff;
                    color: #fff;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .login-panel button:hover {
                    background-color: #0056b3;
                }
            </style>
        </head>

        <body>

            <div class="container">
                <div class="login-panel">
                    <h2> Update Your Profile </h2>

                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="name" required value="{{ $touristprofileval->name }}" class="form-control"
                            id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" required value="{{ $touristprofileval->email }}" class="form-control"
                            id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" required class="form-control" id="password" name="password"
                            placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No:</label>
                        <input type="tel" value="{{ $touristprofileval->contact }}" class="form-control" id="contact"
                            name="contact" placeholder="Enter contact number">
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Enter image">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update Your Info</button>
    </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>
    </form>
    <br>
@endsection
