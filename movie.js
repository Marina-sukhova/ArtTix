// GLOBAL CONSTANTS
const MY_API_KEY = '0dce21e41025b5df140c7122a2a69ba6';
const scrollUp = document.getElementById("scroll-up");

let form = document.querySelector("form")
let movieArea = document.querySelector("#movies-grid")
let showMoreBtn = document.querySelector("#load-more-movies-btn")
let userInput = document.querySelector("#search-input")
let closeBtn = document.querySelector("#close-search-btn")
let modalContent = document.querySelector("#modal-content")

let trendingFlag = false
let searchFlag = false

let pageNum = 1

let searchKey = ""
let backupSearchKey = ""
let loadMore = false

async function getTrending() {

    let options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'a73af9b971msh47edac7916a93bap1832a8jsnf409427490f7',
            'X-RapidAPI-Host': 'flixster.p.rapidapi.com'
        }
    };

    let trendingResponse = await fetch('https://flixster.p.rapidapi.com/movies/get-opening?countryId=usa', options)
    let trendingResponseData = await trendingResponse.json()
    console.log(trendingResponseData)


    displayTrending(trendingResponseData)

}
getTrending();
function displayTrending(trendingData) {

    data = trendingData

    data.data.opening.forEach(movie => {
        if (movie.posterImage.url == null) {
            movieArea.innerHTML += `<div class="hero-section">
            <div class="hero-slide">
                <div class="owl-carousel carousel-nav-center" id="hero-carousel"><img class="movie-poster"
                        src="${movie.posterImage.url}" alt="${movie.name} movie poster" onclick="showPopUp()"
                        width="312" height="468">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">${movie.name}</div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span> ${movie.userRating.dtlWtsCount}</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non
                                odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione
                                mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`
        } else {
            movieArea.innerHTML += `<div class="hero-section">
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel"><img class="movie-poster"
                    src="${movie.posterImage.url} "alt="${movie.name} movie poster" onclick="showPopUp()"
                    width="312" height="468">
                <div class="overlay"></div>
                <div class="hero-slide-item-content">
                    <div class="item-content-wraper">
                        <div class="item-content-title top-down">${movie.name}</div>
                        <div class="movie-infos top-down delay-2">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span> ${movie.userRating.dtlWtsCount}</span>
                            </div>
                        </div>
                        <div class="item-content-description top-down delay-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non
                            odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione
                            mollitia accusantium, facere ab suscipit.
                        </div>
                        <div class="item-action top-down delay-6">
                            <a href="#" class="btn btn-hover">
                                <i class="bx bxs-right-arrow"></i>
                                <span>Watch now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`
        }
    });

}
