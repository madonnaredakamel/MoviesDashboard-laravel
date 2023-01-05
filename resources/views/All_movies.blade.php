
@include('adminsidenav')

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
            <th scope="row">{{$key}}</th>
            <td>{{$movie->title}}</td>
            <td>{{$movie->description}}</td>
            <td>{{\App\Models\Category::where('id',$movie->category_id)->first()->title}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
