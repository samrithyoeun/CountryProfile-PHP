(function(global, $){

    $.fn.fill = function(howMany){
        this.starNum = howMany;
        var randomWidth, randomPlaceFromTop, randomPlaceFromLeft, addStar;
        var imgHTMLStart = '<figure style="';
        var imgHTMLEnd = '"><img src="http://merexcursion.com/stars-and-clouds-bg/images/star-trans.png" alt="star"></figure>';
        while(this.starNum>0){
            randomWidth = 'width:'+ ((Math.floor(Math.random() * (1 + 15))) + 2) + 'px;';
            randomPlaceFromTop = 'top:'+ (Math.round(Math.random() * 100)) + '%;';
            randomPlaceFromLeft = 'left:'+ (Math.round(Math.random() * 100)) + '%;';
            addStar = imgHTMLStart + randomWidth + randomPlaceFromTop + randomPlaceFromLeft + imgHTMLEnd;
            $(this).append(addStar);
            this.starNum--;
        }

        return this;
    }


}(window,jQuery));

