<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<!-- page script -->
<script>

	// $(function() {
 //    // Setup - add a text input to each HEADER cell
	//     $('#datatabel thead th').each( function () {
	//         var title = $(this).text();
	//         if (title != '') {
	//         	$(this).html( title+'<hr><input type="text" placeholder="Cari '+title+'" />' );
	//         }
	        
	//     } );
	 
	//     // DataTable
	//     var table = $('#datatabel').DataTable({
	//     	"paging": false,
	//     	"columnDefs": [ {
	// 		      "targets"  : 'no-sort',
	// 		      "orderable": false,
	// 		}],
	// 		"rowReorder": [{
	//             "selector": 'td:nth-child(2)'
	//         }],
	//         "responsive": true,
	//     });

	//     $('.dataTables_filter').hide();

	//     // Apply the search
	//     table.columns().every( function () {
	//         var that = this;
	//         $('input', this.header()).on( 'keyup change', function () {
	//             if ( that.search() !== this.value ) {
	//                 that.search( this.value )
	//                     .draw();
	//             }
	//         });
	//     });
	// });
	

  $(function () {
    $('#datatabel').DataTable({
     
      "searching": true,
      "columnDefs": [ {
			      "targets"  : 'no-sort',
			      "orderable": false,
		}],
		
	    "responsive": true,
	});

  });
</script>