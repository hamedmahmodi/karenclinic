var $ = jQuery;
let functionIsRan = false;
function stepCounter(elementSelector , currentNumber ,endNumber , stepNumber , totalTime){
    let theIntervals = Math.round(totalTime/(endNumber/stepNumber));
    let mainAction = setInterval(() => {
        if(currentNumber<endNumber){
            $(elementSelector).text(currentNumber);
            currentNumber+=stepNumber;
        }
        else{
            $(elementSelector).text(endNumber);
            clearInterval(mainAction);
        }
    }, theIntervals);
}
$(document).ready(function(){
    if($("#counterNumbers").length) {
        let objectCenter = $('#counterNumbers').offset().top + ($('#counterNumbers').outerHeight(true)/2);

        if(objectCenter && functionIsRan==false){
            stepCounter('#counter-1', 1 , 85 , 1 , 1100);
            stepCounter('#counter-2', 1 , 420 , 25 , 1100);
            stepCounter('#counter-3', 1 , 2413 , 20 , 1100);
            stepCounter('#counter-4', 1 , 3786 , 50 , 1100);
            functionIsRan = true;
        }
    };
});