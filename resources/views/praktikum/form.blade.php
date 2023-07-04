<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <div class="container d-flex justify-content-cente">
        <form class="col-8">
            <div class="form-group row mt-4">
                <label for="text" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="text" name="text" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
                <div class="col-8">
                    <input id="text1" name="text1" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Tanggal Lahir/Usia</label>
                <div class="col-8">
                    <input id="text1" name="text1" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input"
                            value="laki-laki">
                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input"
                            value="perempuan">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <table class="table su">
        <thead>
            <tr>
                <th scope="col">Jenis Tes</th>
                <th scope="col">Hasil Pemeriksaan</th>
                <th scope="col">Normal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Tekanan Darah</th>
                <td></td>
                <td>120/80 mmhg</td>
                
            </tr>
            <tr>
                <th scope="row">Asam urat</th>
                <td></td>
                <td>Pria : < 7 mg/dl | Wanita : < 6 mg/dl </td>
                
            </tr>
            <tr>
                <th scope="row">Kolestrol total</th>
                <td ></td>
                <td >< 200 mg/dl</td>
                
            </tr>
            <tr>
                <th rowspan="3">Gula Darah</th>
                <td ></td>
                <td >Puasa: 70-110 mg/dl</td>
                
            </tr>
            <tr>
                
                <td ></td>
                <td >2 Jam setelah makan: 100-150 mg/dl</td>
                
            </tr>
            <tr>
                
                <td ></td>
                <td >Sewaktu/acak : 70-125 mg/dl</td>
                
            </tr>
           
        </tbody>
    </table>

    @include('partial.script');
</body>

</html>
