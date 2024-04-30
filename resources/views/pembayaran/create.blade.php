@extends('layouts/app')
@section('konten')


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




                        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold form-label">SISWA</label>
                                <select class="from-select col-md-12" name="siswa_id" id="siswa_id">
                                    <option class="col-md-12" value ="">Select Nama Siswa</option>
                                    @foreach ($data as $siswa)
                                        <option class="col-md-12" value="{{ $siswa->id }}">{{ $siswa->nama }}
                                            {{ $siswa->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="tgl_bayar" placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUMLAH BAYAR</label>
                                <input type="int" class="form-control" name="jumlah_bayar" placeholder="">

                            </div>



                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>


</html>
@endsection
