
@include('welcome')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Movies</h1>

    <div>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">description</th>
              <th scope="col">category</th>
            </tr>
          </thead>
    
          <tbody>
          @foreach($movies as $key=> $movie )
            <tr>
              <th scope="row">{{$key+1}}</th>
              <td>{{$movie->title}}</td>
              <td>{{$movie->description}}</td>
              <td>{{\App\Models\Category::where('id',$movie->category_id)->first()->title}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>

    
  </div>

