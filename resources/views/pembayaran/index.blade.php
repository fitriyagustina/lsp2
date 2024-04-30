@extends('layouts/app')
@section('konten')


                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">Nomor</th>
                                <th scope="col" class="text-center">Nama Siswa</th>
                                <th scope="col" class="text-center">Total  Pembayaran</th>
                                <th scope="col" class="text-center">Tanggal Bayar Akhir</th>
                                <th scope="col" class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
    @forelse ($pembayaran as $key => $pembayaran)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td class="text-center">{{ $pembayaran->siswa->nama  }}</td>
            <td class="text-center">
                <a href="{{ route('pembayaran.history', $pembayaran->siswa_id) }}" class="btn btn-sm btn-link mx-2">
                Rp. {{ number_format($pembayaran->total_bayar,0,',',',',) }}</td>
            <td class="text-center"="width: 150px;">{{ \Carbon\Carbon::parse($pembayaran->tgl_bayar_last)->formatLocalized('%d %B %Y') }}</td>
            <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST">



                        <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i> EDIT</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </form>
            </td>
        </tr>
    @empty

<div class="alert alert-danger">
    Data Pembayaran belum Tersedia.
</div>


    @endforelse
</tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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

    @endsection
