@extends('layout')  
@section('title') Daftar @endsection  
@section('content')     



  <div class="container">

  <div class="row" >

    <form action="{{URL::to('daftar/daftar_post')}}" class="form-inline lead-big"  role="form" method="post">
      <label for="name">Form Pendaftaran</label> <br>
            <div class="form-group">
              <label for="name">Hello, saya </label>
              <input type="text" name="nama" placeholder="<<nama>>" required> ,nim <input type="text" name="nim" placeholder="<<nim>>" required>
            </div>
            <div class="form-group">
              <label for="company"> Saya dari kelas</label>
              <input type="text" name="kelas" placeholder="<<kelas>>">, angkatan <input type="text" name="angkatan" placeholder="<<angkatan>>">
            </div>
            <div class="form-group">
              <label for="company"> Untuk menghubungi saya bisa lewat</label>
              <input type="text" name="hp" placeholder="<<no hp>>">, email <input type="text" name="email" placeholder="<<email>>">
            </div>
            <div class="form-group">
              <label for="freelancer"> Saya ingin ikut belajar : </label> <input type="checkbox" name="matkul" value="Matematika Diskrit I">Matematika Diskrit I     &nbsp; 
              <input type="checkbox" name="matkul" value="Matematika Dasar">Matematika Dasar <input type="checkbox" name="matkul" value="Algoritma Pemrograman">Algoritma Pemrograman
              karena
            </div>
            <div class="form-group">
              <label for="subject"> </label>
              <textarea name="alasan" placeholder="<<alasan>>" required></textarea>
              
            </div>
            
            <button type="submit" class="btn btn-default btn-lg submit"> Submit </button>
            .
        </form>
  </div>
  </div>
</section>
@endsection  
