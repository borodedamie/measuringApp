function showField() {
			
    var option = document.getElementById('short').selected,
        optionTwo = document.getElementById('skirt').selected,
        optionThree = document.getElementById('trouser').selected;

    // sleeveLength.addEventListener('click', addArmHole);

    if( option === true ){

        document.getElementById('_short').style.display = "block";

    } else if ( optionTwo == true ) {

        document.getElementById('_skirt').style.display = "block";

    } else if ( optionThree == true ) {

        document.getElementById('_trouser').style.display = "block";

    }

}