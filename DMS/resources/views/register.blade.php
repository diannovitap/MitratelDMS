<html>
        <head>
            <title>

            </title> 
            <style>
                .btn-primary {
                    color: #8E6A4A; 
                }
            </style>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">     
            <script src="https://kit.fontawesome.com/b198f4fad2.js" crossorigin="anonymous"></script>        
        </head>
        <button type="button" class="btn btn-lg" style="margin-top:35px; margin-left:15px;"><i class="fa-solid fa-chevron-left fa-2xl" style="color:white;"></i></button>
    <body id="example2" style="background-color:#ffffffde;; background-repeat: no-repeat; background-size: 100% 100%;">
        <section class="main-section">
            <!-- Add Your Content Inside -->
            <div class="container col-6">
            <div class="content">
                <!-- Remove This Before You Start -->
                <h1>MITRATEL -  Register</h1>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/registerPost') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Password Confirmation:</label>
                        <input type="password" class="form-control" id="confirmation" name="confirmation">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Name:</label>
                        <input type="text"  class="form-control" id="name" name="name">
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
            </div>
            <!-- /.content -->
        </section>
    </body>
</html>