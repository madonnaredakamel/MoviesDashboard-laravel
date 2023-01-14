
@include('welcome')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Users</h1>

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
   
  </div>

  

