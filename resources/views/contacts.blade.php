@extends('layouts.main')

@section('container')
<form>
  <div class="mb-3">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama">
        <label for="inputname">Nama</label>
    </div>
  </div>
  <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email">
        <label for="inputemail">Email</label>
  </div>
  <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Tinggal Pesan Anda Disini" id="FloatingTextarea2" style="height= 100px"></textarea>
        <label for="floatingTextarea2">Pesan</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection