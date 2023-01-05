
@include('adminsidenav')

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">birthday</th>
          </tr>
        </thead>

        <tbody>
        @foreach($users as $key=> $user )
          <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->birthday}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
