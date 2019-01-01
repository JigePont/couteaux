@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form method="post" action="{{route('users.update', $user)}}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}

                        <div class="form-group">
                            @csrf
                            <label for="name">Nom:</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
                        </div>
                        <div class="form-group">
                            @csrf
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}"/>
                        </div>
                        <div class="form-group">
                            @csrf
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <div class="form-group">
                            @csrf
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" class="form-control" name="password_confirmation"/>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
