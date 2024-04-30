@extends('layouts/app')
@section('konten')


                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">Nomor</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">kelas</th>

                               <th scope="col" class="text-center">Aksi</th>


                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($siswa as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index +1 }}</td>
                                    <td class="text-center">{{ $item->nama }}</td>
                                    <td class="text-center">{!! $item->kelas !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                                            <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i> EDIT</a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Siswa belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                          {{ $siswa->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>


</html>
@endsection
