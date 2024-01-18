<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<title>Calculator</title>

<body>

    <div class="container mt-3">

        <div class="mt-4 p-3 bg-primary text-white rounded w-50 offset-3">
            <h1 style="text-align: center;">Calculator</h1>
        </div>
    </div>
    <br>
@error('firstNumber')
<div  class="alert alert-danger text-center container w-25 ">{{$message}}</div>
@enderror

@error('secondNumber')
<div  class="alert alert-danger text-center container-sm w-25">{{$message}}</div>
@enderror


    @if (session()->has('calc'))
<br>
    <div class="alert alert-success text-center container-sm w-25">{{session('calc')}}</div>

    @endif

    <br>
    <form action="/calculator" method="post">
        @csrf

        <div class="container">
            <div class="row border border-danger border-2 w-50 offset-3">
                <div class="col-3 offset-1">
                    <br>
                    <input type="number" class="form-control" name="firstNumber" value="{{old('firstNumber')}}">

                </div>
                <div class="col-3 ">
                    <br>
                    <select class="form-select" name="operator">
                        <option class="fw-bold" value="add">+</option>
                        <option class="fw-bold" value="substract">-</option>
                        <option class="fw-bold" selected  value="multiply">*</option>
                        <option class="fw-bold" value="divide">/</option>
                    </select>
                </div>
                <div class="col-3 ">
                    <br>
                    <input type="number" class="form-control" name="secondNumber" value="{{old('secondNumber')}}">
                    <br>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-6 offset-5">
            <button type="submit" class="btn btn-info ">Izračunaj</button>
<br><br>
                        </div>
                    </div>
                   </div>

            </div>

        </div>

    </form>

    <br><br>


</body>

</html>
