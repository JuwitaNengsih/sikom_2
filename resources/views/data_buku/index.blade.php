@extends('_template_back.layout')

@section('content')
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Data</a>
								</div>
								@include('_component.pesan')
							</div>
							<div class="card-body mt-3">
								<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>No</th>
												<th>Judul</th>
												<th>Penulis</th>
												<th>Penerbit</th>
												<th>Tahun terbit</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                                                                        @foreach ($buku as $dt)
											<tr>
												<th scope="row">{{ $loop->iteration }}1</th>
												<td>{{ $dt->judul  }}</td>
												<td>{{ $dt->penulis }}</td>
												<td>{{ $dt->penerbit }}</td>
												<td>{{ $dt->tahun_terbit }}</td>
												<td>
													<a href="{{ route('buku.edit',$dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
													<form onsubmit="return confirm('apakah anda yakin hapus data ini?')"action="{{ route('buku.destroy',$dt->id) }}" method="post" class="d-inline">
														@csrf @method('DELETE')
													<button type="submit" class="btn btn-sm btn-danger">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
				<!--/div-->

@endsection