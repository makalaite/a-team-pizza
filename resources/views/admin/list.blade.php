@extends('admin.core')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <h2>Contextual Classes</h2>
        <table class="table">
            <thead>
            <tr>
                @foreach($list[0] as $key => $value)
                    <th>{{ $key }}</th>

                @endforeach
                <th>view</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $key => $record)
                <tr>
                    @foreach($record as $key => $value)
                        <td>
                            {{ $value }}
                        </td>
                    @endforeach
                    <td><button type="button" href="/admShow" class="btn btn-success">view</button></td>
                        <td><a href="{{ route($editRoute, $record['id']) }}" ><button type="button" class="btn btn-info">edit</button> </a></td>
                        <td>  <button onclick="deleteItem( '{{ route($deleteRoute, $record['id']) }}' )">delete me</button></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script > $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route)
        {
            $.ajax({
                url : route,
                type :'DELETE',
                //data : {},
                dataType : 'json',
                success : function () {
                    alert('DELETED');
                },
                error : function(){
                    alert('ERROR');
                }
            });
        }
    </script>
    @endsection