@extends('layout.admin')

@section('content')
<form action="{{ route('admin.add') }}" method="POST" class="mx-auto col-md-6 g-3 needs-validation" novalidate>
    <h1 class="border-bottom py-2" >Add Offer</h1>
    <div class="col">
      <label for="Title" class="form-label">Title</label>
      <input type="text" class="form-control" id="Title" name="title" placeholder="New Year Offer" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col">
        <label for="file" class="form-label">Photo</label>
        <input type="file" class="form-control" id="file" name="photo_url" placeholder="New Year Offer" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>
    <div class="col-12 mt-3">
      <button class="btn btn-primary" type="submit">Add Offer</button>
    </div>
  </form>

  <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
  </script>
@endsection