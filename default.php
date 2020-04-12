<?php


?>

<head>
    <meta charset='utf-8' />
    <title>Movie Browser</title>

    <link rel='stylesheet' href='css/index.css'>
</head>

<body>
    <header>
        <h2>COMP 3512 Assign2</h2>
    </header>
    <section id="defaultSection">
        <aside id='asideFilterBlock'>
            <div class='row filterBlock'>
                <div id='filterBox'>
                    <center>
                        <h2>Movie Filter</h2>
                    </center>
                    <div class='filterBlock'>
                        <label class='filterTitle'>Title</label>
                        <div>
                            <input id='titleFilterInput' type='text' />
                        </div>
                    </div>
                    <div class='filterBlock'>
                        <label class='filterTitle'>Year</label>
                        <div class='filterRow'>
                            <label class='container'>Before
                                <input type='radio' name='yearType' id='yearTypeRadioBefore'>
                                <span class='checkmark'></span>
                            </label>
                            <input type='number' id='yearTypeValueBefore' />
                        </div>
                        <div class='filterRow'>
                            <label class='container'>After
                                <input type='radio' name='yearType' id='yearTypeRadioAfter'>
                                <span class='checkmark'></span>
                            </label>
                            <input type='number' id='yearTypeValueAfter' />
                        </div>
                        <div class='filterRow'>
                            <label class='container multiRow'>Between
                                <input type='radio' name='yearType' id='yearTypeRadioBetween'>
                                <span class='checkmark'></span>
                            </label>
                            <div class='multiRowInput'>
                                <input type='number' id='yearTypeValueBetweenMin' />
                                <input type='number' id='yearTypeValueBetweenMax' />
                            </div>
                        </div>
                    </div>
                    <div class='filterBlock'>
                        <label class='filterTitle'>Rating</label>
                        <div class='filterRow'>
                            <label class='container'>Below
                                <input type='radio' name='ratingType' id='ratingTypeRadioBelow'>
                                <span class='checkmark'></span>
                            </label>
                            <div>
                                <div class='sliderBlock'>
                                    <input type='range' min='0' max='10' id='ratingTypeValueBelow' />
                                </div>
                                <div class='rangeDescription'>
                                    <span>0</span>
                                    <span id='ratingBelowValue'>5</span>
                                    <span class='rangeMaxValue'>10</span>
                                </div>
                            </div>
                        </div>
                        <div class='filterRow'>
                            <label class='container'>Above
                                <input type='radio' name='ratingType' id='ratingTypeRadioAbove'>
                                <span class='checkmark'></span>
                            </label>
                            <div>
                                <div class='sliderBlock'>
                                    <input type='range' min='0' max='10' id='ratingTypeValueAbove' />
                                </div>
                                <div class='rangeDescription'>
                                    <span>0</span>
                                    <span id='ratingAboveValue'>5</span>
                                    <span class='rangeMaxValue'>10</span>
                                </div>
                            </div>
                        </div>
                        <div class='filterRow'>
                            <label class='container multiRow'>Between
                                <input type='radio' name='ratingType' id='ratingTypeRadioBetween'>
                                <span class='checkmark'></span>
                            </label>
                            <div class='multiRowInput'>
                                <div class='sliderBlock'>
                                    <input type='range' min='0' max='10' id='ratingTypeValueBetweenMin' />
                                </div>
                                <div class='sliderBlock'>
                                    <input type='range' min='0' max='10' id='ratingTypeValueBetweenMax' />
                                </div>
                                <div class='rangeDescription'>
                                    <span>0</span>
                                    <span>
                                        <span id='ratingBetweenMinValue'>5</span> -
                                        <span id='ratingBetweenMaxValue'>5</span>
                                    </span>
                                    <span class='rangeMaxValue'>10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='filterButtonRow'>
                        <button id='filterButton'>
                            Filter
                        </button>
                        <button id='clearFilterButton'>
                            Clear
                        </button>
                    </div>
                </div>
                <div id='filterCloseButton'>
                    <h1> f
                    </h1>
                </div>
            </div>
        </aside>
        <div id='movieListBlock'>
            <center>
                <h2>List/Matches</h2>
            </center>
            <div class='matchesRow legend'>
                <label id='titleLabel'>Title</label>
                <label id='yearLabel'>Year</label>
                <label id='ratingLabel'>Rating</label>
            </div>
            <center id='errorMovieSearch'>
                No Movies Were Found
            </center>
            <div id='matchesRowsBlock'>
            </div>
            <center id='loadingSymbolDefaultView'>
                <img class='loadingSymbol' src='./images/loadingSymbol.gif' />
            </center>
        </div>
    </section>
    <script src="js/default.js"></script>
</body>