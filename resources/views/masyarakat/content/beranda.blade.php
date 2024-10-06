<div class="bg">
    <div class="bg-overlay">
        <div class="carousel-container">
            <button class="carousel-button prev">❮</button>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="../img/carousel_1.jpg" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel_2.jpg" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel_3.jpg" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel_4.jpg" alt="Image 4">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel_5.jpg" alt="Image 5">
                </div>
            </div>
            <button class="carousel-button next">❯</button>
        </div>
    </div>
</div>
    
<!-- JavaScript -->
<script>
    const carousel = document.querySelector('.carousel');
    const items = document.querySelectorAll('.carousel-item');
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');
    let currentIndex = 0;
    const totalItems = items.length;

    function updateCarousel() {
        items.forEach((item, index) => {
            item.style.transform = 'scale(0.7) translateX(0)';
            item.style.opacity = '0';
            item.style.zIndex = '0';

            // Kartu tengah (utama)
            if (index === currentIndex) {
                item.style.transform = 'scale(1) translateX(0)';
                item.style.opacity = '1';
                item.style.zIndex = '2';
            }

            // Kartu di sebelah kanan
            if (index === (currentIndex + 1) % totalItems) {
                item.style.transform = 'scale(0.85) translateX(200px)';
                item.style.opacity = '1';
                item.style.zIndex = '1';
            }

            // Kartu di sebelah kiri
            if (index === (currentIndex - 1 + totalItems) % totalItems) {
                item.style.transform = 'scale(0.85) translateX(-200px)';
                item.style.opacity = '1';
                item.style.zIndex = '1';
            }
        });
    }

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarousel();
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateCarousel();
    });

    updateCarousel(); // Initialize carousel
</script>


<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.bg {
    background-image: url('../img/background_content.jpg'); 
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Tinggi seluruh viewport */
    width: 100%; 
    position: relative;
}

.bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0; 
    background-color: rgba(0, 0, 0, 0.5); /* Overlay transparan */
    display: flex;
    justify-content: center; /* Memusatkan secara horizontal */
    align-items: center; /* Memusatkan secara vertikal */
    z-index: 1; 
}

.carousel-container {
    position: relative;
    width: 500px; /* Ukuran container carousel */
    height: 500px; /* Tinggi container carousel */
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1000px;
    z-index: 2;
}

.carousel {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    transform-style: preserve-3d;
}

.carousel-item {
    position: absolute;
    width: 80%; /* Gambar hampir memenuhi section */
    height: 100%; /* Tinggi gambar mengikuti section */
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    transition: transform 0.5s ease, opacity 0.5s ease, z-index 0.5s ease;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    color: white;
    font-size: 2rem;
    padding: 10px;
    cursor: pointer;
    z-index: 10;
}

.carousel-button.prev {
    left: 30px;
}

.carousel-button.next {
    right: 30px;
}
    
</style>