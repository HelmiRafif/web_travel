<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Checkout</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.6/examples/checkout/"
    />

    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

    <style>
      
      body {
        /* Fungsi buat mengatur background */
        background-image: url(images/bg.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
       
       }

 
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container" style="width:100%; height:100%;">
      <div class="py-5 text-center">
        <img
          class="d-block mx-auto mb-4"
          src="img/p.png"
          alt=""
          width="72"
          height="72"
        />
        <h2>Checkout form</h2>
        <p class="lead">
       
        <h5 >Silahkan isi data diri secara benar, sebelum melakukan checkout dimohon mengecek kembali.</h5>
        
        </p>
      </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal data</h4>
          <form id="formulir-" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Full name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required />
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required />
                <div class="invalid-feedback">Valid last name is required.</div>
              </div>
            </div>
        
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" />
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
        
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required />
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
        
            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" />
            </div>
        
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="negara">State</label>
                <select class="custom-select d-block w-100" id="negara" required>
                  <option value=""></option>
                  <option>Indonesia</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid negara.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="bagasi">Bagasi</label>
                <select class="custom-select d-block w-100" id="bagasi" required>
                  <option value="">(0-15kg)</option>
                  <option>0 kg</option>
                  <option>1 kg</option>
                  <option>2 kg</option>
                  <option>3 kg</option>
                  <option>4 kg</option>
                  <option>5 kg</option>
                  <option>6 kg</option>
                  <option>7 kg</option>
                  <option>8 kg</option>
                  <option>9 kg</option>
                  <option>10 kg</option>
                  <option>11 kg</option>
                  <option>12 kg</option>
                  <option>13 kg</option>
                  <option>14 kg</option>
                  <option>15 kg</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid bagasi.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age" placeholder="" required />
                <div class="invalid-feedback">Age code required.</div>
              </div>
            </div>

            <div class="col-50 " style="padding-top: 30px;">
              <h3>Payment</h3>
              <label for="fname">Silahkan Transfer ke salah satu No.rekening dibawah ini dengan nominal tiket pesawat yang telah anda pesan & kemudian silahkan upload bukti Trasnfer di bawah ini, TERIMAKASIH!</label>
              <div class="card">
              <div class="container card-body">
                  <h6>BRI (1111-2222-3333-444) (Arini)</h6>
                  <h6>BCA (111-222-333-4) (Arini)</h6>
                  <h6>BNI (000-111-222-3) (Arini)</h6>
              </div>
              </div>

              <br>

              <div class="col-50 " style="padding-top: 30px;">
                <h3>Daftar Harga Tiket Pesawat</h3>
                <br>
              <div class="card">
                <div class="container card-body">
                    <h6>Sriwijaya (Rp.500.000)</h6>
                    <h6>Lion Air (Rp.700.000)</h6>
                    <h6>Garuda (Rp.905.000)</h6>
                    <h6>Citlinlk (Rp. 800.000)</h6>
                    <h6>Batik Air (Rp.575.000)</h6>
                </div>
                </div>

                <br>
                <br>

            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label id="choose-file-image" class="custom-file-label" for="inputGroupFile02"
                  aria-describedby="inputGroupFileAddon02">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
              </div>
            </div>
        </div>
            <p>
              <h4><input type="checkbox" name="1 orang" value="1 orang" /> 1 orang</h4>
          </p>

            <hr class="mb-4" />
          <a href="#" onclick="simpanData()" class="btn btn-primary btn-lg btn-block" type="submit" >Continue</a>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 EXSPLORSAVANA</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var firstNameElement = document.getElementById("firstName");
        var lastNameElement = document.getElementById("lastName");
        var addressElement = document.getElementById("address");
        var emailElement = document.getElementById("email");
        var bagasiElement = document.getElementById("bagasi");
        var ageElement = document.getElementById("age");
        var fileElement = document.getElementById("inputGroupFile02");

        fileElement.addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById("choose-file-image").innerText = fileName;
        });

  async function simpanData() {
    console.log(lastNameElement.value)
    console.log('panggil')

    window.localStorage.setItem('dataCheckout', JSON.stringify({
      firstName: firstNameElement.value,
      lastName: lastNameElement.value,
      address: addressElement.value,
      email: emailElement.value,
      bagasi: bagasiElement.value,
      age: ageElement.value,
    }
    ));

    const dataBooking = JSON.parse(window.localStorage.getItem('dataBooking'));
    const passanger = 0;

    const formDataa = new FormData();

    formDataa.append('fullName', `${firstNameElement.value} ${lastNameElement.value}`);
    formDataa.append('addressLocation', addressElement.value );
    formDataa.append('email', emailElement.value );
    formDataa.append('bagasi', bagasiElement.value );
    formDataa.append('age', ageElement.value );


    await fetch('admin/proses_booking.php', {
      method: 'POST',
      body: formDataa
    })

    window.location = "indexbukti.html"
    window.location = "indexcheckout.html"
  }
    </script>
  </body>
</html>
