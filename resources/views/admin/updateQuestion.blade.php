@extends('.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Question</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                { session('status') }
                            </div>
                        @endif
                        @if (session('msg'))
                            <b>{{ session('msg') }}</b>
                        @endif
                        <form action="{{ route('updateQuestion', ['id' => $questionData->id]) }}" method="post">
                            {{ csrf_field() }}
                            @method('put')
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question" value="{{ $questionData->question }}"
                                    class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Option1</label>
                                <input type="text" name="a" value="{{ $questionData->a }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Option2</label>
                                <input type="text" name="b" value="{{ $questionData->b }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Option3</label>
                                <input type="text" name="c" value="{{ $questionData->c }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Option4</label>
                                <input type="text" name="d" value="{{ $questionData->d }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Option5</label>
                                <input type="text" name="e" value="{{ $questionData->e }}" class="form-control" />
                            </div>
                            <div class="form-group p-2">
                                <a class="link" href="/home">All
                                    Questions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button
                                    class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
