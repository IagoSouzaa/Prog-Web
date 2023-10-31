document.addEventListener('DOMContentLoaded', function(event) {
    console.log(`oi`);
    const images = document.querySelectorAll('.carousel');
    let currentIndex = 0;
    console.log(images)
    

    document.querySelector('.prev').addEventListener('click', function() {
        
        // currentIndex = (currentIndex - 1 + images.length) % images.length;
        currentIndex = (currentIndex - 1 );
        console.log(currentIndex);

        if (currentIndex === -4) currentIndex = 0;
        updateCarousel();
    });

    document.querySelector('.next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % images.length;
        updateCarousel();
    });

    function updateCarousel() {
        const offset = currentIndex * 100;
        document.querySelector('.carousel   ').style.transform = `translateX(${offset}%)`;
    }

    document.getElementById('loginBtn').addEventListener('click', function() {
        window.location.href = '../Login';
    });
})
