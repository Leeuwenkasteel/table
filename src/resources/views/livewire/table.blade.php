@push('style')
	<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="{{asset('css/table.css')}}" rel="stylesheet">
@endpush
<div>
@if($actions == true)
	@can($pagename.'.index')
	<div class="bg-white w-100 p-3">
		<a href="{{route($pagename.'.create')}}" class="text-decoration-none">
			<button class="btn btn-success text-white fw-bolder" class="text-decoration-none">
				<span class="material-icons">add</span>
			</button>
		</a>
	</div>
	@endcan
@endif
<div class="bg-white w-100 p-3 mt-2">
	<table id="table" class="table table-striped mt-3" style="width:100%">
        <thead>
            <tr>
				@foreach($headers as $header)
					<th> {{$header['title']}} </th>
				@endforeach
				@if($actions == true)
					<th> </th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach ($rowData as $row)
			<tr>
				@foreach ($headers as $head)
					
					<td> 
						@if(isset($head['icon']) && $head['icon'] == true)
							<div class="icon"><i class="{{ $row[$head['name']] }}"></i></div> 
						@else
							{{ $row[$head['name']] }} 
						@endif
					</td>
				
				@endforeach
				
				@if($actions == true)
					<td class="text-end">
						@can($pagename.'.show')
						<a href="{{route($pagename.'.show', $row['slug'])}}" class="text-decoration-none">
							<button class="btn btn-info text-white" class="text-decoration-none">
								<i class="bi bi-eye"></i>
							</button>
						</a>
						@endcan
						@can($pagename.'.edit')
						<a href="{{route($pagename.'.edit', $row['slug'])}}" class="text-decoration-none">
							<button class="btn btn-warning" class="text-decoration-none">
								<i class="bi bi-pencil text-white"></i>
							</button>
						</a>
						@endcan
						@can($pagename.'.delete')
						<button class="btn btn-danger">
							<i class="bi bi-trash"></i>
						</button>
						@endcan
					</button>
					</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
@push('script')
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
	$.fn.dataTable.ext.classes.sPageButton = 'btn btn-primary mx-1';
    $('#table').DataTable({
		language: {
			paginate: {
			  next: '&#8594;', // or '→'
			  previous: '&#8592;' // or '←' 
			}
		  }
	});
	
	$('.dataTables_filter input').addClass('form-control');
	$('.dataTables_length select').addClass('form-control');
});

</script>
@endpush