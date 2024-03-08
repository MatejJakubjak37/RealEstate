<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>Real Estate</title>
  </head>
  <body>
    <div class="container">
      <section class="main-content">
        @include('header')
        <div class="content">
          <div class="sidebar">
            <div class="filters-div">
              <h4 class="filters-title">Filters</h4>
              <h6 class="reset-filters">Reset filters</h6>
              <button class="filters-count">5</button>
              <button class="exit-filters">X</button>
            </div>
            <div class="optionss-div">
              <div class="options-div">
                <div class="property-type-div category-div">
                  <h4>Property Type</h4>
                  <div>
                    <input type="checkbox" id="house" />
                    <label class="filter-lable" for="house">House</label>
                  </div>
                  <div>
                    <input type="checkbox" id="apartment" />
                    <label class="filter-lable" for="apartment"
                      >Apartment</label
                    >
                  </div>
                  <div>
                    <input type="checkbox" id="room" />
                    <label class="filter-lable" for="room">Room</label>
                  </div>
                  <div>
                    <input type="checkbox" id="townhall" />
                    <label class="filter-lable" for="townhall">Townhall</label>
                  </div>
                  <div>
                    <input type="checkbox" id="parking" />
                    <label class="filter-lable" for="parking">Parking</label>
                  </div>
                </div>
                <div class="style-of-home-div category-div">
                  <h4>Style of Home</h4>
                  <div>
                    <input type="checkbox" id="aframe" />
                    <label class="filter-lable" for="aframe">A-Frame</label>
                  </div>
                  <div>
                    <input type="checkbox" id="bungalow" />
                    <label class="filter-lable" for="bungalow">Bungalow</label>
                  </div>
                  <div>
                    <input type="checkbox" id="cottage" />
                    <label class="filter-lable" for="cottage">Cottage</label>
                  </div>
                  <div>
                    <input type="checkbox" id="dome" />
                    <label class="filter-lable" for="dome">Dome</label>
                  </div>
                  <div>
                    <input type="checkbox" id="spanish" />
                    <label class="filter-lable" for="spanish">Spanish</label>
                  </div>
                </div>
                <div class="category-div min-max-div options-flex">
                  <div class="min-price option-item">
                    <label for="min-price" class="lable-title">Min. Price</label>
                    <select name="min-price" id="min-price">
                      <option value="any">Any</option>
                      <option value="500000">$500,000</option>
                      <option value="1000000">$1,000,000</option>
                      <option value="1500000">$1,500,000</option>
                      <option value="2000000">$2,000,000</option>
                    </select>
                  </div>
                  <div class="max-price option-item">
                    <label for="max-price" class="lable-title">Max. Price</label>
                    <select name="max-price" id="max-price">
                      <option value="any">Any</option>
                      <option value="500000">$500,000</option>
                      <option value="1000000">$1,000,000</option>
                      <option value="1500000">$1,500,000</option>
                      <option value="2000000">$2,000,000</option>
                    </select>
                  </div>
                </div>
                <div class="category-div bedroom-bathroom options-flex">
                  <div class="bedroom option-item">
                    <label for="bedroom" class="lable-title">Bedroom</label>
                    <select name="bedroom" id="bedroom">
                      <option value="any">Any</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div class="bathroom option-item">
                    <label for="bathroom" class="lable-title">Bathroom</label>
                    <select name="bathroom" id="bathroom">
                      <option value="any">Any</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="category-div size options-flex">
                  <div class="size-min option-item">
                    <label for="size-min" class="lable-title">Size (Min)</label>
                    <select name="size-min" id="size-min">
                      <option value="any">Any</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div class="size-max option-item">
                    <label for="size-max" class="lable-title">Size (Max)</label>
                    <select name="size-max" id="size-max">
                      <option value="any">Any</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="accessibillity-features-div category-div">
                  <h4>Accessibillity Features</h4>
                  <div>
                    <input type="checkbox" id="doorway" />
                    <label class="filter-lable" for="doorway"
                      >Extra-wide doorways</label
                    >
                  </div>
                  <div>
                    <input type="checkbox" id="ramps" />
                    <label class="filter-lable" for="ramps">Ramps</label>
                  </div>
                  <div>
                    <input type="checkbox" id="grab-bars" />
                    <label class="filter-lable" for="grab-bars"
                      >Grab bras</label
                    >
                  </div>
                  <div>
                    <input type="checkbox" id="lower-counter" />
                    <label class="filter-lable" for="lower-counter"
                      >Lower counter heights</label
                    >
                  </div>
                  <div>
                    <input type="checkbox" id="spanish" />
                    <label class="filter-lable" for="spanish">Spanish</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="main">
            <div class="listings-header">
              <h4>Showing {{count($listings)}} search results</h4>
              <div class="sort-by">
                <label for="sort-by" class="lable-title"
                  >Sort by:
                  <select name="size-min" id="size-min">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                    <option value="price-asc">Price Asc</option>
                    <option value="price-desc">Price Desc</option>
                    <option value="name">Name</option>
                  </select>
                </label>
              </div>
            </div>
            <button class="filter-btn" id="filter">Filters</button>
            <div class="listings">
            @foreach($listings as $listing)
                @php
                    $imageData = base64_encode($listing->image);
                    $src = 'data:image/jpeg;base64,'.$imageData;
                    $price = number_format($listing->price);
                @endphp
                <div class="listing">
                    <img class="listing-image" src='{{ $src }}' alt="hoose" />
                <div class="listing-content">
                    <h2 class="listing-price">${{ $price }}</h2>
                    <h4 class="listing-address">{{ $listing->address }}</h4>
                    <div class="listing-utilities">
                    <span>
                      <img src="img/bath-solid.svg" alt="bath" />
                      <h4>{{ $listing->bathrooms }}</h4>
                    </span>
                    <span>
                      <img src="img/bed-solid.svg" alt="bed" />
                      <h4>{{ $listing->bedrooms }}</h4>
                    </span>
                    <span>
                      <img src="img/expand-solid.svg" alt="size" />
                      <h4>{{ $listing->size }}&sup2ft</h4>
                    </span>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </section>
      @include('map')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
