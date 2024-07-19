<form action="update_movie.php" method="post" enctype="multipart/form-data" onsubmit="return validateCheckboxes()">
    <div class="row">
        <div class="col-9">
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="imageInput" class="col-form-label">Choose an Movie image:</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="file" id="imageInput" name="movie_image" accept="image/*" required>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_name" class="col-form-label">Enter Movie Name:</label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" id="movie_name" name="movie_name" required>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="Director" class="col-form-label">Enter Director Name:</label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" id="Director" name="movie_director" required>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_genre" class="col-form-label">Select Movie Genres:</label>
                </div>
                <div class="col-9" style="display: flex;flex-flow: row wrap;">
                    <div class="row">
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreAction" name="movie_genres[]" value="Action">
                            <label class="form-check-label" for="genreAction">Action</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreAdventure" name="movie_genres[]" value="Adventure">
                            <label class="form-check-label" for="genreAdventure">Adventure</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreAnimation" name="movie_genres[]" value="Animation">
                            <label class="form-check-label" for="genreAnimation">Animation</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreBiography" name="movie_genres[]" value="Biography">
                            <label class="form-check-label" for="genreBiography">Biography</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreComedy" name="movie_genres[]" value="Comedy">
                            <label class="form-check-label" for="genreComedy">Comedy</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreCrime" name="movie_genres[]" value="Crime">
                            <label class="form-check-label" for="genreCrime">Crime</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreHorror" name="movie_genres[]" value="Horror">
                            <label class="form-check-label" for="genreHorror">Horror</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreDrama" name="movie_genres[]" value="Drama">
                            <label class="form-check-label" for="genreDrama">Drama</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreFamily" name="movie_genres[]" value="Family">
                            <label class="form-check-label" for="genreFamily">Family</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreFantasy" name="movie_genres[]" value="Fantasy">
                            <label class="form-check-label" for="genreFantasy">Fantasy</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreWar" name="movie_genres[]" value="War">
                            <label class="form-check-label" for="genreWar">War</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreDocumentary" name="movie_genres[]" value="Documentary">
                            <label class="form-check-label" for="genreDocumentary">Documentary</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreHistory" name="movie_genres[]" value="History">
                            <label class="form-check-label" for="genreHistory">History</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreMusical" name="movie_genres[]" value="Musical">
                            <label class="form-check-label" for="genreMusical">Musical</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreMystery" name="movie_genres[]" value="Mystery">
                            <label class="form-check-label" for="genreMystery">Mystery</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreRomantic" name="movie_genres[]" value="Romantic">
                            <label class="form-check-label" for="genreRomantic">Romantic</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreSport" name="movie_genres[]" value="Sport">
                            <label class="form-check-label" for="genreSport">Sport</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreThriller" name="movie_genres[]" value="Thriller">
                            <label class="form-check-label" for="genreThriller">Thriller</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="genreSciFi" name="movie_genres[]" value="Sci-Fi">
                            <label class="form-check-label" for="genreSciFi">Sci-Fi</label>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_languages" class="col-form-label">Enter Language's: </label>
                </div>
                <div class="col-9" style="display: flex;flex-flow: row wrap;">
                    <div class="row">
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageHindi" name="movie_languages[]" value="Hindi">
                            <label class="form-check-label" for="languageHindi">Hindi</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageEnglish" name="movie_languages[]" value="English">
                            <label class="form-check-label" for="languageEnglish">English</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageGujarati" name="movie_languages[]" value="Gujarati">
                            <label class="form-check-label" for="languageGujarati">Gujarati</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageTamil" name="movie_languages[]" value="Tamil">
                            <label class="form-check-label" for="languageTamil">Tamil</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageTelugu" name="movie_languages[]" value="Telugu">
                            <label class="form-check-label" for="languageTelugu">Telugu</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageMalayalam" name="movie_languages[]" value="Malayalam">
                            <label class="form-check-label" for="languageMalayalam">Malayalam</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="checkbox" id="languageKannad" name="movie_languages[]" value="Kannad">
                            <label class="form-check-label" for="languageKannad">Kannad</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_rating">Select Movie Rating:</label>
                </div>
                <div class="col-9">
                    <select class="form-select" id="movie_rating" name="movie_rating" required>
                        <option value="" disabled selected>Select Rating</option>
                        <option value="U">U - Universal (Suitable for all ages)</option>
                        <option value="UA">UA - Parental Guidance (Suitable for children above age 12)</option>
                        <option value="A">A - Adult (Restricted to adults only)</option>
                        <option value="A/CA">A/CA - Adult with Caution (Restricted to adults with caution)</option>
                        <option value="PG-13">PG-13 - Parents Strongly Cautioned (Some material may be inappropriate for children under 13)</option>
                        <option value="TV-14">TV-14 - Parents Strongly Cautioned (Some material may be unsuitable for children under 14)</option>
                    </select>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_duration" class="col-form-label">Enter Movie Duration:</label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" id="movie_duration" name="movie_duration" placeholder="2h 45m" required>
                    <p style="color: #6c757d;margin-bottom: 0px;">(Example: 3h 12m, 2h 45m)</p>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="releaseDate" class="col-form-label">Enter Movie Release Date: </label>
                </div>
                <div class="col-9">
                    <input type="date" class="form-control" id="releaseDate" name="movie_release_date" required>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_description" class="col-form-label">Enter Movie Description: </label>
                </div>
                <div class="col-9">
                    <textarea class="form-control" id="movie_description" rows="4" name="movie_description" required></textarea>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-3">
                    <label for="movie_price" class="col-form-label">Enter Movie Price: </label>
                </div>
                <div class="col-9">
                    <input type="number" class="form-control" id="movie_price" name="movie_price" required></input>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div id="imageDiv">
                <img id="imagePreview" src="../images/12th_Fail.jpg" class="img-fluid rounded" alt=" image">
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-primary my-2" style="width: 60%;" type="submit" value="Submit">
    </div>
</form>

<script>
    let imagePreview = document.getElementById('imagePreview');
    let imageDiv = document.getElementById('imageDiv');
    imagePreview.style.display = 'none';
    imageDiv.style.position = 'relative';
    document.getElementById('imageInput').addEventListener('change', function(event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                imagePreview.style.position = 'absolute';
                imagePreview.style.right = '0';
                imagePreview.style.top = '0';
            }

            reader.readAsDataURL(file);
        } else {
            imagePreview.style.display = 'none';
        }
    });

    function validateCheckboxes() {
        let genres = document.querySelectorAll('input[name="movie_genres[]"]:checked');
        let languages = document.querySelectorAll('input[name="movie_languages[]"]:checked');

        if (genres.length == 0) {
            alert('Please select at least one genre.');
            event.preventDefault();
        }

        if (languages.length == 0) {
            alert('Please select at least one language.');
            event.preventDefault();
        }
        return true;
    }
</script>