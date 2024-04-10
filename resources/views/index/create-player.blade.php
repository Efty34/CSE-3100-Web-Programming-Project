<!DOCTYPE html>
<html>

<head>
    <title>InFoo</title>
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/new.png') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('createplayer_assets/createplayer_style.css') }}">
</head>

<body>
    <div class="container register">

        <div class="row">

            <div class="col-md-3 register-left">
                <h1>InFoo</h1>
                <p>Create Players <br> Create Clubs</p>
            </div>

            <div class="col-md-9 register-right">

                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#player" role="tab"
                            aria-controls="home" aria-selected="true">Player</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#club" role="tab"
                            aria-controls="profile" aria-selected="false">Club</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="player" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Add Player</h3>
                        <form action="/players/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-6 mt-4">

                                    <h4 id="title">About Player</h4>

                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="First Name" value="" />
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control"
                                            placeholder="Last Name" value="" />
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="position" class="form-control"
                                            placeholder="Position" value="" />
                                        @if ($errors->has('position'))
                                            <span class="text-danger">{{ $errors->first('position') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="profile_image" class="form-control"
                                            placeholder="Upload Image" />
                                        @if ($errors->has('profile_image'))
                                            <span class="text-danger">{{ $errors->first('profile_image') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="birth_date" class="form-control"
                                            placeholder="Birth Date" value="" />
                                        @if ($errors->has('birth_date'))
                                            <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="birth_place" class="form-control"
                                            placeholder="Birth Place" value="" />
                                        @if ($errors->has('birth_place'))
                                            <span class="text-danger">{{ $errors->first('birth_place') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="social" class="form-control"
                                            placeholder="Instagram" value="" />
                                        @if ($errors->has('social'))
                                            <span class="text-danger">{{ $errors->first('social') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="preferred_foot" class="form-control"
                                            placeholder="Preferred Foot" value="" />
                                        @if ($errors->has('preferred_foot'))
                                            <span class="text-danger">{{ $errors->first('preferred_foot') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="height" class="form-control" placeholder="Height"
                                            value="" />
                                        @if ($errors->has('height'))
                                            <span class="text-danger">{{ $errors->first('height') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="market_value" class="form-control"
                                            placeholder="Current Market Value" value="" />
                                        @if ($errors->has('market_value'))
                                            <span class="text-danger">{{ $errors->first('market_value') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="outfitter" class="form-control"
                                            placeholder="Outfitter" value="" />
                                        @if ($errors->has('outfitter'))
                                            <span class="text-danger">{{ $errors->first('outfitter') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 mt-4">

                                    <h4 id="title">Achievements</h4>

                                    <div class="form-group">
                                        <input type="number" name="career_goals" class="form-control"
                                            placeholder="Career Goals" value="" />
                                        @if ($errors->has('career_goals'))
                                            <span class="text-danger">{{ $errors->first('career_goals') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="world_cups" class="form-control"
                                            placeholder="World Cup" value="" />
                                        @if ($errors->has('world_cups'))
                                            <span class="text-danger">{{ $errors->first('world_cups') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="continental_cups" class="form-control"
                                            placeholder="Continental Cup" value="" />
                                        @if ($errors->has('continental_cups'))
                                            <span class="text-danger">{{ $errors->first('continental_cups') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="ballon_dors" class="form-control"
                                            placeholder="Ballon d'OR" value="" />
                                        @if ($errors->has('ballon_dors'))
                                            <span class="text-danger">{{ $errors->first('ballon_dors') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="champions_league" class="form-control"
                                            placeholder="Champions League" value="" />
                                        @if ($errors->has('champions_league'))
                                            <span class="text-danger">{{ $errors->first('champions_league') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="league_titles" class="form-control"
                                            placeholder="League Trophy" value="" />
                                        @if ($errors->has('league_titles'))
                                            <span class="text-danger">{{ $errors->first('league_titles') }}</span>
                                        @endif
                                    </div>


                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Club History</h4>

                                    <div class="form-group">
                                        <input type="text" name="club_debut" class="form-control"
                                            placeholder="Club Debut" value="" />
                                        @if ($errors->has('club_debut'))
                                            <span class="text-danger">{{ $errors->first('club_debut') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="current_club" class="form-control"
                                            placeholder="Current Club" value="" />
                                        @if ($errors->has('current_club'))
                                            <span class="text-danger">{{ $errors->first('current_club') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="previous_clubs" class="form-control"
                                            placeholder="Previous Club" value="" />
                                        @if ($errors->has('previous_clubs'))
                                            <span class="text-danger">{{ $errors->first('previous_clubs') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">

                                    <h4 id="title">National History</h4>

                                    <div class="form-group">
                                        <input type="text" name="national_team" class="form-control"
                                            placeholder="National Team" value="" />
                                        @if ($errors->has('national_team'))
                                            <span class="text-danger">{{ $errors->first('national_team') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="national_debut" class="form-control"
                                            placeholder="National Debut" value="" />
                                        @if ($errors->has('national_debut'))
                                            <span class="text-danger">{{ $errors->first('national_debut') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">

                                    <h4 id="title">Fifa Rating</h4>

                                    <div class="form-group">

                                        <input type="number" name="overall" class="form-control"
                                            placeholder="Overall" value="" />
                                        @if ($errors->has('overall'))
                                            <span class="text-danger">{{ $errors->first('overall') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="pace" class="form-control" placeholder="Pace"
                                            value="" />
                                        @if ($errors->has('pace'))
                                            <span class="text-danger">{{ $errors->first('pace') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="shooting" class="form-control"
                                            placeholder="Shooting" value="" />
                                        @if ($errors->has('shooting'))
                                            <span class="text-danger">{{ $errors->first('shooting') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="passing" class="form-control"
                                            placeholder="Passing" value="" />
                                        @if ($errors->has('passing'))
                                            <span class="text-danger">{{ $errors->first('passing') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="dribbling" class="form-control"
                                            placeholder="Dribling" value="" />
                                        @if ($errors->has('dribbling'))
                                            <span class="text-danger">{{ $errors->first('dribbling') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="defending" class="form-control"
                                            placeholder="Defending" value="" />
                                        @if ($errors->has('defending'))
                                            <span class="text-danger">{{ $errors->first('defending') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="physical" class="form-control"
                                            placeholder="Physical" value="" />
                                        @if ($errors->has('physical'))
                                            <span class="text-danger">{{ $errors->first('physical') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Archive</h4>

                                    <div class="form-group">
                                        <input type="file" name="photo1" class="form-control"
                                            placeholder="Upload Image" />
                                        @if ($errors->has('photo1'))
                                            <span class="text-danger">{{ $errors->first('photo1') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo2" class="form-control"
                                            placeholder="Upload Image" />
                                        @if ($errors->has('photo2'))
                                            <span class="text-danger">{{ $errors->first('photo2') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo3" class="form-control"
                                            placeholder="Upload Image" />
                                        @if ($errors->has('photo3'))
                                            <span class="text-danger">{{ $errors->first('photo3') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo4" class="form-control"
                                            placeholder="Upload Image" />
                                        @if ($errors->has('photo4'))
                                            <span class="text-danger">{{ $errors->first('photo4') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo5" class="form-control"
                                            placeholder="Upload Image" />
                                        @if ($errors->has('photo5'))
                                            <span class="text-danger">{{ $errors->first('photo5') }}</span>
                                        @endif
                                    </div>


                                </div>
                                <button type="submit">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                                        </svg> Create
                                    </span>
                                </button>
                            </div>

                        </form>

                    </div>

                    {{-- <div class="tab-pane fade show" id="club" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Add Club</h3>
                        <form action=""> 
                            <div class="row register-form">

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">About Club</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Club Name" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="" id="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Founded Year" value="" />
                                    </div><div class="form-group">
                                        <input type="text" class="form-control" placeholder="Country" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Laeague" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="World Ranking" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Market Value" value="" />
                                    </div>
                                    
                                </div>
    
                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Trophy</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Champions League" value="" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="League Trophy" value="" />
                                    </div>
                                    
                                </div>
    
                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Stadium</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Stadium Name" value="" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Capacity" value="" />
                                    </div>
    
                                    <div class="form-group">
                                        <input type="file" name="" id="">
                                    </div>
                                    
                                </div>
    
                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Staff</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Manager" value="" />
                                    </div>
                                </div>
    
                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Squad</h4>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-1" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-2" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-3" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-4" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-5" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-6" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-7" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-8" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-9" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-10" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PLayer-11" value="" />
                                        <input type="text" class="form-control" placeholder="Position" value="" />
                                        <input type="file" name="" id="">
                                    </div>
    
                                    <button type="submit">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                                            </svg> Create
                                        </span>
                                    </button>
    
                                </div>
    
                            </div>
                        </form>
                        
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>