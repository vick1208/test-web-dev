<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integrasi Rajaongkir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fs-5 py-4 text-center">
                        Integrasi Rajaongkir
                    </h2>
                    <div class="card border rounded">
                        <div class="card-body">
                            @csrf
                            <form id="form">
                                <div class="row mb-3">
                                    <strong>Origin</strong>
                                    <div class="col-md-6">
                                        <label for="origin_province" class="form-label">Province</label>
                                        <select name="origin_province" id="origin_province" class="form-select">
                                            <option>Choose Province</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="origin_city" class="form-label">City</label>
                                        <select name="origin_city" id="origin_city" class="form-select">
                                            <option>Choose City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <strong>Destination</strong>
                                    <div class="col-md-6">
                                        <label for="destination_province" class="form-label">Province</label>
                                        <select name="destination_province" id="destination_province"
                                            class="form-select">
                                            <option>Choose Province</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="destination_city" class="form-label">City</label>
                                        <select name="destination_city" id="destination_city" class="form-select">
                                            <option>Choose City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="courier" class="form-label">Courier</label>
                                        <select name="courier" id="courier" class="form-select">
                                            <option>Choose Courier</option>
                                            <option value="jne">JNE</option>
                                            <option value="pos">POS</option>
                                            <option value="tiki">TIKI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="weight" class="form-label">Weight (Gram)</label>
                                        <input type="number" name="weight" id="weight" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" id="checkBtn">Check</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="result" class="mt-3 d-none"></div>
                </div>
            </div>
        </div>
    </main>
    @vite(['resources/js/app.js'])
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/query.js') }}"></script>
  </body>
</html>
