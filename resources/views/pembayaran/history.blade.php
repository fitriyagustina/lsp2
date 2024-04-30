@extends('layouts/app')
@section('konten')

<table class="table table-bordered" style="width: 50%;">
    <tbody>
        <tr>
            <th style="width: 50%;">Total yang harus di bayar</th>
            <td style="width: 50%;">Rp. 480,000</td>
        </tr>
        <tr>
            <th style="width: 50%;">Total sudah di bayar</th>
            <td style="width: 50%;">Rp. {{ number_format($total_bayar,0,',',',',) }}</td>
        </tr>
        <tr>
            <th style="width: 50%;">Sisa Pembayaran</th>
            <td style="width: 50%;">Rp. {{ number_format($sisa_bayar,0,',',',',) }}</td>
        </tr>
    </tbody>
</table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Tanggal Bayar</th>
                                    <th scope="col">Jumlah Bayar</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pembayaran as $key => $pembayaran)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pembayaran->siswa->nama }}</td>
                                    <td style="width: 150px;">{{ \Carbon\Carbon::parse($pembayaran->tgl_pembayaran)->formatLocalized('%d %B %Y') }}</td>
                                    <td style="width: 150px;">Rp. {{ number_format($pembayaran->jumlah_bayar,0,',',',',) }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST">
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>

                                            @csrf
                                            @method('DELETE')

                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data Pembayaran belum Tersedia.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
