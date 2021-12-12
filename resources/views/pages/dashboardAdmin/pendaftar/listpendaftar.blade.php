@extends('layout.adminLayout')

@section('main')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List Pendaftar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Paraga Scout</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pendaftar Paraga Scout
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" cellspacing="0" width="100%" class="table table-bordered border-primary">
                                    <thead>
                                        <tr align="center">
                                            <th width="3px">No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th width="150px">Nomor Telepon</th>
                                            <th width="150px">Detail</th>
                                            <th width="20px">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($pendaftar->count())
                                            @foreach($pendaftar as $key => $pdftr)
                                                <tr id="tr_{{$pdftr->id}}">
                                                    <th scope="row" align="center">{{$loop->iteration}}</th>
                                                    <td>{{$pdftr->namaLengkap}}</td>
                                                    <td>{{$pdftr->email}}</td>
                                                    <td>{{$pdftr->nomorTelepon}}</td>
                                                    <td align="center"><a href="/admin/detailpendaftar/{{$pdftr->id}}">Lebih detail</a></td>
                                                    <td align="center">
                                                        <form action="/admin/listpendaftar/{{$pdftr->id}}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="delete-btn"><div class="fa fa-trash" color="red"></div></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <script type="text/javascript">
                    $(document).ready(function () {


                        $('#master').on('click', function(e) {
                        if($(this).is(':checked',true))  
                        {
                            $(".sub_chk").prop('checked', true);  
                        } else {  
                            $(".sub_chk").prop('checked',false);  
                        }  
                        });


                        $('.delete_all').on('click', function(e) {


                            var allVals = [];  
                            $(".sub_chk:checked").each(function() {  
                                allVals.push($(this).attr('data-id'));
                            });  


                            if(allVals.length <=0)  
                            {  
                                alert("Please select row.");  
                            }  else {  


                                var check = confirm("Are you sure you want to delete this row?");  
                                if(check == true){
                                    var join_selected_values = allVals.join(","); 
                                    $.ajax({
                                        url: $(this).data('url'),
                                        type: 'DELETE',
                                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                        data: 'ids='+join_selected_values,
                                        success: function (data) {
                                            if (data['success']) {
                                                $(".sub_chk:checked").each(function() {  
                                                    $(this).parents("tr").remove();
                                                });
                                                alert(data['success']);
                                            } else if (data['error']) {
                                                alert(data['error']);
                                            } else {
                                                alert('Whoops Something went wrong!!');
                                            }
                                        },
                                        error: function (data) {
                                            alert(data.responseText);
                                        }
                                    });


                                $.each(allVals, function( index, value ) {
                                    $('table tr').filter("[data-row-id='" + value + "']").remove();
                                });
                                }  
                            }  
                        });


                        $('[data-toggle=confirmation]').confirmation({
                            rootSelector: '[data-toggle=confirmation]',
                            onConfirm: function (event, element) {
                                element.trigger('confirm');
                            }
                        });


                        $(document).on('confirm', function (e) {
                            var ele = e.target;
                            e.preventDefault();


                            $.ajax({
                                url: ele.href,
                                type: 'DELETE',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                success: function (data) {
                                    if (data['success']) {
                                        $("#" + data['tr']).slideUp("slow");
                                        alert(data['success']);
                                    } else if (data['error']) {
                                        alert(data['error']);
                                    } else {
                                        alert('Whoops Something went wrong!!');
                                    }
                                },
                                error: function (data) {
                                    alert(data.responseText);
                                }
                            });


                            return false;
                        });
                    });
                </script>
@endsection