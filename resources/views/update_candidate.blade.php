<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="/update-candidate/{{ $candidate->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Phone</label>
        <input type ="text" placeholder="type your phone" name="candidate_phone" value="{{ $candidate->phone }}">
        <br/>
        <label for="">Name</label>
        <input type ="text" placeholder="type your name" name="candidate_name" value="{{ $candidate->name }}">
        <br/>
        <button type="submit" class="btn btn-primary">Update</button>
    </form> 

</body>
</html>