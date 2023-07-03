
@extends('theeme')

@section('abcd')
<!DOCTYPE html>
<html>
<head>
	<title>Exemple de tableau</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		table, th, td {
			border: 1px solid black;
		}

		th, td {
			padding: 10px;
			text-align: left;
		}

		th {
			background-color: #ddd;
			font-weight: bold;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
                <th >Nom</th>
                                                
                                                <th >Email</th>
                                                
                                                <th>message</th>
                                                <th>Action</th>
                                                
			</tr>
		</thead>
		<tbody>
            @foreach($donnee as $data)
                                            <tr>
                                                <td>{{$data->nom}}</td>
                                    
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->message}}</td>
                                                
                                                <td>
                                            
                                                <a href="supcontact/{{$data->id}}" class="btn btn-danger">Supprimer</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
		</tbody>
	</table>
</body>
</html>
@endsection