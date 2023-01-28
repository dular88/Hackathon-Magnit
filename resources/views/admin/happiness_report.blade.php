@extends('.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Happiness Report</b></div>

                    <div class="card-body">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>SNo.</th>
                                    <th>EmpNo.</th>
                                    <th>Email</th>
                                    <th>Total Marks </th>
                                    <th>Happiness Marks </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($happinessData as $happiness)
                                    <tr>
                                        <td scope="row">{{ $i }}</td>
                                        <td>{{ $happiness->empno }}</td>
                                        <td>{{ $happiness->email }}</td>
                                        <td>{{ $happiness->total_marks }}</td>
                                        <td>{{ $happiness->happiness_marks }}</td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
