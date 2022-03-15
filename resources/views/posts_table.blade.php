@extends('layouts.app')
 
@section('Page_Title', 'Posts Table')

@section('Body_Content')
<center><a href="{{ __('/posts/create') }}"><button class="btn btn-primary m-3">Create New Post</button></a></center>
<br>
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
    <!-- For displaying the tables -->
    @foreach ($posts as $post)
      <tr>
        <form action="/posts/posts-table/{{ $post->id }}" method="post">
          @csrf
          <td><input readonly class="form-control-plaintext" type="number" name="id" value="{{ $post->id }}"></dh>
          <td><input readonly class="form-control-plaintext" type="text" name="Post_Title" value="{{ $post->Post_Title }}"></td>
          <td>
            <textarea readonly class="form-control-plaintext" name="Post_Description" rows="5">{{ $post->Post_Description }}</textarea>
          </td>
          <td>
            <button type="submit" name="btn_view" value="btn_view" class="btn btn-info mt-1 mb-1">View</button><br>
            <button type="submit" name="btn_update" value="btn_update" class="btn btn-success mt-1 mb-1">Update</button><br>
            <button type="submit" name="btn_delete" value="btn_delete" class="btn btn-danger mt-1 mb-1">Delete</button><br>
          </td>
         </form>
      </tr>
    @endforeach
  </tbody>
</table>



@endsection