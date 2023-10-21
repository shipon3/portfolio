<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('experience')}}">Work experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('project')}}">Projects </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    About
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul style="list-style: none;">
                                <li><strong>Name </strong> : {{$data['name']}}</li>
                                <li><strong>Father's Name </strong> : {{$data['father_name']}}</li>
                                <li><strong>Mother's Name </strong> : {{$data['mother_name']}}</li>
                                <li><strong>Date of Birth </strong> : {{$data['date_of_birth']}}</li>
                                <li><strong>Place of Birth </strong> : {{$data['place_of_birth']}}</li>
                                <li><strong>Gander </strong> : {{$data['gender']}}</li>
                                <li><strong>Nationality </strong> : {{$data['nationality']}}</li>
                                <li><strong>Marital Status </strong> : {{$data['marital_status']}}</li>
                                <li><strong>Address </strong> : {{$data['address']}}</li>
                            </ul>
                            <div class="card" style="margin-bottom: 10px;">
                                <div class="card-header">
                                    <h2>Contact Information</h2>
                                    <ul style="list-style: none;">
                                        @foreach($data['contact_information'] as $key=> $information)
                                        <li><strong>{{ucwords($key)}} </strong> : {{$information}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 10px;">
                                <div class="card-header">
                                    <h2>Education</h2>
                                    @foreach($data['education'] as $information)
                                    <div style="border: 1px solid #ccc;padding: 10px 20px;margin-bottom: 10px;">
                                        <ul style="list-style: none;">
                                            @foreach($information as $key => $education)
                                            <li><strong>{{ucwords($key)}} </strong> : {{$education}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 10px;">
                                <div class="card-header">
                                    <h2>Skills</h2>
                                    <ul style="list-style: none;">
                                        @foreach($data['skills'] as $key=> $skill)
                                        <li>{{$skill}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 10px;">
                                <div class="card-header">
                                    <h2>Languages</h2>
                                    <ul style="list-style: none;">
                                        @foreach($data['languages'] as $key=> $language)
                                        <li>{{$language}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 10px;">
                                <div class="card-header">
                                    <h2>Interests</h2>
                                    <ul style="list-style: none;">
                                        @foreach($data['interests'] as $key=> $interest)
                                        <li>{{$interest}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>