
@include('adminsidenav')

<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $key=> $category )
          <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$category->title}}</td>
            
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
