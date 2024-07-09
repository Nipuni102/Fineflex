@extends('layouts.navigation')

@section('content')

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fine ID</th>
                                            <th>Police Station</th>
                                            <th>Vehicle Number</th>
                                            <th>Violation Type</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($fineDetails as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->fine_id }}</td>
                                            <td>{{ $item->police_station}}</td>
                                            <td>{{ $item->vehicle_number}}</td>
                                            <td>{{ $item->violation_name}}</td>
                                            <td>{{ $item->date}}</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('fine', ['id' => $item->id]) }}" title="View "><button class="btn btn-success btn-sm btn-icon-text mr-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> view</button></a>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
@endsection