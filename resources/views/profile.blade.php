<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $profile->name) }}">
            </div>
            <div class="form-group">
                <label for="birth_date">Birth Date</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $profile->birth_date) }}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="male" {{ old('gender', $profile->gender) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', $profile->gender) == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ old('gender', $profile->gender) == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
</body>
</html>
