<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('student.list') }}">List</a></li>
            </ol>
        </nav>
        <h2>Add Student</h2>
        <form action="{{ $user->id ? route('students.update', $user->id) : route('students.store') }}" method="POST">
            @csrf
            @if ($user->id)
                @method('patch')
                <input type="hidden" name="id" value="{{ $user->id }}">
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $user->name) }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email', $user->email) }}">
                        @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ old('phone', $user->phone) }}">
                        @error('phone')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ old('address', $user->address) }}">
                        @error('address')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city"
                            value="{{ old('city', $user->city) }}">
                        @error('city')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state"
                            value="{{ old('state', $user->state) }}">
                        @error('state')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="state" class="form-control" id="country" name="country"
                            value="{{ old('country', $user->country) }}">
                        @error('country')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="country" class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="1" {{ old('country', $user->country) == 1 ? 'selected' : '' }}>Active
                            </option>
                            <option value="0" {{ old('country', $user->country) == 0 ? 'selected' : '' }}>InActive
                            </option>
                        </select>
                        @error('status')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- <h3>Subject Marks</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="english" class="form-label">English</label>
                        <input type="text" class="form-control" id="english" name="english"
                            value="{{ old('english', $user->english) }}">
                        @error('english')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="english_mark" class="form-label">English Mark</label>
                        <input type="text" class="form-control" id="english_mark" name="english_mark"
                            value="{{ old('english_mark', $user->english_mark) }}">
                        @error('english_mark')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="math" class="form-label">Math</label>
                        <input type="text" class="form-control" id="math" name="math"
                            value="{{ old('math', $user->math) }}">
                        @error('math')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="math_mark" class="form-label">Math Mark</label>
                        <input type="text" class="form-control" id="math_mark" name="math_mark"
                            value="{{ old('math_mark', $user->math_mark) }}">
                        @error('math_mark')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="history" class="form-label">History</label>
                        <input type="text" class="form-control" id="history" name="history"
                            value="{{ old('history', $user->history) }}">
                        @error('history')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="history_mark" class="form-label">History Mark</label>
                        <input type="text" class="form-control" id="history_mark" name="history_mark"
                            value="{{ old('history_mark', $user->history_mark) }}">
                        @error('history_mark')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </div>
        </form>

    </div>

</body>

</html>
