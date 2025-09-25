document.addEventListener('DOMContentLoaded', function() {
            const ticker = document.querySelector('#ticker');
            if(ticker) {
                ticker.style.animation = "tickerMove 25s linear infinite";
                ticker.addEventListener('mouseenter', () => ticker.style.animationPlayState = 'paused');
                ticker.addEventListener('mouseleave', () => ticker.style.animationPlayState = 'running');
            }
        });