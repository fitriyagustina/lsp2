@extends('layouts/app')
@section('konten')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



                         <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">


                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ $siswa->nama }}"placeholder="Masukkan Nama Anda">

                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>
                                <div class="mb-3">
                                    <select name="kelas" class="form-control" id="exampleDropdown">
                                        <option value=""></option>
                                        <option value="XII-REKAYASA PERANGKAT LUNAK" {{ old('kelas', $siswa->kelas) == 'XII-REKAYASA PERANGKAT LUNAK' ? 'selected' : '' }}>XII-REKAYASA PERANGKAT LUNAK</option>
                                        <option value="XII-LISTRIK" {{ old('kelas', $siswa->kelas) == 'XII-LISTRIK' ? 'selected' : '' }}>XII-LISTRIK</option>
                                        <option value="XII-MULTIMEDIA" {{ old('kelas',$siswa->kelas) == 'XII-MULTIMEDIA' ? 'selected' : '' }}>XII-MULTIMEDIA</option>
                                        <option value="XII-TEKNIK KOMPUTER JARINGAN" {{ old('kelas', $siswa->kelas) == 'XII-TEKNIK KOMPUTER JARINGAN' ? 'selected' : '' }}>XII-TEKNIK KOMPUTER JARINGAN</option>
                                        <option value="XII-MEKATRONIKA" {{ old('kelas', $siswa->kelas) == 'XII-MEKATRONIKA' ? 'selected' : '' }}>XII-MEKATRONIKA</option>
                                        <option value="XII-TATA BUSANA" {{ old('kelas', $siswa->kelas) == 'XII-TATA BUSANA' ? 'selected' : '' }}>XII-TATA BUSANA</option>
                                        <option value="XII-ELEKTRONIKA" {{ old('kelas', $siswa->kelas) == 'XII-ELEKTRONIKA' ? 'selected' : '' }}>XII-ELEKTRONIKA</option>
                                        <option value="XII-OTOTRONIKA" {{ old('kelas', $siswa->kelas) == 'XII-OTOTRONIKA' ? 'selected' : '' }}>XII-OTOTRONIKA</option>
                                    </select>
                                </div>
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>


</body>
@endsection
