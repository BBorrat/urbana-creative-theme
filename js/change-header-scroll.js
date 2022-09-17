// Change header on scroll

window.onscroll = function() {
    scrollFunction()
}

function scrollFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.getElementById("indexHeader").className = "header__desktop__scroll";
        document.getElementById("header__logo").src="http://urbana-creative-local/wp-content/themes/urbana-creative-theme/assets/images/small-logo.svg";
    } 
    
    else {
        document.getElementById("indexHeader").className = "header__desktop__transparent";
        document.getElementById("header__logo").src="http://urbana-creative-local/wp-content/themes/urbana-creative-theme/assets/images/logo.svg";
    }
}

