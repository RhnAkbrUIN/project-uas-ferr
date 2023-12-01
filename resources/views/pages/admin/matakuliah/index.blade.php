@extends('layouts.dashboard-admin')

@section('content')
	<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1>Dashboard Admin - Mata Kuliah</h1>
		</div>
	</div>

    <div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Recent Orders</h3>
				<i class='bx bx-search' ></i>
				<i class='bx bx-filter' ></i>
			</div>
			<table>
				<thead>
					<tr>
						<th>Mata Kuliah</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
                    @forelse($matkul as $m)
                        <tr>
                            <td>
                                <p>{{ $m->matkul }}</p>
                            </td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                    @empty
                        <tr>
                            <td rowspan="2" class="text-center">
                                Empty
                            </td>
                        </tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</main>
<!-- MAIN -->
@endsection