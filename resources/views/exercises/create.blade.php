<h1>Create</h1>
<form method="post" class="form-horizontal" role="form" action="{{ route('exercises.store') sss}}">
  @csrf
  <label for="title">Title:</label><br><br>
  <input type="text" id="title" name="title" value="Title"><br><br>
  <div class="form-group">
      <button type="submit" class="btn btn-lg btn-success btn-block">Connexion</button>
    </div>
</form> 